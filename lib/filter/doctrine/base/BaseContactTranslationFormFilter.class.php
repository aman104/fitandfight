<?php

/**
 * ContactTranslation filter form base class.
 *
 * @package    ramaform
 * @subpackage filter
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseContactTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'email'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'address' => new sfWidgetFormFilterInput(),
      'map'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'email'   => new sfValidatorPass(array('required' => false)),
      'address' => new sfValidatorPass(array('required' => false)),
      'map'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contact_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ContactTranslation';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'email'   => 'Text',
      'address' => 'Text',
      'map'     => 'Text',
      'lang'    => 'Text',
    );
  }
}
