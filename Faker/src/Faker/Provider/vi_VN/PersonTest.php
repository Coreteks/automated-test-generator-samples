<?php

namespace tests\Faker\Provider\vi_VN;

use Faker\Provider\vi_VN\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\vi_VN\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\vi_VN\Person();
}

public function testMiddleName0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 166)
    // if ($gender === static::GENDER_FEMALE) == false (line 168)

    $actual = $this->person->middleName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMiddleName1()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 166)
    // if ($gender === static::GENDER_FEMALE) == true (line 168)

    $actual = $this->person->middleName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMiddleName2()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 166)

    $actual = $this->person->middleName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
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
}
