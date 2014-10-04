<?php

/**
 * ActivityType form.
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ActivityTypeForm extends BaseActivityTypeForm
{
  public function configure()
  {
  		unset($this['record_key']);


  		$this->widgetSchema['ico'] = new sfWidgetFormInputFileEditable(array(
            'label' => 'Obrazek',
            'file_src' => '',
            'is_image' => false,
            'with_delete' => true,
        ));

		$this->validatorSchema['ico'] = new sfValidatorFile(array(
            'required' => false,
            'path' => sfConfig::get('sf_upload_dir') . '/activities',
            'mime_types' => 'web_images',
        ));

  }

}