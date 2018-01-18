<?php

namespace tests\Faker\Provider\ru_RU;

use Faker\Provider\ru_RU\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ru_RU\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\ru_RU\Person();
}

public function testMiddleNameMale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->middleNameMale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMiddleNameFemale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->middleNameFemale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMiddleName0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 146)
    // if ($gender === static::GENDER_FEMALE) == false (line 148)

    $actual = $this->person->middleName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMiddleName1()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 146)
    // if ($gender === static::GENDER_FEMALE) == true (line 148)

    $actual = $this->person->middleName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMiddleName2()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 146)

    $actual = $this->person->middleName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
