<?php

/**
 * article actions.
 *
 * @package    ramaform
 * @subpackage article
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class articleActions extends sfActions
{
 
  public function executeShow(sfWebRequest $request)
  {
   	$this->object = $this->getRoute()->getObject(); 

   	if( ! $this->object->getIsPublic())
    {
      $this->forward404();
    }

    if($this->object->getArtcategory()->getRecordKey() == 'NEWS')
    {
      $this->setTemplate('new');
    }

  }

  public function executeCompany(sfWebRequest $request)
  {
  	$this->object = ArticleTable::getInstance()->findOneByRecordKey('COMPANY');
  	$this->setTemplate('show');
  }
}
