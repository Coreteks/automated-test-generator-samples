<?php

namespace tests\Faker\Provider\hu_HU;

use Faker\Provider\hu_HU\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\hu_HU\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\hu_HU\Person();
}

public function testTitle0()
{
    $gender = m::mock('UntypedParameter_gender_');

    // TODO: Your mock expectations here

    $actual = $this->person->title($gender);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTitleMale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->titleMale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirstNameMaleNe0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->firstNameMaleNe();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTitleFemale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->titleFemale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->suffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
