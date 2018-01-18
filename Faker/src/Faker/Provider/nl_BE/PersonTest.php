<?php

namespace tests\Faker\Provider\nl_BE;

use Faker\Provider\nl_BE\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\nl_BE\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\nl_BE\Person();
}

public function testRrn0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 90)
    // if ($gender === static::GENDER_FEMALE) == false (line 92)

    $actual = $this->person->rrn($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRrn1()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == false (line 90)
    // if ($gender === static::GENDER_FEMALE) == true (line 92)

    $actual = $this->person->rrn($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRrn2()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($gender === static::GENDER_MALE) == true (line 90)

    $actual = $this->person->rrn($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
