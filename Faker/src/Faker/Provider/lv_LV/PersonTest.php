<?php

namespace tests\Faker\Provider\lv_LV;

use Faker\Provider\lv_LV\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\lv_LV\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\lv_LV\Person();
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
    $birthdate = m::mock(\DateTime::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == false (line 117)

    $actual = $this->person->personalIdentityNumber($birthdate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPersonalIdentityNumber1()
{
    $birthdate = m::mock(\DateTime::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$birthdate) == true (line 117)

    $actual = $this->person->personalIdentityNumber($birthdate);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
