<?php

require_once dirname(__FILE__).'/../lib/contactGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/contactGeneratorHelper.class.php';

/**
 * contact actions.
 *
 * @package    ramaform
 * @subpackage contact
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactActions extends autoContactActions
{
	public function executeIndex(sfWebRequest $request)
	{
		$object = ContactTable::getInstance()->find(1);
		$this->redirect('contact_edit', $object);
	}

	public function executeNew(sfWebRequest $request)
	{
		$object = ContactTable::getInstance()->find(1);
		$this->redirect('contact_edit', $object);
	}

	public function executeDelete(sfWebRequest $request)
	{
		$object = ContactTable::getInstance()->find(1);
		$this->redirect('contact_edit', $object);
	}
}
