<?php

/**
 * BaseMaps
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $match_id
 * @property varchar $map_name
 * @property integer $score_1
 * @property integer $score_2
 * @property enum $current_side
 * @property integer $status
 * @property enum $maps_for
 * @property integer $nb_ot
 * @property integer $identifier_id
 * @property varchar $tv_record_file
 * @property Matchs $Match
 * @property Doctrine_Collection $Matchs
 * @property Doctrine_Collection $MapsScore
 * @property Doctrine_Collection $Players
 * @property Doctrine_Collection $Round
 * @property Doctrine_Collection $RoundSummary
 * @property Doctrine_Collection $PlayerKill
 * @property Doctrine_Collection $PlayersHeatmap
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method integer             getMatchId()        Returns the current record's "match_id" value
 * @method varchar             getMapName()        Returns the current record's "map_name" value
 * @method integer             getScore1()         Returns the current record's "score_1" value
 * @method integer             getScore2()         Returns the current record's "score_2" value
 * @method enum                getCurrentSide()    Returns the current record's "current_side" value
 * @method integer             getStatus()         Returns the current record's "status" value
 * @method enum                getMapsFor()        Returns the current record's "maps_for" value
 * @method integer             getNbOt()           Returns the current record's "nb_ot" value
 * @method integer             getIdentifierId()   Returns the current record's "identifier_id" value
 * @method varchar             getTvRecordFile()   Returns the current record's "tv_record_file" value
 * @method Matchs              getMatch()          Returns the current record's "Match" value
 * @method Doctrine_Collection getMatchs()         Returns the current record's "Matchs" collection
 * @method Doctrine_Collection getMapsScore()      Returns the current record's "MapsScore" collection
 * @method Doctrine_Collection getPlayers()        Returns the current record's "Players" collection
 * @method Doctrine_Collection getRound()          Returns the current record's "Round" collection
 * @method Doctrine_Collection getRoundSummary()   Returns the current record's "RoundSummary" collection
 * @method Doctrine_Collection getPlayerKill()     Returns the current record's "PlayerKill" collection
 * @method Doctrine_Collection getPlayersHeatmap() Returns the current record's "PlayersHeatmap" collection
 * @method Maps                setId()             Sets the current record's "id" value
 * @method Maps                setMatchId()        Sets the current record's "match_id" value
 * @method Maps                setMapName()        Sets the current record's "map_name" value
 * @method Maps                setScore1()         Sets the current record's "score_1" value
 * @method Maps                setScore2()         Sets the current record's "score_2" value
 * @method Maps                setCurrentSide()    Sets the current record's "current_side" value
 * @method Maps                setStatus()         Sets the current record's "status" value
 * @method Maps                setMapsFor()        Sets the current record's "maps_for" value
 * @method Maps                setNbOt()           Sets the current record's "nb_ot" value
 * @method Maps                setIdentifierId()   Sets the current record's "identifier_id" value
 * @method Maps                setTvRecordFile()   Sets the current record's "tv_record_file" value
 * @method Maps                setMatch()          Sets the current record's "Match" value
 * @method Maps                setMatchs()         Sets the current record's "Matchs" collection
 * @method Maps                setMapsScore()      Sets the current record's "MapsScore" collection
 * @method Maps                setPlayers()        Sets the current record's "Players" collection
 * @method Maps                setRound()          Sets the current record's "Round" collection
 * @method Maps                setRoundSummary()   Sets the current record's "RoundSummary" collection
 * @method Maps                setPlayerKill()     Sets the current record's "PlayerKill" collection
 * @method Maps                setPlayersHeatmap() Sets the current record's "PlayersHeatmap" collection
 * 
 * @package    PhpProject1
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMaps extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('maps');
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
        $this->hasColumn('map_name', 'varchar', 50, array(
             'type' => 'varchar',
             'length' => 50,
             ));
        $this->hasColumn('score_1', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
        $this->hasColumn('score_2', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
        $this->hasColumn('current_side', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'ct',
              1 => 't',
             ),
             ));
        $this->hasColumn('status', 'integer', 3, array(
             'type' => 'integer',
             'length' => 3,
             ));
        $this->hasColumn('maps_for', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'default',
              1 => 'team1',
              2 => 'team2',
             ),
             ));
        $this->hasColumn('nb_ot', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('identifier_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             ));
        $this->hasColumn('tv_record_file', 'varchar', 255, array(
             'type' => 'varchar',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Matchs as Match', array(
             'local' => 'match_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('Matchs', array(
             'local' => 'id',
             'foreign' => 'current_map'));

        $this->hasMany('MapsScore', array(
             'local' => 'id',
             'foreign' => 'map_id'));

        $this->hasMany('Players', array(
             'local' => 'id',
             'foreign' => 'map_id'));

        $this->hasMany('Round', array(
             'local' => 'id',
             'foreign' => 'map_id'));

        $this->hasMany('RoundSummary', array(
             'local' => 'id',
             'foreign' => 'map_id'));

        $this->hasMany('PlayerKill', array(
             'local' => 'id',
             'foreign' => 'map_id'));

        $this->hasMany('PlayersHeatmap', array(
             'local' => 'id',
             'foreign' => 'map_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}