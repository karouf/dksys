<?php

/**
 * Membership form base class.
 *
 * @method Membership getObject() Returns the current form's model object
 *
 * @package    dksys
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMembershipForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'member_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Member'), 'add_empty' => false)),
      'season_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Season'), 'add_empty' => false)),
      'membership_type_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MembershipType'), 'add_empty' => false)),
      'membership_status_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MembershipStatus'), 'add_empty' => false)),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'member_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Member'))),
      'season_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Season'))),
      'membership_type_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MembershipType'))),
      'membership_status_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MembershipStatus'))),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Membership', 'column' => array('member_id', 'season_id')))
    );

    $this->widgetSchema->setNameFormat('membership[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Membership';
  }

}
