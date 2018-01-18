<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\IsType;

class IsTypeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_type = null;
/**
* @var \PHPUnit\Framework\Constraint\IsType
*/
protected $isType;

public function setUp()
{
    parent::setUp();

    $this->_type = null;
    $this->isType = new \PHPUnit\Framework\Constraint\IsType($this->_type);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->isType->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
