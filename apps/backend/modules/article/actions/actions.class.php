<?php

require_once dirname(__FILE__).'/../lib/articleGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/articleGeneratorHelper.class.php';

/**
 * article actions.
 *
 * @package    ramaform
 * @subpackage article
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class articleActions extends autoArticleActions
{
  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

    if($this->getRoute()->getObject()->getRecordKey() != "")
    {
    	$this->getUser()->setFlash('error', 'Nie można usunąc tego obiektu');
    }
    elseif ($this->getRoute()->getObject()->delete())
    {
      $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
    }

    $this->redirect('@article');
  }
}
