<?php

namespace tests\Faker\Provider\sl_SI;

use Faker\Provider\sl_SI\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\sl_SI\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\sl_SI\Person();
}

public function testTitle0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    $actual = $this->person->title($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLastName0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

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
