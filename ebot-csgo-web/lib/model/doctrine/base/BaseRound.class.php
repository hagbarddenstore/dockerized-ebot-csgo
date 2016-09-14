<?php

/**
 * BaseRound
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $match_id
 * @property integer $map_id
 * @property varchar $event_name
 * @property text $event_text
 * @property integer $event_time
 * @property integer $kill_id
 * @property integer $round_id
 * @property Matchs $Match
 * @property Maps $Map
 * @property PlayerKill $Kill
 * 
 * @method integer    getId()         Returns the current record's "id" value
 * @method integer    getMatchId()    Returns the current record's "match_id" value
 * @method integer    getMapId()      Returns the current record's "map_id" value
 * @method varchar    getEventName()  Returns the current record's "event_name" value
 * @method text       getEventText()  Returns the current record's "event_text" value
 * @method integer    getEventTime()  Returns the current record's "event_time" value
 * @method integer    getKillId()     Returns the current record's "kill_id" value
 * @method integer    getRoundId()    Returns the current record's "round_id" value
 * @method Matchs     getMatch()      Returns the current record's "Match" value
 * @method Maps       getMap()        Returns the current record's "Map" value
 * @method PlayerKill getKill()       Returns the current record's "Kill" value
 * @method Round      setId()         Sets the current record's "id" value
 * @method Round      setMatchId()    Sets the current record's "match_id" value
 * @method Round      setMapId()      Sets the current record's "map_id" value
 * @method Round      setEventName()  Sets the current record's "event_name" value
 * @method Round      setEventText()  Sets the current record's "event_text" value
 * @method Round      setEventTime()  Sets the current record's "event_time" value
 * @method Round      setKillId()     Sets the current record's "kill_id" value
 * @method Round      setRoundId()    Sets the current record's "round_id" value
 * @method Round      setMatch()      Sets the current record's "Match" value
 * @method Round      setMap()        Sets the current record's "Map" value
 * @method Round      setKill()       Sets the current record's "Kill" value
 * 
 * @package    PhpProject1
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRound extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('round');
        $this->hasColumn('id', 'integer', 20, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => 20,
             ));
        $this->hasColumn('match_id', 'integer', 20, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('map_id', 'integer', 20, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('event_name', 'varchar', 255, array(
             'type' => 'varchar',
             'length' => 255,
             ));
        $this->hasColumn('event_text', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('event_time', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
        $this->hasColumn('kill_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('round_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Matchs as Match', array(
             'local' => 'match_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Maps as Map', array(
             'local' => 'map_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('PlayerKill as Kill', array(
             'local' => 'kill_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}