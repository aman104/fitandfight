<?php

/**
 * ContactTranslation form.
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContactTranslationForm extends BaseContactTranslationForm
{
  public function configure()
  {
  	$this->widgetSchema['address'] = new sfWidgetFormTextareaTinyMCE();
  }
}