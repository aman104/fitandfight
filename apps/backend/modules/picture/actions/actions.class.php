<?php

require_once dirname(__FILE__).'/../lib/pictureGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/pictureGeneratorHelper.class.php';

/**
 * picture actions.
 *
 * @package    ramaform
 * @subpackage picture
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pictureActions extends autoPictureActions
{
  public function executeDeletePicture(sfWebRequest $request)
  {
    $this->getRoute()->getObject()->delete();
    $this->getUser()->setFlash('notice', 'Obrazek został usunięty');
    $this->redirect($request->getReferer());
  }

  public function executeDefaultPicture(sfWebRequest $request)
  {
    $picture = $this->getRoute()->getObject();
    $picture_old = $picture->getGallery()->getDefaultPicture();

    if($picture_old)
    {
      $picture_old->setIsDefault(false);
      $picture_old->save();
    }

    $picture->setIsDefault(true);
    $picture->save();

    $this->getUser()->setFlash('notice', 'Obrazek został ustawiony jako domyślny');
    $this->redirect($request->getReferer());
  }
}
