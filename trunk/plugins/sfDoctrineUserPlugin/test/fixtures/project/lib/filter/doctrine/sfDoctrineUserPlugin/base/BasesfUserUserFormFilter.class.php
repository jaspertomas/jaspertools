<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * sfUserUser filter form base class.
 *
 * @package    filters
 * @subpackage sfUserUser *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BasesfUserUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'sf_guard_user_id'   => new sfWidgetFormFilterInput(),
      'prefix'             => new sfWidgetFormFilterInput(),
      'first_name'         => new sfWidgetFormFilterInput(),
      'middle_name'        => new sfWidgetFormFilterInput(),
      'last_name'          => new sfWidgetFormFilterInput(),
      'suffix'             => new sfWidgetFormFilterInput(),
      'company'            => new sfWidgetFormFilterInput(),
      'date_of_birth'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_by_user_id' => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
      'updated_by_user_id' => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'sf_guard_user_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'prefix'             => new sfValidatorPass(array('required' => false)),
      'first_name'         => new sfValidatorPass(array('required' => false)),
      'middle_name'        => new sfValidatorPass(array('required' => false)),
      'last_name'          => new sfValidatorPass(array('required' => false)),
      'suffix'             => new sfValidatorPass(array('required' => false)),
      'company'            => new sfValidatorPass(array('required' => false)),
      'date_of_birth'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
      'updated_by_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('sf_user_user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfUserUser';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'sf_guard_user_id'   => 'Number',
      'prefix'             => 'Text',
      'first_name'         => 'Text',
      'middle_name'        => 'Text',
      'last_name'          => 'Text',
      'suffix'             => 'Text',
      'company'            => 'Text',
      'date_of_birth'      => 'Date',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
      'created_by_user_id' => 'ForeignKey',
      'updated_by_user_id' => 'ForeignKey',
    );
  }
}