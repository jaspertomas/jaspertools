<?php

require_once dirname(__FILE__).'/../lib/userGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/userGeneratorHelper.class.php';

/**
 * user actions.
 *
 * @package    sf_sandbox
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class userActions extends autoUserActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //redirect user to his own profile
                                           //myUser->sfGuardUser()->sfUserUser()
    $this->redirect("@user_edit?id=".$this->getUser()->getUser()->getUser()->getId());
  }
  public function executeShow(sfWebRequest $request)
  {
    //redirect user to his own profile
    $this->redirect("@user_edit?id=".$this->getUser()->getUser()->getUser()->getId());
  }
  //disable this to enable frontend registration
  public function executeNew(sfWebRequest $request)
  {
    //redirect user to his own profile
    $this->redirect("@user_edit?id=".$this->getUser()->getUser()->getUser()->getId());
  }
  public function executeEdit(sfWebRequest $request)
  {
    $this->sf_user_user = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->sf_user_user);
    
    //prevent logged in user from editing profiles of other users
    //unless he is super admin
    if(
      $this->sf_user_user->getId()!=$this->getUser()->getUser()->getUser()->getId() and
      //!$this->getUser()->getUser()->getIsSuperAdmin()
      )
      {
        $this->getUser()->setFlash('error', $this->getUser()->getFlash('error').' Cannot edit data of other users.');
        $this->redirect("@user_edit?id=".$this->getUser()->getUser()->getUser()->getId());
      }
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $this->getUser()->setFlash('notice', $form->getObject()->isNew() ? 'Your profile was created successfully.' : 'Your profile was updated successfully.');

      $sf_user_user = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $sf_user_user)));

      //login
      //this is a convenience feature for frontend registration
      $this->getUser()->signin($sf_user_user->getGuardUser(), false);

      //redirect to home
      $this->redirect("@homepage");

      /*
      //only admin should be able to use save and add user functionality
      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $this->getUser()->getFlash('notice').' You can add another one below.');

        $this->redirect('@user_new');
      }
      else
      {
        //login
        $this->getUser()->signin($sf_user_user->getGuardUser(), false);

        //redirect to home
        $this->redirect("@homepage");
      }
      */
    }
    else
    {
      $this->getUser()->setFlash('error', 'Your profile has not been saved due to some errors.');
    }
  }
}
