<?php

namespace tests\Faker\Provider\lt_LT;

use Faker\Provider\lt_LT\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\lt_LT\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\lt_LT\Person();
}

public function testLastNameMale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->lastNameMale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastNameFemale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->lastNameFemale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDriverLicence0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->driverLicence();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPassportNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->passportNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber0()
{
    $gender = m::mock('UntypedParameter_gender_');
    $birthdate = m::mock(\DateTime::class);
    $randomNumber = m::mock('UntypedParameter_randomNumber_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 301)
    // if ($liekana !== 10) == false (line 315)

    $actual = $this->person->personalIdentityNumber($gender, $birthdate, $randomNumber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber1()
{
    $gender = m::mock('UntypedParameter_gender_');
    $birthdate = m::mock(\DateTime::class);
    $randomNumber = m::mock('UntypedParameter_randomNumber_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 301)
    // if ($liekana !== 10) == true (line 315)

    $actual = $this->person->personalIdentityNumber($gender, $birthdate, $randomNumber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber2()
{
    $gender = m::mock('UntypedParameter_gender_');
    $birthdate = m::mock(\DateTime::class);
    $randomNumber = m::mock('UntypedParameter_randomNumber_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 301)
    // if ($liekana !== 10) == false (line 315)

    $actual = $this->person->personalIdentityNumber($gender, $birthdate, $randomNumber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber3()
{
    $gender = m::mock('UntypedParameter_gender_');
    $birthdate = m::mock(\DateTime::class);
    $randomNumber = m::mock('UntypedParameter_randomNumber_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 301)
    // if ($liekana !== 10) == true (line 315)

    $actual = $this->person->personalIdentityNumber($gender, $birthdate, $randomNumber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
