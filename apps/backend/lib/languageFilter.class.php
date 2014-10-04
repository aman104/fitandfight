<?php

class languageFilter extends sfFilter
{
  public function execute ($filterChain)
  { 
  	$this->getContext()->getUser()->setCulture('pl');	
    $filterChain->execute();
  }
}