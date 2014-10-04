<?php

require_once dirname(__FILE__).'/../lib/sliderGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/sliderGeneratorHelper.class.php';

/**
 * slider actions.
 *
 * @package    ramaform
 * @subpackage slider
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sliderActions extends autoSliderActions
{
	public function executeListUp(sfWebRequest $request)
	{
		$object = $this->getRoute()->getObject();
		$object->promote();
		$this->redirect('@slider');
	}
	public function executeListDown(sfWebRequest $request)
	{
		$object = $this->getRoute()->getObject();
		$object->demote();
		$this->redirect('@slider');
	}
}
