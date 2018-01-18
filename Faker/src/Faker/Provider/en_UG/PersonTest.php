<?php

namespace tests\Faker\Provider\en_UG;

use Faker\Provider\en_UG\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_UG\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\en_UG\Person();
}

public function testLastName0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 113)
    // if ($gender === static::GENDER_FEMALE) == false (line 116)

    $actual = $this->person->lastName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName1()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 113)
    // if ($gender === static::GENDER_FEMALE) == true (line 116)

    $actual = $this->person->lastName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName2()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 113)

    $actual = $this->person->lastName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
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
}
