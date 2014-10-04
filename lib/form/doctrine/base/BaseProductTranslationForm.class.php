<?php

/**
 * ProductTranslation form base class.
 *
 * @method ProductTranslation getObject() Returns the current form's model object
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductTranslationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'title'      => new sfWidgetFormInputText(),
      'content'    => new sfWidgetFormTextarea(),
      'price'      => new sfWidgetFormInputText(),
      'price_old'  => new sfWidgetFormInputText(),
      'dimensions' => new sfWidgetFormInputText(),
      'stuff'      => new sfWidgetFormInputText(),
      'lang'       => new sfWidgetFormInputHidden(),
      'slug'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'content'    => new sfValidatorString(array('required' => false)),
      'price'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'price_old'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dimensions' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'stuff'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'lang'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('lang')), 'empty_value' => $this->getObject()->get('lang'), 'required' => false)),
      'slug'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'ProductTranslation', 'column' => array('slug', 'lang', 'title')))
    );

    $this->widgetSchema->setNameFormat('product_translation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProductTranslation';
  }

}
