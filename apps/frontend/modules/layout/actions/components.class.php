<?php

/**
 * layout components
 *
 * @package    cms
 * @subpackage layout
 * @author     Paweł Sałajczyk
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class layoutComponents extends sfComponents
{
	public function executeTop(sfWebRequest $request)
	{

	}

	public function executeFooter(sfWebRequest $request)
	{
		
	}

	public function executeGa(sfWebRequest $request)
	{
		
	}	

	public function executeSidebar(sfWebRequest $request)
	{	
		$this->group = ArticleTable::getInstance()->findOneByRecordKey('GROUP');
		$this->trening = ArticleTable::getInstance()->findOneByRecordKey('TRENING');
	}	


	public function executeMenuTop(sfWebRequest $request)
	{

		$this->onas = ArticleTable::getInstance()->findOneByRecordKey('COMPANY');
		$this->cennik = ArticleTable::getInstance()->findOneByRecordKey('PRICE');
		$this->trenerzy = ArticleTable::getInstance()->findOneByRecordKey('TRAINERS');
		$this->activities = ArticleTable::getInstance()->findOneByRecordKey('ACTIVITIES');

		$this->exc = ArticleTable::getInstance()->findOneByRecordKey('EXC');

		$this->news = ArtcategoryTable::getInstance()->findOneByRecordKey('NEWS');

		$moduleName = sfContext::getInstance()->getModuleName();
		$actionName = sfContext::getInstance()->getActionName();

		$active = false;

		switch($moduleName)
		{
			case 'homepage':
				$active = 'homepage';
				break;
			case 'contact':
				$active = 'contact';
				break;	
		}

		$this->active = $active;
	}

	public function executeSlider(sfWebRequest $request)
	{
		$this->sliders = SliderTable::getInstance()->getRandom();
	}

}