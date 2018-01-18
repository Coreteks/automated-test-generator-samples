<?php

namespace tests\PHPUnit\Framework;

use Exception;
use Mockery as m;
use PHPUnit\Framework\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var mixed
*/
protected $_code = null;
/**
* @var \Mockery\MockInterface
*/
protected $_previous;
/**
* @var \PHPUnit\Framework\Exception
*/
protected $exception;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_code = null;
    $this->_previous = m::mock(\Exception::class);
    $this->exception = new \PHPUnit\Framework\Exception($this->_message, $this->_code, $this->_previous);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($trace = \PHPUnit\Util\Filter::getFilteredStacktrace($this)) == false (line 61)

    $actual = $this->exception->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($trace = \PHPUnit\Util\Filter::getFilteredStacktrace($this)) == true (line 61)

    $actual = $this->exception->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__sleep0()
{
    // TODO: Your mock expectations here

    $actual = $this->exception->__sleep();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSerializableTrace0()
{
    // TODO: Your mock expectations here

    $actual = $this->exception->getSerializableTrace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
