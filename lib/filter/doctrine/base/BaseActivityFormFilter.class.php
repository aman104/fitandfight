<?php

/**
 * Activity filter form base class.
 *
 * @package    ramaform
 * @subpackage filter
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseActivityFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ActivityType'), 'add_empty' => true)),
      'description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'time_from'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'time_to'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'day'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'        => new sfValidatorPass(array('required' => false)),
      'type_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ActivityType'), 'column' => 'id')),
      'description' => new sfValidatorPass(array('required' => false)),
      'time_from'   => new sfValidatorPass(array('required' => false)),
      'time_to'     => new sfValidatorPass(array('required' => false)),
      'day'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('activity_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Activity';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'name'        => 'Text',
      'type_id'     => 'ForeignKey',
      'description' => 'Text',
      'time_from'   => 'Text',
      'time_to'     => 'Text',
      'day'         => 'Number',
    );
  }
}
