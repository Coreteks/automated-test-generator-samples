<?php

namespace tests\Faker\Provider\en_US;

use Faker\Provider\en_US\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\en_US\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\en_US\Person();
}

public function testSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->suffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSsn0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->ssn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
