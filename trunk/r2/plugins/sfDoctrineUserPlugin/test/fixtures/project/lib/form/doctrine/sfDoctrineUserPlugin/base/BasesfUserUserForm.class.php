<?php

/**
 * sfUserUser form base class.
 *
 * @package    form
 * @subpackage sf_user_user
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BasesfUserUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'sf_guard_user_id'   => new sfWidgetFormInput(),
      'prefix'             => new sfWidgetFormInput(),
      'first_name'         => new sfWidgetFormInput(),
      'middle_name'        => new sfWidgetFormInput(),
      'last_name'          => new sfWidgetFormInput(),
      'suffix'             => new sfWidgetFormInput(),
      'company'            => new sfWidgetFormInput(),
      'date_of_birth'      => new sfWidgetFormDate(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
      'created_by_user_id' => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
      'updated_by_user_id' => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'column' => 'id', 'required' => false)),
      'sf_guard_user_id'   => new sfValidatorInteger(array('required' => false)),
      'prefix'             => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'first_name'         => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'middle_name'        => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'last_name'          => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'suffix'             => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'company'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'date_of_birth'      => new sfValidatorDate(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(array('required' => false)),
      'updated_at'         => new sfValidatorDateTime(array('required' => false)),
      'created_by_user_id' => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
      'updated_by_user_id' => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_user_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfUserUser';
  }

}