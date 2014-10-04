<?php

/**
 * homepage actions.
 *
 * @package    ramaform
 * @subpackage homepage
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homepageActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
	   $this->category = ArtcategoryTable::getInstance()->findOneByRecordKey('NEWS');
  }
}