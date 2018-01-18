<?php

namespace tests\Faker\Provider\sv_SE;

use Faker\Provider\sv_SE\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sv_SE\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\sv_SE\Person();
}

public function testPersonalIdentityNumber0()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 125)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 130)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 132)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber1()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 125)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 130)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 132)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber2()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 125)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 130)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber3()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 125)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 130)
    // if ($gender && $gender == static::GENDER_FEMALE) == false (line 132)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber4()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 125)
    // if ($gender && $gender == static::GENDER_MALE) == false (line 130)
    // if ($gender && $gender == static::GENDER_FEMALE) == true (line 132)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber5()
{
    $birthdate = m::mock(\DateTime::class);
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 125)
    // if ($gender && $gender == static::GENDER_MALE) == true (line 130)

    $actual = $this->person->personalIdentityNumber($birthdate, $gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
