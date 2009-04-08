<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * sfUserPhone filter form base class.
 *
 * @package    filters
 * @subpackage sfUserPhone *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BasesfUserPhoneFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'            => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
      'phone_type_id'      => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserPhoneType', 'add_empty' => true)),
      'number'             => new sfWidgetFormFilterInput(),
      'extension'          => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_by_user_id' => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
      'updated_by_user_id' => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
      'rank'               => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'user_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
      'phone_type_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserPhoneType', 'column' => 'id')),
      'number'             => new sfValidatorPass(array('required' => false)),
      'extension'          => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
      'updated_by_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
      'rank'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('sf_user_phone_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfUserPhone';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'user_id'            => 'ForeignKey',
      'phone_type_id'      => 'ForeignKey',
      'number'             => 'Text',
      'extension'          => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
      'created_by_user_id' => 'ForeignKey',
      'updated_by_user_id' => 'ForeignKey',
      'rank'               => 'Number',
    );
  }
}