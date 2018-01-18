<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\StringContains;

class StringContainsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_string = null;
/**
* @var mixed
*/
protected $_ignoreCase = null;
/**
* @var \PHPUnit\Framework\Constraint\StringContains
*/
protected $stringContains;

public function setUp()
{
    parent::setUp();

    $this->_string = null;
    $this->_ignoreCase = null;
    $this->stringContains = new \PHPUnit\Framework\Constraint\StringContains($this->_string, $this->_ignoreCase);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreCase) == false (line 52)

    $actual = $this->stringContains->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreCase) == true (line 52)

    $actual = $this->stringContains->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
