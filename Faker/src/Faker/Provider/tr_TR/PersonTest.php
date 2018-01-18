<?php

namespace tests\Faker\Provider\tr_TR;

use Faker\Provider\tr_TR\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\tr_TR\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\tr_TR\Person();
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

public function testTitleFemale0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->titleFemale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
