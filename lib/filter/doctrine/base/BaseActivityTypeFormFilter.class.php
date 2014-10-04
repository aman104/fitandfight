<?php

/**
 * ActivityType filter form base class.
 *
 * @package    ramaform
 * @subpackage filter
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseActivityTypeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ico'        => new sfWidgetFormFilterInput(),
      'record_key' => new sfWidgetFormFilterInput(),
      'slug'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'       => new sfValidatorPass(array('required' => false)),
      'ico'        => new sfValidatorPass(array('required' => false)),
      'record_key' => new sfValidatorPass(array('required' => false)),
      'slug'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('activity_type_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ActivityType';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'name'       => 'Text',
      'ico'        => 'Text',
      'record_key' => 'Text',
      'slug'       => 'Text',
    );
  }
}
