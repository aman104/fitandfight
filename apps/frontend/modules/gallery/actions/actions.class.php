<?php

/**
 * gallery actions.
 *
 * @package    ramaform
 * @subpackage gallery
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class galleryActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->gallery = GalleryTable::getInstance()->getFirst();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->gallery = $this->getRoute()->getObject();
  }

}
