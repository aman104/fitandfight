<?php

/**
 * Activity form.
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ActivityForm extends BaseActivityForm
{
  public function configure()
  {
	$days = array('1' => 'Poniedziałek', '2' => 'Wtorek', '3' => 'Środa', '4' => 'Czwartek', '5' => 'Piątek', '6' => 'Sobota');
	$this->widgetSchema['day'] = new sfWidgetFormChoice(array('choices' => $days)); 

	$this->widgetSchema['time_from'] = new sfWidgetFormTime(array('minutes' => array('0' => '00','30' => '30')));
	$this->widgetSchema['time_to'] = new sfWidgetFormTime(array('minutes' => array('0' => '00','30' => '30')));
  }
}
