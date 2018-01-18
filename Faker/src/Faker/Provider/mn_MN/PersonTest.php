<?php

namespace tests\Faker\Provider\mn_MN;

use Faker\Provider\mn_MN\Person;
use Mockery as m;

class PersonTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\mn_MN\Person
*/
protected $person;

public function setUp()
{
    parent::setUp();

    $this->person = new \Faker\Provider\mn_MN\Person();
}

public function testIdNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->idNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlphabet0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->alphabet();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNamePrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->person->namePrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
