<?php

/**
 * Article form.
 *
 * @package    ramaform
 * @subpackage form
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ArticleForm extends BaseArticleForm
{
  public function configure()
  {
  	unset($this['record_key']);
  	unset($this['created_at']);
  	unset($this['updated_at']);

  	$this->embedI18n(array('pl'));

  	$this->setWidget('artcategory_id', new sfWidgetFormDoctrineChoiceNestedSet(array(
      'model'     => 'Artcategory',
      'add_empty' => false,
    )));

  }
}
