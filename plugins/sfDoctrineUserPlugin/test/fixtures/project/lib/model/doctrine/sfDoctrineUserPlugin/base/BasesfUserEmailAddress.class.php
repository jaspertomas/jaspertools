<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasesfUserEmailAddress extends sfDoctrineRecord
{
  public function setTableDefinition()
  {
    $this->setTableName('sf_user_email_address');
    $this->hasColumn('user_id', 'integer', null, array('type' => 'integer'));
    $this->hasColumn('address', 'string', 128, array('type' => 'string', 'length' => 128, 'email' => true));
  }

  public function setUp()
  {
    $this->hasOne('sfUserUser as User', array('local' => 'user_id',
                                              'foreign' => 'id'));

    $timestampable0 = new Doctrine_Template_Timestampable();
    $userstampable0 = new Userstampable();
    $rankable0 = new Rankable();
    $this->actAs($timestampable0);
    $this->actAs($userstampable0);
    $this->actAs($rankable0);
  }
}