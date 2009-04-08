<?php

/**
 * sfUserAddress form.
 *
 * @package    form
 * @subpackage sfUserAddress
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class sfUserAddressForm extends PluginsfUserAddressForm
{
  public function configure()
  {
    unset($this['created_at'], $this['created_by_user_id'],
          $this['updated_at'], $this['updated_by_user_id']);
  }
}
