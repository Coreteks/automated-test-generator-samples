<?php

namespace tests\Faker\Provider\da_DK;

use Faker\Provider\da_DK\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\da_DK\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\da_DK\Person();
}

public function testMiddleName0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->middleName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCpr0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->cpr();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
