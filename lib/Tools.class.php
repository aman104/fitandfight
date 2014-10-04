<?php

class Tools
{
	static function getObject()
	{
		$moduleName = sfContext::getInstance()->getModuleName();
		$actionName = sfContext::getInstance()->getActionName();
		$object = sfContext::getInstance()->getController()
				      ->getAction($moduleName, $actionName)
				      ->getRoute()->getObject();
		return $object;
	}

	static function sendEmail($to, $title, $content, $from = 'adres@email.pl')
	{
		$headers = '';
    	$headers  .= 'MIME-Version: 1.0' . "\r\n";
    	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    	$headers .= "From: ". $from . " <" . $from . ">\r\n";
    	ini_set('sendmail_from', $from);
    	mail($to, $title, $content, $headers);
	}

    static function br2space($string)
    {
      /* Changing all <br> types into spaces */
      $string = preg_replace('/<br[^>]*>/',' ',$string);

      /* Avoiding double spaces */
      $string = preg_replace('/[\ ]+/',' ',$string);

      return $string;
    }

    static function substrText($original_text, $max = 100, $sufix = '...')
    {
        $text = self::br2space($original_text);
        $text = strip_tags($text);

        $word = explode(' ', substr($text, $max));

        if (strlen($text) > $max) {
          $text = substr($text, 0, $max);
        }
        else {
          $sufix = '';
        }

        $result = trim($text . $word[0]) . $sufix;

        $result = str_replace('&nbsp;', ' ', $result);

        return $result;
    }
}
