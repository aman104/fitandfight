<?php

/**
 * contact actions.
 *
 * @package    ramaform
 * @subpackage contact
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactActions extends sfActions
{

  public function executeIndex(sfWebRequest $request)
  {
    $this->object = ContactTable::getInstance()->find(1);
    $this->form = new ContactFrontendForm($this->object);

    if($request->isMethod('post'))
    {

     	$values = $request->getParameter('contact');
  		$this->form->bind($values);
  		if($this->form->isValid())
  		{
  			$return = $this->form->save();
  			$this->getUser()->setFlash('notice', 'Wiadomość została wysłana', true);
  			$this->redirect('@contact');
  		}
	    else
	    {
	    	$this->getUser()->setFlash('error', 'Wypełnij poprawnie wszystkie wymagane pola', false);
	    }
    }

  }
}
