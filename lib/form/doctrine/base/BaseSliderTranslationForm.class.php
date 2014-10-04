<?php

/**
 * SliderTranslation form base class.
 *
 * @method SliderTranslation getObject() Returns the current form's model object
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSliderTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'     => new sfWidgetFormInputHidden(),
      'text'   => new sfWidgetFormInputText(),
      'button' => new sfWidgetFormInputText(),
      'link'   => new sfWidgetFormInputText(),
      'lang'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'text'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'button' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'link'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'lang'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('slider_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SliderTranslation';
  }

}
