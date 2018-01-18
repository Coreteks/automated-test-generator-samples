<?php

namespace tests\Faker\Provider\ja_JP;

use Faker\Provider\ja_JP\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ja_JP\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\ja_JP\Person();
}

public function testKanaName0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 91)
    // if ($gender === static::GENDER_FEMALE) == false (line 93)

    $actual = $this->person->kanaName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKanaName1()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 91)
    // if ($gender === static::GENDER_FEMALE) == true (line 93)

    $actual = $this->person->kanaName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKanaName2()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 91)

    $actual = $this->person->kanaName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstKanaName0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 109)
    // if ($gender === static::GENDER_FEMALE) == false (line 111)

    $actual = $this->person->firstKanaName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstKanaName1()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 109)
    // if ($gender === static::GENDER_FEMALE) == true (line 111)

    $actual = $this->person->firstKanaName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstKanaName2()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 109)

    $actual = $this->person->firstKanaName($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstKanaNameMale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->firstKanaNameMale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstKanaNameFemale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->firstKanaNameFemale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastKanaName0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->lastKanaName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
