<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsInstanceOf;

class IsInstanceOfTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_className = null;
/**
* @var \PHPUnit\Framework\Constraint\IsInstanceOf
*/
protected $isInstanceOf;

public function setUp()
{
    parent::setUp();

    $this->_className = null;
    $this->isInstanceOf = new \PHPUnit\Framework\Constraint\IsInstanceOf($this->_className);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isInstanceOf->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
