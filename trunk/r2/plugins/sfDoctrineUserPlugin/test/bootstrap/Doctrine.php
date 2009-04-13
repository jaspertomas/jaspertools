<?php

include(dirname(__FILE__).'/unit.php');

new sfDatabaseManager($configuration);
$con = Doctrine_Manager::getInstance()->getCurrentConnection();
Doctrine::loadData($configuration->getRootDir().'/test/fixtures/project/data/fixtures', false);
