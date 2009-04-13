<?php

/**
 * sfUserEmailAddress form base class.
 *
 * @package    form
 * @subpackage sf_user_email_address
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BasesfUserEmailAddressForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'user_id'            => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
      'address'            => new sfWidgetFormInput(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
      'created_by_user_id' => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
      'updated_by_user_id' => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
      'rank'               => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => 'sfUserEmailAddress', 'column' => 'id', 'required' => false)),
      'user_id'            => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
      'address'            => new sfValidatorEmail(array('max_length' => 128, 'required' => false)),
      'created_at'         => new sfValidatorDateTime(array('required' => false)),
      'updated_at'         => new sfValidatorDateTime(array('required' => false)),
      'created_by_user_id' => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
      'updated_by_user_id' => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
      'rank'               => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_user_email_address[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfUserEmailAddress';
  }

}