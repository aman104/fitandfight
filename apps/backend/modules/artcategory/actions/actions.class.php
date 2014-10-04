<?php

require_once dirname(__FILE__).'/../lib/artcategoryGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/artcategoryGeneratorHelper.class.php';

/**
 * artcategory actions.
 *
 * @package    ramaform
 * @subpackage artcategory
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class artcategoryActions extends autoArtcategoryActions
{
  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));
    
    if($this->getRoute()->getObject()->getRecordKey() != "")
    {
    	$this->getUser()->setFlash('error', 'Nie można usunąc tego obiektu');
    }
    elseif ($this->getRoute()->getObject()->getNode()->delete())
    {
      $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
    }

    $this->redirect('@artcategory');
  }
  protected function executeBatchDelete(sfWebRequest $request)
  {
	  $ids = $request->getParameter('ids');
	  $records = Doctrine_Query::create()
	    ->from('Artcategory')
	    ->whereIn('id', $ids)
	    ->execute();
	  foreach ($records as $record)
	  {
	    $record->getNode()->delete();
	  }

	  $this->getUser()->setFlash('notice', 'The selected items have been deleted successfully.');
	  $this->redirect('@artcategory');
  }
  protected function addSortQuery($query)
	{
	  $query->addOrderBy('root_id asc');
	  $query->addOrderBy('lft asc');
	}
}
