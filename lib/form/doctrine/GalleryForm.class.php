<?php

/**
 * Gallery form.
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class GalleryForm extends BaseGalleryForm
{
  public function configure()
  {
  	unset($this['record_key']);
  	unset($this['created_at']);
  	unset($this['updated_at']);
  	$this->embedI18n(array('pl'));

  	$pictureForm = new PictureBackendForm();

    $this->embedForm('picture', $pictureForm);
    $this->widgetSchema['picture']->setLabel('Dodaj obrazek');

  }

  public function save($con = null)
  {
    $values = $this->getValues();

    $object = parent::save($con);

    if(count($values['picture']['file']) > 0)
    {
      $file = $values['picture']['file'];

      $name = md5(microtime().'picture').$file->getExtension();

      $file->save($name);

      $is_default = (count($object->getPictures()->toArray()) > 0) ? false : true;

      $picture = new Picture();
      $picture->setGalleryId($this->getObject()->getPrimaryKey());
      $picture->setFile($name);
      $picture->setIsDefault($is_default);
      $picture->save();

    }
    return $object;
  }

}
