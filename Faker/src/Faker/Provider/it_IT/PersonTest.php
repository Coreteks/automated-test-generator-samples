<?php

namespace tests\Faker\Provider\it_IT;

use Faker\Provider\it_IT\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\it_IT\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\it_IT\Person();
}

public function testSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->suffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTaxId0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->taxId();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}