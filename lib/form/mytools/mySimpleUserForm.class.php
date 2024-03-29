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
class mySimpleUserForm extends sfUserUserForm
{
  public function configure()
  {
    parent::configure();

    # Setup sfGuardUser
    //use myGuardUserForm instead of sfUserGuardUserForm
    $sf_guard_user = new sfUserGuardUserForm($this->getObject()->getGuardUser());
    $sf_guard_user->validatorSchema['password']->setOption('required', false);
    $sf_guard_user->validatorSchema['password_confirmation']->setOption('required', false);

    unset($sf_guard_user['algorithm']);
    unset($sf_guard_user['salt']);
    unset($sf_guard_user['last_login']);
    unset($sf_guard_user['created_at']);
    unset($sf_guard_user['updated_at']);
    unset($sf_guard_user['is_active']);
    unset($sf_guard_user['is_super_admin']);
    unset($sf_guard_user['groups_list']);
    unset($sf_guard_user['permissions_list']);

    unset($this['sf_guard_user_id']);
    $this->embedForm('sf_guard_user', $sf_guard_user);

    unset($this['prefix']);
    unset($this['suffix']);
    unset($this['date_of_birth']);
    unset($this['created_at']);
    unset($this['updated_at']);
    unset($this['created_by_user_id']);
    unset($this['updated_by_user_id']);
    
/*
    # Setup UserAddress information
    $sf_user_address = new sfUserAddressForm($this->getObject()->Addresses[0]);
    unset($sf_user_address['user_id']);
    $this->embedForm('sf_user_address', $sf_user_address);

    # Setup UserEmailAddress information
    $sf_user_email_address = new sfUserEmailAddressForm($this->getObject()->EmailAddresses[0]);
    unset($sf_user_email_address['user_id']);
    $this->embedForm('sf_user_email_address', $sf_user_email_address);

    # Setup UserPhone information
    $sf_user_phone = new sfUserPhoneForm($this->getObject()->Phones[0]);
    unset($sf_user_phone['user_id']);
    $this->embedForm('sf_user_phone', $sf_user_phone);

    # Setup UserImAccount information
    $sf_user_im_account = new sfUserImAccountForm($this->getObject()->ImAccounts[0]);
    unset($sf_user_im_account['user_id']);
    $this->embedForm('sf_user_im_account', $sf_user_im_account);
*/

  }
}
