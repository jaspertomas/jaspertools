<?php
  include(dirname(__FILE__).'/../../bootstrap/Doctrine.php');

  $t = new lime_test(1, new lime_output_color());

  $_SERVER['session_id'] = 'test';

  $dispatcher = new sfEventDispatcher();
  $sessionPath = sfToolkit::getTmpDir().'/sessions_'.rand(11111, 99999);
  $storage = new sfSessionTestStorage(array('session_path' => $sessionPath));

  $users = array();
  $users[0] = new sfUser($dispatcher, $storage);
  $users[1] = new sfUser($dispatcher, $storage);
  $users[2] = new sfUser($dispatcher, $storage);
  $users[3] = new sfUser($dispatcher, $storage);

  $sf_guard_users = array();
//  $sf_guard_users[0] = create_user(array('username' => 'User 1'), true);
//  $sf_guard_users[1] = create_user(array('username' => 'User 2'), true);
//  $sf_guard_users[2] = create_user(array('username' => 'User 3'), true);

  /*
   * Begin Tests
   */

  $user[0] = new sfUserUser();
  $user[0]->set('first_name', 'FirstName');
  $user[0]->save();

