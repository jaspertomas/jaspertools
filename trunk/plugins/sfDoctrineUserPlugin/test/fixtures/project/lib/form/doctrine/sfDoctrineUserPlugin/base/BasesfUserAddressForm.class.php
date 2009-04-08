<?php

/**
 * sfUserAddress form base class.
 *
 * @package    form
 * @subpackage sf_user_address
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BasesfUserAddressForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'user_id'            => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
      'address_type_id'    => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserAddressType', 'add_empty' => true)),
      'address1'           => new sfWidgetFormInput(),
      'address2'           => new sfWidgetFormInput(),
      'address3'           => new sfWidgetFormInput(),
      'city'               => new sfWidgetFormInput(),
      'state_id'           => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserState', 'add_empty' => true)),
      'zip'                => new sfWidgetFormInput(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
      'created_by_user_id' => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
      'updated_by_user_id' => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
      'rank'               => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => 'sfUserAddress', 'column' => 'id', 'required' => false)),
      'user_id'            => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
      'address_type_id'    => new sfValidatorDoctrineChoice(array('model' => 'sfUserAddressType', 'required' => false)),
      'address1'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'address2'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'address3'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'city'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'state_id'           => new sfValidatorDoctrineChoice(array('model' => 'sfUserState', 'required' => false)),
      'zip'                => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'created_at'         => new sfValidatorDateTime(array('required' => false)),
      'updated_at'         => new sfValidatorDateTime(array('required' => false)),
      'created_by_user_id' => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
      'updated_by_user_id' => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
      'rank'               => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_user_address[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfUserAddress';
  }

}