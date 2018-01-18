<?php

namespace tests\Faker\Provider\ar_SA;

use Faker\Provider\ar_SA\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\ar_SA\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\ar_SA\Person();
}

public function testPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->prefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIdNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNationalIdNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->nationalIdNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForeignerIdNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->foreignerIdNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
