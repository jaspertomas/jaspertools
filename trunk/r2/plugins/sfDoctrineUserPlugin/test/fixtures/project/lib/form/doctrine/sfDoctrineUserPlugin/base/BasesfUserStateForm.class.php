<?php

/**
 * sfUserState form base class.
 *
 * @package    form
 * @subpackage sf_user_state
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BasesfUserStateForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'name'               => new sfWidgetFormInput(),
      'abbreviation'       => new sfWidgetFormInput(),
      'country_id'         => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserCountry', 'add_empty' => true)),
      'display'            => new sfWidgetFormInputCheckbox(),
      'created_at'         => new sfWidgetFormDateTime(),
      'updated_at'         => new sfWidgetFormDateTime(),
      'created_by_user_id' => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
      'updated_by_user_id' => new sfWidgetFormDoctrineSelect(array('model' => 'sfUserUser', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => 'sfUserState', 'column' => 'id', 'required' => false)),
      'name'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'abbreviation'       => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'country_id'         => new sfValidatorDoctrineChoice(array('model' => 'sfUserCountry', 'required' => false)),
      'display'            => new sfValidatorBoolean(array('required' => false)),
      'created_at'         => new sfValidatorDateTime(array('required' => false)),
      'updated_at'         => new sfValidatorDateTime(array('required' => false)),
      'created_by_user_id' => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
      'updated_by_user_id' => new sfValidatorDoctrineChoice(array('model' => 'sfUserUser', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_user_state[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfUserState';
  }

}