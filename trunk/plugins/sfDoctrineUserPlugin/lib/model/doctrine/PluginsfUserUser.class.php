<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class PluginsfUserUser extends BasesfUserUser
{

  /**
   * This returns a formatted name for the user consisting of lastname comma first initial
   *
   * @return string
   */
  public function __toString()
  {
    return $this->last_name . ', ' . substr($this->first_name, 0, 1);
  }

  public function getFullName()
  {
    $full_name = '';
    if($this['prefix']) $full_name .= $this['prefix'] . ' ';
    $full_name .= $this['first_name'] . ' ';
    $full_name .= $this['middle_name'] . ' ';
    $full_name .= $this['last_name'];
    if($this['suffix']) $full_name .= ' ' .$this['suffix'];
    return $full_name;
  }

  /**
   * Begin functions to modify sfGuardUser through sfUserUser
   *
   */
  public function getUsername()
  {
    return $this['sfGuardUser']['username'];
  }
  public function setUsername($username)
  {
    $this['sfGuardUser']['username'] = $username;
  }

  public function getPassword()
  {
    return $this['sfGuardUser']['password'];
  }

  public function setPassword($password)
  {
    $this['sfGuardUser']['password'] = $password;
  }


  /**
   * Get First Phone record which is of type fax
   *
   * @return sfUserPhone
   */
  public function getFirstFax()
  {
    return Doctrine_Query::create()
      ->from('sfUserPhone p')
      ->addWhere('p.PhoneType.name = ?', 'Fax')
      ->addWhere('p.user_id = ?', $this->get('id'))
      ->orderBy('p.rank')
      ->fetchOne();
  }

  /**
   * Blank stub for admin-generator to try and set the password_confirm of a user
   *
   * @param string $password_confirm
   */
  public function getPasswordConfirm() { return false; }
  public function setPasswordConfirm($password_confirm) {}

  public function getIsActive()
  {
    return $this['sfGuardUser']['is_active'];
  }

  public function getGroups()
  {
    return $this['sfGuardUser']['groups'];
  }

  public function setGroups($groups)
  {
    var_dump($groups); die();
  }

  public function getPermissions()
  {
    return $this['sfGuardUser']['permissions'];
  }

}