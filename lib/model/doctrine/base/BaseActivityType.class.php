<?php

/**
 * BaseActivityType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $ico
 * @property string $record_key
 * @property Doctrine_Collection $Activity
 * 
 * @method string              getName()       Returns the current record's "name" value
 * @method string              getIco()        Returns the current record's "ico" value
 * @method string              getRecordKey()  Returns the current record's "record_key" value
 * @method Doctrine_Collection getActivity()   Returns the current record's "Activity" collection
 * @method ActivityType        setName()       Sets the current record's "name" value
 * @method ActivityType        setIco()        Sets the current record's "ico" value
 * @method ActivityType        setRecordKey()  Sets the current record's "record_key" value
 * @method ActivityType        setActivity()   Sets the current record's "Activity" collection
 * 
 * @package    ramaform
 * @subpackage model
 * @author     Paweł Sałajczyk <psalajczyk@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseActivityType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('qui_activities_type');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('ico', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
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
        $this->hasMany('Activity', array(
             'local' => 'id',
             'foreign' => 'type_id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             'unique' => true,
             'canUpdate' => true,
             'uniqueBy' => 
             array(
              0 => 'name',
             ),
             ));
        $this->actAs($sluggable0);
    }
}