<?php

namespace tests\Faker\Calculator;

use Faker\Calculator\Inn;
use Mockery as m;

class InnTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Calculator\Inn
*/
protected $inn;

public function setUp()
{
    parent::setUp();

    $this->inn = new \Faker\Calculator\Inn();
}

public function testChecksum0()
{
    $inn = m::mock('UntypedParameter_inn_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 18)

    $actual = $this->inn->checksum($inn);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChecksum1()
{
    $inn = m::mock('UntypedParameter_inn_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 18)
    // for (...) == false (line 18)

    $actual = $this->inn->checksum($inn);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsValid0()
{
    $inn = m::mock('UntypedParameter_inn_');

    // TODO: Your mock expectations here

    $actual = $this->inn->isValid($inn);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
