<?php

/**
 * Slider form.
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SliderForm extends BaseSliderForm
{
  public function configure()
  {
  	unset($this['record_key']);
  	unset($this['created_at']);
  	unset($this['updated_at']);
  	unset($this['position']);

  	$this->embedI18n(array('pl'));

    $this->widgetSchema['file'] = new sfWidgetFormInputFileEditable(array(
        'label' => 'Obrazek',
        'file_src' => '',
        'is_image' => false,
        'with_delete' => false,
    ));

	$this->validatorSchema['file'] = new sfValidatorFile(array(
        'required' => false,
        'path' => sfConfig::get('sf_upload_dir') . '/sliders',
        'mime_types' => 'web_images',
    ));
  	
  }
}
