<?php

/**
 * sfUserBilling form base class.
 *
 * @package    form
 * @subpackage sf_user_billing
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BasesfUserBillingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'user_id'                => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
      'rejects'                => new sfWidgetFormInput(),
      'method'                 => new sfWidgetFormChoice(array('choices' => array('CREDIT' => 'CREDIT', 'VIRTUAL_CHECK' => 'VIRTUAL_CHECK', 'PAPER_CHECK' => 'PAPER_CHECK'))),
      'name'                   => new sfWidgetFormInput(),
      'address1'               => new sfWidgetFormInput(),
      'address2'               => new sfWidgetFormInput(),
      'city'                   => new sfWidgetFormInput(),
      'state'                  => new sfWidgetFormInput(),
      'zip'                    => new sfWidgetFormInput(),
      'credit_card_number'     => new sfWidgetFormInput(),
      'credit_card_type_id'    => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserCreditCardType', 'add_empty' => true)),
      'credit_card_exp_month'  => new sfWidgetFormInput(),
      'credit_card_exp_year'   => new sfWidgetFormInput(),
      'credit_card_cvm'        => new sfWidgetFormInput(),
      'check_type'             => new sfWidgetFormChoice(array('choices' => array('Personal' => 'Personal', 'Business' => 'Business'))),
      'check_number'           => new sfWidgetFormInput(),
      'check_routing_number'   => new sfWidgetFormInput(),
      'check_account_number'   => new sfWidgetFormInput(),
      'check_bank_name'        => new sfWidgetFormInput(),
      'check_ssn'              => new sfWidgetFormInput(),
      'check_branch_city'      => new sfWidgetFormInput(),
      'check_branch_state'     => new sfWidgetFormInput(),
      'drivers_license_number' => new sfWidgetFormInput(),
      'drivers_license_state'  => new sfWidgetFormInput(),
      'created_at'             => new sfWidgetFormDateTime(),
      'updated_at'             => new sfWidgetFormDateTime(),
      'created_by_user_id'     => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
      'updated_by_user_id'     => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
      'rank'                   => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorDoctrineChoice(array('model' => 'sfUserBilling', 'column' => 'id', 'required' => false)),
      'user_id'                => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
      'rejects'                => new sfValidatorInteger(array('required' => false)),
      'method'                 => new sfValidatorChoice(array('choices' => array('CREDIT' => 'CREDIT', 'VIRTUAL_CHECK' => 'VIRTUAL_CHECK', 'PAPER_CHECK' => 'PAPER_CHECK'), 'required' => false)),
      'name'                   => new sfValidatorString(array('max_length' => 72, 'required' => false)),
      'address1'               => new sfValidatorString(array('max_length' => 48, 'required' => false)),
      'address2'               => new sfValidatorString(array('max_length' => 48, 'required' => false)),
      'city'                   => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'state'                  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'zip'                    => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'credit_card_number'     => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'credit_card_type_id'    => new sfValidatorDoctrineChoice(array('model' => 'sfUserCreditCardType', 'required' => false)),
      'credit_card_exp_month'  => new sfValidatorInteger(array('required' => false)),
      'credit_card_exp_year'   => new sfValidatorInteger(array('required' => false)),
      'credit_card_cvm'        => new sfValidatorInteger(array('required' => false)),
      'check_type'             => new sfValidatorChoice(array('choices' => array('Personal' => 'Personal', 'Business' => 'Business'), 'required' => false)),
      'check_number'           => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'check_routing_number'   => new sfValidatorString(array('max_length' => 9, 'required' => false)),
      'check_account_number'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'check_bank_name'        => new sfValidatorString(array('max_length' => 35, 'required' => false)),
      'check_ssn'              => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'check_branch_city'      => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'check_branch_state'     => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'drivers_license_number' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'drivers_license_state'  => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'created_at'             => new sfValidatorDateTime(array('required' => false)),
      'updated_at'             => new sfValidatorDateTime(array('required' => false)),
      'created_by_user_id'     => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
      'updated_by_user_id'     => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
      'rank'                   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_user_billing[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfUserBilling';
  }

}