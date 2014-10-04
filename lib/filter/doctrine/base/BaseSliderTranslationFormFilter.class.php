<?php

/**
 * SliderTranslation filter form base class.
 *
 * @package    ramaform
 * @subpackage filter
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSliderTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'text'   => new sfWidgetFormFilterInput(),
      'button' => new sfWidgetFormFilterInput(),
      'link'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'text'   => new sfValidatorPass(array('required' => false)),
      'button' => new sfValidatorPass(array('required' => false)),
      'link'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('slider_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SliderTranslation';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'text'   => 'Text',
      'button' => 'Text',
      'link'   => 'Text',
      'lang'   => 'Text',
    );
  }
}
