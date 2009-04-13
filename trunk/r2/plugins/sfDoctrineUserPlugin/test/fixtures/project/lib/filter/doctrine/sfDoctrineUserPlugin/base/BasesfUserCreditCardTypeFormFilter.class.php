<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * sfUserCreditCardType filter form base class.
 *
 * @package    filters
 * @subpackage sfUserCreditCardType *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BasesfUserCreditCardTypeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'is_accepted'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'code'               => new sfWidgetFormFilterInput(),
      'abbreviation'       => new sfWidgetFormFilterInput(),
      'name'               => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_by_user_id' => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
      'updated_by_user_id' => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'is_accepted'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'code'               => new sfValidatorPass(array('required' => false)),
      'abbreviation'       => new sfValidatorPass(array('required' => false)),
      'name'               => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
      'updated_by_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('sf_user_credit_card_type_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfUserCreditCardType';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'is_accepted'        => 'Boolean',
      'code'               => 'Text',
      'abbreviation'       => 'Text',
      'name'               => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
      'created_by_user_id' => 'ForeignKey',
      'updated_by_user_id' => 'ForeignKey',
    );
  }
}