<?php

namespace tests\Faker\Provider\ne_NP;

use Faker\Provider\ne_NP\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ne_NP\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\ne_NP\Person();
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
