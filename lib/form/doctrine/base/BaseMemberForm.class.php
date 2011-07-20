<?php

/**
 * Member form base class.
 *
 * @method Member getObject() Returns the current form's model object
 *
 * @package    dksys
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMemberForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'firstname'   => new sfWidgetFormInputText(),
      'lastname'    => new sfWidgetFormInputText(),
      'birth_date'  => new sfWidgetFormDate(),
      'birth_place' => new sfWidgetFormInputText(),
      'citizenship' => new sfWidgetFormInputText(),
      'address'     => new sfWidgetFormInputText(),
      'postcode'    => new sfWidgetFormInputText(),
      'city'        => new sfWidgetFormInputText(),
      'ssn'         => new sfWidgetFormInputText(),
      'insurance'   => new sfWidgetFormInputText(),
      'phone'       => new sfWidgetFormInputText(),
      'mobile'      => new sfWidgetFormInputText(),
      'email'       => new sfWidgetFormInputText(),
      'job'         => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'firstname'   => new sfValidatorString(array('max_length' => 255)),
      'lastname'    => new sfValidatorString(array('max_length' => 255)),
      'birth_date'  => new sfValidatorDate(),
      'birth_place' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'citizenship' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'postcode'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'city'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ssn'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'insurance'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'phone'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'mobile'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'email'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'job'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('member[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Member';
  }

}
