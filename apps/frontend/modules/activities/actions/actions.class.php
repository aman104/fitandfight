<?php

/**
 * activities actions.
 *
 * @package    ramaform
 * @subpackage activities
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class activitiesActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  	 $this->types = ActivityTypeTable::getInstance()->getBySlugs(array('fitness', 'sztuki-walki'));
  }

    public function executeIndex2(sfWebRequest $request)
    {
        $this->types = ActivityTypeTable::getInstance()->getBySlugs(array('fitness-korfantego', 'sztuki-walki-korfantego'));
        $this->setTemplate('index');
    }

  public function executeShow(sfWebRequest $request)
  {
    $this->object = $this->getRoute()->getObject();

    $this->activities = $this->object->getActivitiesArray();

  }
}
