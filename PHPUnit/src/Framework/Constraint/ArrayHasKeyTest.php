<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\ArrayHasKey;

class ArrayHasKeyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_key = null;
/**
* @var \PHPUnit\Framework\Constraint\ArrayHasKey
*/
protected $arrayHasKey;

public function setUp()
{
    parent::setUp();

    $this->_key = null;
    $this->arrayHasKey = new \PHPUnit\Framework\Constraint\ArrayHasKey($this->_key);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->arrayHasKey->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
