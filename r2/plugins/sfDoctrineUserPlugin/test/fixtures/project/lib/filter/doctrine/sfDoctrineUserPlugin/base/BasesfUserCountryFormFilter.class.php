<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * sfUserCountry filter form base class.
 *
 * @package    filters
 * @subpackage sfUserCountry *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BasesfUserCountryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'               => new sfWidgetFormFilterInput(),
      'abbreviation'       => new sfWidgetFormFilterInput(),
      'display'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_by_user_id' => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
      'updated_by_user_id' => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'               => new sfValidatorPass(array('required' => false)),
      'abbreviation'       => new sfValidatorPass(array('required' => false)),
      'display'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
      'updated_by_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('sf_user_country_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfUserCountry';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'name'               => 'Text',
      'abbreviation'       => 'Text',
      'display'            => 'Boolean',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
      'created_by_user_id' => 'ForeignKey',
      'updated_by_user_id' => 'ForeignKey',
    );
  }
}