<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\TraversableContains;

class TraversableContainsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_value = null;
/**
* @var mixed
*/
protected $_checkForObjectIdentity = null;
/**
* @var mixed
*/
protected $_checkForNonObjectIdentity = null;
/**
* @var \PHPUnit\Framework\Constraint\TraversableContains
*/
protected $traversableContains;

public function setUp()
{
    parent::setUp();

    $this->_value = null;
    $this->_checkForObjectIdentity = null;
    $this->_checkForNonObjectIdentity = null;
    $this->traversableContains = new \PHPUnit\Framework\Constraint\TraversableContains($this->_value, $this->_checkForObjectIdentity, $this->_checkForNonObjectIdentity);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_string($this->value) && \strpos($this->value, "\n") !== false) == false (line 61)

    $actual = $this->traversableContains->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_string($this->value) && \strpos($this->value, "\n") !== false) == true (line 61)

    $actual = $this->traversableContains->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
