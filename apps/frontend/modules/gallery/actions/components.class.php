<?php

/**
 * gallery components
 *
 * @package    cms
 * @subpackage layout
 * @author     Paweł Sałajczyk
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class galleryComponents extends sfComponents
{
	public function executeList(sfWebRequest $request)
	{	
		$this->galleries = GalleryTable::getInstance()->getAllOnList();
	}
}