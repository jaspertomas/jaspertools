<?php

/**
 * sfUserSimpleRegistrationForm
 * This is a form containing one of each object for an sfUser
 *
 * @package sfDoctrineUserPlugin
 * @author Stephen Ostrow <sostrow@sowebdesigns.com>
 * @copyright 2009 Stephen Ostrow
 * @license See LICENSE that came packaged with this software
 * @version SVN: $Id$
 *
 * @todo Remove all the setFormFormatterName() calls from this class.  Currently there is no way to override it later so I'm leaving it in here and you'll just have to use definition lists
 */
class myBackendGuardUserForm extends sfUserGuardUserForm
{
  public function configure()
  {
    parent:: configure();
    unset($this['algorithm']);
    unset($this['salt']);
    unset($this['last_login']);
    unset($this['created_at']);
    unset($this['updated_at']);
    //unset($this['is_active']);
    //unset($this['is_super_admin']);
    unset($this['groups_list']);
    unset($this['permissions_list']);
  }
}
