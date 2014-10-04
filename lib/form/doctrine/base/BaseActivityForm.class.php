<?php

/**
 * Activity form base class.
 *
 * @method Activity getObject() Returns the current form's model object
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseActivityForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormInputText(),
      'type_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ActivityType'), 'add_empty' => false)),
      'description' => new sfWidgetFormTextarea(),
      'time_from'   => new sfWidgetFormTime(),
      'time_to'     => new sfWidgetFormTime(),
      'day'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'        => new sfValidatorString(array('max_length' => 255)),
      'type_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ActivityType'))),
      'description' => new sfValidatorString(),
      'time_from'   => new sfValidatorTime(),
      'time_to'     => new sfValidatorTime(),
      'day'         => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('activity[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Activity';
  }

}
