<?php

/**
 * ProductTranslation form.
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductTranslationForm extends BaseProductTranslationForm
{
  public function configure()
  {
  	unset($this['slug']);
  	$this->widgetSchema['content'] = new sfWidgetFormTextareaTinyMCE();
  	$this->widgetSchema['content']->setLabel('Opis');
  	$this->widgetSchema['title']->setLabel('Nazwa');
  	$this->widgetSchema['price']->setLabel('Cena');
  	$this->widgetSchema['price_old']->setLabel('Stara cena');
  	$this->widgetSchema['dimensions']->setLabel('Wymiary');
  	$this->widgetSchema['stuff']->setLabel('Materiał');
  }
}
