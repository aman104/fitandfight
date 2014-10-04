<?php

/**
 * BaseArtcategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $record_key
 * @property Doctrine_Collection $Articles
 * 
 * @method string              getName()       Returns the current record's "name" value
 * @method string              getRecordKey()  Returns the current record's "record_key" value
 * @method Doctrine_Collection getArticles()   Returns the current record's "Articles" collection
 * @method Artcategory         setName()       Sets the current record's "name" value
 * @method Artcategory         setRecordKey()  Sets the current record's "record_key" value
 * @method Artcategory         setArticles()   Sets the current record's "Articles" collection
 * 
 * @package    ramaform
 * @subpackage model
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseArtcategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('qui_artcategories');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'default' => 'Nazwa kategorii',
             'length' => 255,
             ));
        $this->hasColumn('record_key', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));

        $this->option('connection', 'globocam_classic');
        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Article as Articles', array(
             'local' => 'id',
             'foreign' => 'artcategory_id'));

        $nestedset0 = new Doctrine_Template_NestedSet(array(
             'hasManyRoots' => true,
             ));
        $i18n0 = new Doctrine_Template_I18n(array(
             'tableName' => 'qui_artcategories_translation',
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $sluggable1 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             'unique' => true,
             'canUpdate' => true,
             'uniqueBy' => 
             array(
              0 => 'lang',
              1 => 'name',
             ),
             'indexName' => 'artcategory_slug',
             ));
        $i18n0->addChild($sluggable1);
        $this->actAs($nestedset0);
        $this->actAs($i18n0);
    }
}