<?php

/**
 * article components
 *
 * @package    cms
 * @subpackage article
 * @author     Paweł Sałajczyk
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class articleComponents extends sfComponents
{
	public function executeArticlesList(sfWebRequest $request)
	{
		$this->posts = $this->category->getPublicArticles();
	}

}