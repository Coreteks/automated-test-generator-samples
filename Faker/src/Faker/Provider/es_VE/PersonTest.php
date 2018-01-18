<?php

namespace tests\Faker\Provider\es_VE;

use Faker\Provider\es_VE\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\es_VE\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\es_VE\Person();
}

public function testSuffix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->suffix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNationalId0()
{
    $separator = m::mock('UntypedParameter_separator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($id == 'V') == false (line 161)

    $actual = $this->person->nationalId($separator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNationalId1()
{
    $separator = m::mock('UntypedParameter_separator_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($id == 'V') == true (line 161)

    $actual = $this->person->nationalId($separator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
