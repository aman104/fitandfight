<?php

/**
 * Artcategory form base class.
 *
 * @method Artcategory getObject() Returns the current form's model object
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArtcategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'record_key' => new sfWidgetFormInputText(),
      'root_id'    => new sfWidgetFormInputText(),
      'lft'        => new sfWidgetFormInputText(),
      'rgt'        => new sfWidgetFormInputText(),
      'level'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'record_key' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'root_id'    => new sfValidatorInteger(array('required' => false)),
      'lft'        => new sfValidatorInteger(array('required' => false)),
      'rgt'        => new sfValidatorInteger(array('required' => false)),
      'level'      => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('artcategory[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Artcategory';
  }

}
