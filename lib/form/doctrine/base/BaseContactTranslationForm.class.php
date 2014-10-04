<?php

/**
 * ContactTranslation form base class.
 *
 * @method ContactTranslation getObject() Returns the current form's model object
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseContactTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'email'   => new sfWidgetFormInputText(),
      'address' => new sfWidgetFormTextarea(),
      'map'     => new sfWidgetFormTextarea(),
      'lang'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'email'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address' => new sfValidatorString(array('required' => false)),
      'map'     => new sfValidatorString(array('required' => false)),
      'lang'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contact_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ContactTranslation';
  }

}
