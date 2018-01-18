<?php

namespace tests\Faker\Provider\pt_BR;

use Faker\Provider\pt_BR\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\pt_BR\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\pt_BR\Person();
}

public function testSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->suffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCpf0()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    $actual = $this->person->cpf($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRg0()
{
    $formatted = m::mock('UntypedParameter_formatted_');

    // TODO: Your mock expectations here

    $actual = $this->person->rg($formatted);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
