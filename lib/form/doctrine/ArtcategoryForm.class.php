<?php

/**
 * Artcategory form.
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ArtcategoryForm extends BaseArtcategoryForm
{
  public function configure()
  {

  	unset($this['record_key']);
  	unset($this['created_at']);
  	unset($this['updated_at']);
  	unset($this['root_id']);
  	unset($this['lft']);
  	unset($this['rgt']);
  	unset($this['level']);

  	$this->embedI18n(array('pl'));

  	// create a new widget to represent this category's "parent"
    $this->setWidget('parent', new sfWidgetFormDoctrineChoiceNestedSet(array(
      'model'     => 'Artcategory',
      'add_empty' => true,
      'table_method' => 'getArtcategoriesQuery',
    )));

    // if the current category has a parent, make it the default choice
    if ($this->getObject()->getNode()->hasParent())
    {
      $this->setDefault('parent', $this->getObject()->getNode()->getParent()->getId());
    }

    // set labels of fields
    $this->widgetSchema->setLabels(array(
      'parent' => 'Rodzic',
    ));
    // set a validator for parent which prevents a category being moved to one of its own descendants
    $this->setValidator('parent', new sfValidatorDoctrineChoiceNestedSet(array(
      'required' => false,
      'model'    => 'Artcategory',
      'node'     => $this->getObject(),
    )));
    $this->getValidator('parent')->setMessage('node', 'A category cannot be made a descendent of itself.');
  }

  public function doSave($con = null)
  {
    // save the record itself
    parent::doSave($con);
    // if a parent has been specified, add/move this node to be the child of that node
    if ($this->getValue('parent'))
    {
      $parent = ArtcategoryTable::getInstance()->findOneById($this->getValue('parent'));
      if ($this->isNew())
      {
        $this->getObject()->getNode()->insertAsLastChildOf($parent);
      }
      else
      {
        $this->getObject()->getNode()->moveAsLastChildOf($parent);
      }
    }
    // if no parent was selected, add/move this node to be a new root in the tree
    else
    {
      $categoryTree = ArtcategoryTable::getInstance()->getTree();
      if ($this->isNew())
      {
        $categoryTree->createRoot($this->getObject());
      }
      else
      {
        $this->getObject()->getNode()->makeRoot($this->getObject()->getId());
      }
    }
  }
}
