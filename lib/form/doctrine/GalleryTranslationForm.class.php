<?php

/**
 * GalleryTranslation form.
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class GalleryTranslationForm extends BaseGalleryTranslationForm
{
  public function configure()
  {
  	unset($this['slug']);
  }
}
