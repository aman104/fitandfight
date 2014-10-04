<?php

/**
 * Artcategory filter form base class.
 *
 * @package    ramaform
 * @subpackage filter
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArtcategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'record_key' => new sfWidgetFormFilterInput(),
      'root_id'    => new sfWidgetFormFilterInput(),
      'lft'        => new sfWidgetFormFilterInput(),
      'rgt'        => new sfWidgetFormFilterInput(),
      'level'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'record_key' => new sfValidatorPass(array('required' => false)),
      'root_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'lft'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rgt'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'level'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('artcategory_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Artcategory';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'record_key' => 'Text',
      'root_id'    => 'Number',
      'lft'        => 'Number',
      'rgt'        => 'Number',
      'level'      => 'Number',
    );
  }
}
