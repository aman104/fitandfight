<?php

/**
 * Article filter form base class.
 *
 * @package    ramaform
 * @subpackage filter
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArticleFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'artcategory_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Artcategory'), 'add_empty' => true)),
      'gallery_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Gallery'), 'add_empty' => true)),
      'is_public'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'record_key'     => new sfWidgetFormFilterInput(),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'files_list'     => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'File')),
    ));

    $this->setValidators(array(
      'artcategory_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Artcategory'), 'column' => 'id')),
      'gallery_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Gallery'), 'column' => 'id')),
      'is_public'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'record_key'     => new sfValidatorPass(array('required' => false)),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'files_list'     => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'File', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('article_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addFilesListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.ArticleFile ArticleFile')
      ->andWhereIn('ArticleFile.file_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Article';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'artcategory_id' => 'ForeignKey',
      'gallery_id'     => 'ForeignKey',
      'is_public'      => 'Boolean',
      'record_key'     => 'Text',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
      'files_list'     => 'ManyKey',
    );
  }
}
