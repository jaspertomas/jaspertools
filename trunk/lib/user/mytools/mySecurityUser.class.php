<?php

/*
 * This file is part of the symfony package that I modified to allow me to
 * specify custom namespaces for my sfGuardAuth session data
 * 
 * sfDoctrineGuardPlugin required    
 * 
 * usage:
 * 1. edit below: rename namespace to your desired project namespace  
 * 2. edit 
 * "class myUser extends sfUserSecurityUser" in myUser.class.php 
 * to 
 * "class myUser extends mySecurityUser"
 * 
 * 3. if you use sfDoctrineUserPlugin, use  
 * class mySecurityUser extends sfUserSecurityUser
 * instead of 
 * class mySecurityUser extends sfGuardSecurityUser
 * below 
 *     
 * 4. clear the cache
 */
/*
 * This file is part of the symfony package. (modified by Jasper Tomas) 
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 * (c) 2004-2006 Sean Kerr <sean@code-box.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * sfUser wraps a client session and provides accessor methods for user
 * attributes. It also makes storing and retrieving multiple page form data
 * rather easy by allowing user attributes to be stored in namespaces, which
 * help organize data.
 *
 * @package    symfony
 * @subpackage user
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @author     Sean Kerr <sean@code-box.org>
 * @version    SVN: $Id: sfUser.class.php 9060 2008-05-19 21:31:17Z FabianLange $
 */
//class mySecurityUser extends sfGuardSecurityUser
class mySecurityUser extends sfUserSecurityUser
{
  /**
   * The namespace under which attributes will be stored.
   */
  const ATTRIBUTE_NAMESPACE = 'namespace/symfony/user/sfUser/attributes';
  const CULTURE_NAMESPACE = 'namespace/symfony/user/sfUser/culture';
  const LAST_REQUEST_NAMESPACE = 'namespace/symfony/user/sfUser/lastRequest';
  const AUTH_NAMESPACE = 'namespace/symfony/user/sfUser/authenticated';
  const CREDENTIAL_NAMESPACE = 'namespace/symfony/user/sfUser/credentials';

  public function initialize(sfEventDispatcher $dispatcher, sfStorage $storage, $options = array())
  {
    //for sfUser---------------------------------------------------
    $this->dispatcher = $dispatcher;
    $this->storage    = $storage;

    $this->options = array_merge(array(
      'auto_shutdown'   => true,
      'culture'         => null,
      'default_culture' => 'en',
      'use_flash'       => false,
      'logging'         => false,
    ), $options);

    $this->attributeHolder = new sfNamespacedParameterHolder(self::ATTRIBUTE_NAMESPACE);

    // read attributes from storage
    $attributes = $storage->read(self::ATTRIBUTE_NAMESPACE);
    if (is_array($attributes))
    {
      foreach ($attributes as $namespace => $values)
      {
        $this->attributeHolder->add($values, $namespace);
      }
    }

    // set the user culture to sf_culture parameter if present in the request
    // otherwise
    //  - use the culture defined in the user session
    //  - use the default culture set in settings.yml
    $currentCulture = $storage->read(self::CULTURE_NAMESPACE);
    $this->setCulture(!is_null($this->options['culture']) ? $this->options['culture'] : (!is_null($currentCulture) ? $currentCulture : $this->options['default_culture']));

    // flag current flash to be removed at shutdown
    if ($this->options['use_flash'] && $names = $this->attributeHolder->getNames('symfony/user/sfUser/flash'))
    {
      if ($this->options['logging'])
      {
        $this->dispatcher->notify(new sfEvent($this, 'application.log', array(sprintf('Flag old flash messages ("%s")', implode('", "', $names)))));
      }

      foreach ($names as $name)
      {
        $this->attributeHolder->set($name, true, 'symfony/user/sfUser/flash/remove');
      }
    }

    //for sfBasicSecurityUser---------------------------------------------------
    if (!array_key_exists('timeout', $this->options))
    {
      $this->options['timeout'] = 1800;
    }

    // force the max lifetime for session garbage collector to be greater than timeout
    if (ini_get('session.gc_maxlifetime') < $this->options['timeout'])
    {
      ini_set('session.gc_maxlifetime', $this->options['timeout']);
    }

    // read data from storage
    $this->authenticated = $storage->read(self::AUTH_NAMESPACE);
    $this->credentials   = $storage->read(self::CREDENTIAL_NAMESPACE);
    $this->lastRequest   = $storage->read(self::LAST_REQUEST_NAMESPACE);

    if (is_null($this->authenticated))
    {
      $this->authenticated = false;
      $this->credentials   = array();
    }
    else
    {
      // Automatic logout logged in user if no request within timeout parameter seconds
      $timeout = $this->options['timeout'];
      if (false !== $timeout && !is_null($this->lastRequest) && time() - $this->lastRequest >= $timeout)
      {
        if ($this->options['logging'])
        {
          $this->dispatcher->notify(new sfEvent($this, 'application.log', array('Automatic user logout due to timeout')));
        }

        $this->setTimedOut();
        $this->setAuthenticated(false);
      }
    }

    $this->lastRequest = time();

    //for sfGuardSecurityUser---------------------------------------------------
    if (!$this->isAuthenticated())
    {
      // remove user if timeout
      $this->getAttributeHolder()->removeNamespace('sfGuardSecurityUser');
      $this->user = null;
    }

  }
  public function shutdown()
  {
    //for sfUser---------------------------------------------------
    // remove flash that are tagged to be removed
    if ($this->options['use_flash'] && $names = $this->attributeHolder->getNames('symfony/user/sfUser/flash/remove'))
    {
      if ($this->options['logging'])
      {
        $this->dispatcher->notify(new sfEvent($this, 'application.log', array(sprintf('Remove old flash messages ("%s")', implode('", "', $names)))));
      }

      foreach ($names as $name)
      {
        $this->attributeHolder->remove($name, null, 'symfony/user/sfUser/flash');
        $this->attributeHolder->remove($name, null, 'symfony/user/sfUser/flash/remove');
      }
    }

    $attributes = array();
    foreach ($this->attributeHolder->getNamespaces() as $namespace)
    {
      $attributes[$namespace] = $this->attributeHolder->getAll($namespace);
    }

    // write attributes to the storage
    $this->storage->write(self::ATTRIBUTE_NAMESPACE, $attributes);

    // write culture to the storage
    $this->storage->write(self::CULTURE_NAMESPACE, $this->culture);

    //for sfBasicSecurityUser---------------------------------------------------
    // write the last request time to the storage
    $this->storage->write(self::LAST_REQUEST_NAMESPACE, $this->lastRequest);

    $this->storage->write(self::AUTH_NAMESPACE,         $this->authenticated);
    $this->storage->write(self::CREDENTIAL_NAMESPACE,   $this->credentials);

    session_write_close();
  }

}
