<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * sfUserBilling filter form base class.
 *
 * @package    filters
 * @subpackage sfUserBilling *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BasesfUserBillingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'                => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
      'rejects'                => new sfWidgetFormFilterInput(),
      'method'                 => new sfWidgetFormChoice(array('choices' => array('' => '', 'CREDIT' => 'CREDIT', 'VIRTUAL_CHECK' => 'VIRTUAL_CHECK', 'PAPER_CHECK' => 'PAPER_CHECK'))),
      'name'                   => new sfWidgetFormFilterInput(),
      'address1'               => new sfWidgetFormFilterInput(),
      'address2'               => new sfWidgetFormFilterInput(),
      'city'                   => new sfWidgetFormFilterInput(),
      'state'                  => new sfWidgetFormFilterInput(),
      'zip'                    => new sfWidgetFormFilterInput(),
      'credit_card_number'     => new sfWidgetFormFilterInput(),
      'credit_card_type_id'    => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserCreditCardType', 'add_empty' => true)),
      'credit_card_exp_month'  => new sfWidgetFormFilterInput(),
      'credit_card_exp_year'   => new sfWidgetFormFilterInput(),
      'credit_card_cvm'        => new sfWidgetFormFilterInput(),
      'check_type'             => new sfWidgetFormChoice(array('choices' => array('' => '', 'Personal' => 'Personal', 'Business' => 'Business'))),
      'check_number'           => new sfWidgetFormFilterInput(),
      'check_routing_number'   => new sfWidgetFormFilterInput(),
      'check_account_number'   => new sfWidgetFormFilterInput(),
      'check_bank_name'        => new sfWidgetFormFilterInput(),
      'check_ssn'              => new sfWidgetFormFilterInput(),
      'check_branch_city'      => new sfWidgetFormFilterInput(),
      'check_branch_state'     => new sfWidgetFormFilterInput(),
      'drivers_license_number' => new sfWidgetFormFilterInput(),
      'drivers_license_state'  => new sfWidgetFormFilterInput(),
      'created_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'updated_at'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_by_user_id'     => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
      'updated_by_user_id'     => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
      'rank'                   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'user_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
      'rejects'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'method'                 => new sfValidatorChoice(array('required' => false, 'choices' => array('CREDIT' => 'CREDIT', 'VIRTUAL_CHECK' => 'VIRTUAL_CHECK', 'PAPER_CHECK' => 'PAPER_CHECK'))),
      'name'                   => new sfValidatorPass(array('required' => false)),
      'address1'               => new sfValidatorPass(array('required' => false)),
      'address2'               => new sfValidatorPass(array('required' => false)),
      'city'                   => new sfValidatorPass(array('required' => false)),
      'state'                  => new sfValidatorPass(array('required' => false)),
      'zip'                    => new sfValidatorPass(array('required' => false)),
      'credit_card_number'     => new sfValidatorPass(array('required' => false)),
      'credit_card_type_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserCreditCardType', 'column' => 'id')),
      'credit_card_exp_month'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'credit_card_exp_year'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'credit_card_cvm'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'check_type'             => new sfValidatorChoice(array('required' => false, 'choices' => array('Personal' => 'Personal', 'Business' => 'Business'))),
      'check_number'           => new sfValidatorPass(array('required' => false)),
      'check_routing_number'   => new sfValidatorPass(array('required' => false)),
      'check_account_number'   => new sfValidatorPass(array('required' => false)),
      'check_bank_name'        => new sfValidatorPass(array('required' => false)),
      'check_ssn'              => new sfValidatorPass(array('required' => false)),
      'check_branch_city'      => new sfValidatorPass(array('required' => false)),
      'check_branch_state'     => new sfValidatorPass(array('required' => false)),
      'drivers_license_number' => new sfValidatorPass(array('required' => false)),
      'drivers_license_state'  => new sfValidatorPass(array('required' => false)),
      'created_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by_user_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
      'updated_by_user_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
      'rank'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('sf_user_billing_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfUserBilling';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'user_id'                => 'ForeignKey',
      'rejects'                => 'Number',
      'method'                 => 'Enum',
      'name'                   => 'Text',
      'address1'               => 'Text',
      'address2'               => 'Text',
      'city'                   => 'Text',
      'state'                  => 'Text',
      'zip'                    => 'Text',
      'credit_card_number'     => 'Text',
      'credit_card_type_id'    => 'ForeignKey',
      'credit_card_exp_month'  => 'Number',
      'credit_card_exp_year'   => 'Number',
      'credit_card_cvm'        => 'Number',
      'check_type'             => 'Enum',
      'check_number'           => 'Text',
      'check_routing_number'   => 'Text',
      'check_account_number'   => 'Text',
      'check_bank_name'        => 'Text',
      'check_ssn'              => 'Text',
      'check_branch_city'      => 'Text',
      'check_branch_state'     => 'Text',
      'drivers_license_number' => 'Text',
      'drivers_license_state'  => 'Text',
      'created_at'             => 'Date',
      'updated_at'             => 'Date',
      'created_by_user_id'     => 'ForeignKey',
      'updated_by_user_id'     => 'ForeignKey',
      'rank'                   => 'Number',
    );
  }
}