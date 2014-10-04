<?php

if(in_array($_SERVER['SERVER_NAME'], array('dartronic.com', 'www.dartronic.com', 'dartronic.pl', 'www.dartronic.pl')))
{
	echo '<br /><br /><br />';
	echo '<h1 style="text-align: center;">Strona w budowie</h1>';
	exit;
}

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
