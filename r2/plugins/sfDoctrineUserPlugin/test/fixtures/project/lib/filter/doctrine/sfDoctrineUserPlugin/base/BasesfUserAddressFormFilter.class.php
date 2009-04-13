<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * sfUserAddress filter form base class.
 *
 * @package    filters
 * @subpackage sfUserAddress *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BasesfUserAddressFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'            => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
      'address_type_id'    => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserAddressType', 'add_empty' => true)),
      'address1'           => new sfWidgetFormFilterInput(),
      'address2'           => new sfWidgetFormFilterInput(),
      'address3'           => new sfWidgetFormFilterInput(),
      'city'               => new sfWidgetFormFilterInput(),
      'state_id'           => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserState', 'add_empty' => true)),
      'zip'                => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'updated_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_by_user_id' => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
      'updated_by_user_id' => new sfWidgetFormDoctrineChoice(array('model' => 'sfUserUser', 'add_empty' => true)),
      'rank'               => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'user_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
      'address_type_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserAddressType', 'column' => 'id')),
      'address1'           => new sfValidatorPass(array('required' => false)),
      'address2'           => new sfValidatorPass(array('required' => false)),
      'address3'           => new sfValidatorPass(array('required' => false)),
      'city'               => new sfValidatorPass(array('required' => false)),
      'state_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserState', 'column' => 'id')),
      'zip'                => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
      'updated_by_user_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfUserUser', 'column' => 'id')),
      'rank'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('sf_user_address_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfUserAddress';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'user_id'            => 'ForeignKey',
      'address_type_id'    => 'ForeignKey',
      'address1'           => 'Text',
      'address2'           => 'Text',
      'address3'           => 'Text',
      'city'               => 'Text',
      'state_id'           => 'ForeignKey',
      'zip'                => 'Text',
      'created_at'         => 'Date',
      'updated_at'         => 'Date',
      'created_by_user_id' => 'ForeignKey',
      'updated_by_user_id' => 'ForeignKey',
      'rank'               => 'Number',
    );
  }
}