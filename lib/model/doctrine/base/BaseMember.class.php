<?php

/**
 * BaseMember
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $firstname
 * @property string $lastname
 * @property date $birth_date
 * @property string $birth_place
 * @property string $citizenship
 * @property string $address
 * @property string $postcode
 * @property string $city
 * @property string $ssn
 * @property string $insurance
 * @property string $phone
 * @property string $mobile
 * @property string $email
 * @property string $job
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * @property Doctrine_Collection $Memberships
 * 
 * @method string              getFirstname()   Returns the current record's "firstname" value
 * @method string              getLastname()    Returns the current record's "lastname" value
 * @method date                getBirthDate()   Returns the current record's "birth_date" value
 * @method string              getBirthPlace()  Returns the current record's "birth_place" value
 * @method string              getCitizenship() Returns the current record's "citizenship" value
 * @method string              getAddress()     Returns the current record's "address" value
 * @method string              getPostcode()    Returns the current record's "postcode" value
 * @method string              getCity()        Returns the current record's "city" value
 * @method string              getSsn()         Returns the current record's "ssn" value
 * @method string              getInsurance()   Returns the current record's "insurance" value
 * @method string              getPhone()       Returns the current record's "phone" value
 * @method string              getMobile()      Returns the current record's "mobile" value
 * @method string              getEmail()       Returns the current record's "email" value
 * @method string              getJob()         Returns the current record's "job" value
 * @method timestamp           getCreatedAt()   Returns the current record's "created_at" value
 * @method timestamp           getUpdatedAt()   Returns the current record's "updated_at" value
 * @method Doctrine_Collection getMemberships() Returns the current record's "Memberships" collection
 * @method Member              setFirstname()   Sets the current record's "firstname" value
 * @method Member              setLastname()    Sets the current record's "lastname" value
 * @method Member              setBirthDate()   Sets the current record's "birth_date" value
 * @method Member              setBirthPlace()  Sets the current record's "birth_place" value
 * @method Member              setCitizenship() Sets the current record's "citizenship" value
 * @method Member              setAddress()     Sets the current record's "address" value
 * @method Member              setPostcode()    Sets the current record's "postcode" value
 * @method Member              setCity()        Sets the current record's "city" value
 * @method Member              setSsn()         Sets the current record's "ssn" value
 * @method Member              setInsurance()   Sets the current record's "insurance" value
 * @method Member              setPhone()       Sets the current record's "phone" value
 * @method Member              setMobile()      Sets the current record's "mobile" value
 * @method Member              setEmail()       Sets the current record's "email" value
 * @method Member              setJob()         Sets the current record's "job" value
 * @method Member              setCreatedAt()   Sets the current record's "created_at" value
 * @method Member              setUpdatedAt()   Sets the current record's "updated_at" value
 * @method Member              setMemberships() Sets the current record's "Memberships" collection
 * 
 * @package    dksys
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMember extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('member');
        $this->hasColumn('firstname', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('lastname', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('birth_date', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             'unique' => false,
             ));
        $this->hasColumn('birth_place', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('citizenship', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('address', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('postcode', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('city', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('ssn', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('insurance', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('phone', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('mobile', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('job', 'string', 255, array(
             'type' => 'string',
             'notnull' => false,
             'unique' => false,
             'length' => 255,
             ));
        $this->hasColumn('created_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('updated_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Membership as Memberships', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}