<?php

/**
 * SliderTranslation form.
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SliderTranslationForm extends BaseSliderTranslationForm
{
  public function configure()
  {
  	unset($this['slug']);
  	$this->widgetSchema['text']->setLabel('Nazwa');
  	$this->widgetSchema['button']->setLabel('Napis na przycisku');
  	$this->widgetSchema['link']->setLabel('Adres URL');
  }
}
