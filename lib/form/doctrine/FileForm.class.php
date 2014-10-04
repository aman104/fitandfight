<?php

/**
 * File form.
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FileForm extends BaseFileForm
{
  public function configure()
  {
  	unset($this['record_key']);
  	unset($this['created_at']);
  	unset($this['updated_at']);
  	unset($this['articles_list']);
  	unset($this['products_list']);

  	$this->embedI18n(array('pl'));

  	$this->widgetSchema['file'] = new sfWidgetFormInputFileEditable(array(
        'label' => 'Plik',
        'file_src' => '',
        'is_image' => false,
        'with_delete' => false,
        'file_src' => '/uploads/files/' . $this->getObject()->getFile(),
        'is_image' => false,
        'edit_mode' => !$this->isNew(),
    ));

	$this->validatorSchema['file'] = new sfValidatorFile(array(
        'required' => false,
        'path' => sfConfig::get('sf_upload_dir') . '/files',
    ));

  }
}
