<?php

/**
 * ProductTranslation filter form base class.
 *
 * @package    ramaform
 * @subpackage filter
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductTranslationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'content'    => new sfWidgetFormFilterInput(),
      'price'      => new sfWidgetFormFilterInput(),
      'price_old'  => new sfWidgetFormFilterInput(),
      'dimensions' => new sfWidgetFormFilterInput(),
      'stuff'      => new sfWidgetFormFilterInput(),
      'slug'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'title'      => new sfValidatorPass(array('required' => false)),
      'content'    => new sfValidatorPass(array('required' => false)),
      'price'      => new sfValidatorPass(array('required' => false)),
      'price_old'  => new sfValidatorPass(array('required' => false)),
      'dimensions' => new sfValidatorPass(array('required' => false)),
      'stuff'      => new sfValidatorPass(array('required' => false)),
      'slug'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('product_translation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductTranslation';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'title'      => 'Text',
      'content'    => 'Text',
      'price'      => 'Text',
      'price_old'  => 'Text',
      'dimensions' => 'Text',
      'stuff'      => 'Text',
      'lang'       => 'Text',
      'slug'       => 'Text',
    );
  }
}
