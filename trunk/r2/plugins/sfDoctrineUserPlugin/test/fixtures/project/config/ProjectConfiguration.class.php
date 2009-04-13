<?php

if (!isset($_SERVER['SYMFONY']))
{
  throw new RuntimeException('Could not find symfony core libraries.');
}

require_once $_SERVER['SYMFONY'].'/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->setPlugins(array('sfDoctrineUserPlugin', 'sfDoctrinePlugin'));
    $this->setPluginPath('sfDoctrineUserPlugin', dirname(__FILE__).'/../../../..');
    $this->setPluginPath('sfDoctrinePlugin', $this->getSymfonyLibDir().'/plugins/sfDoctrinePlugin');
  }
}
