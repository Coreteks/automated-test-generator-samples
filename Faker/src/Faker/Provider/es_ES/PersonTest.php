<?php

namespace tests\Faker\Provider\es_ES;

use Faker\Provider\es_ES\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\es_ES\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\es_ES\Person();
}

public function testSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->suffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDni0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->dni();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLicenceCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->licenceCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}