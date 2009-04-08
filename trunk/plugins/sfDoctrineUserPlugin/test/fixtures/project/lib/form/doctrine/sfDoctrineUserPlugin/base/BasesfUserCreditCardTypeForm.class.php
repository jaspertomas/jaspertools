<?php

/**
 * sfUserCreditCardType form base class.
 *
 * @package    form
 * @subpackage sf_user_credit_card_type
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BasesfUserCreditCardTypeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'is_accepted'        => new sfWidgetFormInputCheckbox(),
      'code'               => new sfWidgetFormInput(),
      'abbreviation'       => new sfWidgetFormInput(),
      'name'               => new sfWidgetFormInput(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
      'created_by_user_id' => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
      'updated_by_user_id' => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => 'sfUserCreditCardType', 'column' => 'id', 'required' => false)),
      'is_accepted'        => new sfValidatorBoolean(array('required' => false)),
      'code'               => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'abbreviation'       => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'created_at'         => new sfValidatorDateTime(array('required' => false)),
      'updated_at'         => new sfValidatorDateTime(array('required' => false)),
      'created_by_user_id' => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
      'updated_by_user_id' => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_user_credit_card_type[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfUserCreditCardType';
  }

}