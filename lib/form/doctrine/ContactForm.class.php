<?php

/**
 * Contact form.
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContactForm extends BaseContactForm
{
  public function configure()
  {
  	unset($this['created_at']);
  	unset($this['updated_at']);

  	$this->embedI18n(array('pl'));
  }
}
