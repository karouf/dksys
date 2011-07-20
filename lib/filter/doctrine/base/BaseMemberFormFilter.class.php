<?php

/**
 * Member filter form base class.
 *
 * @package    dksys
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMemberFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'firstname'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lastname'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'birth_date'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'birth_place' => new sfWidgetFormFilterInput(),
      'citizenship' => new sfWidgetFormFilterInput(),
      'address'     => new sfWidgetFormFilterInput(),
      'postcode'    => new sfWidgetFormFilterInput(),
      'city'        => new sfWidgetFormFilterInput(),
      'ssn'         => new sfWidgetFormFilterInput(),
      'insurance'   => new sfWidgetFormFilterInput(),
      'phone'       => new sfWidgetFormFilterInput(),
      'mobile'      => new sfWidgetFormFilterInput(),
      'email'       => new sfWidgetFormFilterInput(),
      'job'         => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'firstname'   => new sfValidatorPass(array('required' => false)),
      'lastname'    => new sfValidatorPass(array('required' => false)),
      'birth_date'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'birth_place' => new sfValidatorPass(array('required' => false)),
      'citizenship' => new sfValidatorPass(array('required' => false)),
      'address'     => new sfValidatorPass(array('required' => false)),
      'postcode'    => new sfValidatorPass(array('required' => false)),
      'city'        => new sfValidatorPass(array('required' => false)),
      'ssn'         => new sfValidatorPass(array('required' => false)),
      'insurance'   => new sfValidatorPass(array('required' => false)),
      'phone'       => new sfValidatorPass(array('required' => false)),
      'mobile'      => new sfValidatorPass(array('required' => false)),
      'email'       => new sfValidatorPass(array('required' => false)),
      'job'         => new sfValidatorPass(array('required' => false)),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('member_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Member';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'firstname'   => 'Text',
      'lastname'    => 'Text',
      'birth_date'  => 'Date',
      'birth_place' => 'Text',
      'citizenship' => 'Text',
      'address'     => 'Text',
      'postcode'    => 'Text',
      'city'        => 'Text',
      'ssn'         => 'Text',
      'insurance'   => 'Text',
      'phone'       => 'Text',
      'mobile'      => 'Text',
      'email'       => 'Text',
      'job'         => 'Text',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
