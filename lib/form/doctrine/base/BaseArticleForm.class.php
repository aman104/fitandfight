<?php

/**
 * Article form base class.
 *
 * @method Article getObject() Returns the current form's model object
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArticleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'artcategory_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Artcategory'), 'add_empty' => false)),
      'gallery_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery'), 'add_empty' => true)),
      'is_public'      => new sfWidgetFormInputCheckbox(),
      'record_key'     => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'files_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'File')),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'artcategory_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Artcategory'))),
      'gallery_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery'), 'required' => false)),
      'is_public'      => new sfValidatorBoolean(array('required' => false)),
      'record_key'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
      'files_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'File', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('article[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Article';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['files_list']))
    {
      $this->setDefault('files_list', $this->object->Files->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveFilesList($con);

    parent::doSave($con);
  }

  public function saveFilesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['files_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Files->getPrimaryKeys();
    $values = $this->getValue('files_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Files', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Files', array_values($link));
    }
  }

}
