<?php

namespace tests\Carbon\Exceptions;

use Carbon\Exceptions\InvalidDateException;
use Exception;
use Mockery as m;

class InvalidDateExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_field = null;
/**
* @var mixed
*/
protected $_value = null;
/**
* @var mixed
*/
protected $_code = null;
/**
* @var \Mockery\MockInterface
*/
protected $_previous;
/**
* @var \Carbon\Exceptions\InvalidDateException
*/
protected $invalidDateException;

public function setUp()
{
    parent::setUp();

    $this->_field = null;
    $this->_value = null;
    $this->_code = null;
    $this->_previous = m::mock(\Exception::class);
    $this->invalidDateException = new \Carbon\Exceptions\InvalidDateException($this->_field, $this->_value, $this->_code, $this->_previous);
}

public function testGetField0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidDateException->getField();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetValue0()
{
    // TODO: Your mock expectations here

    $actual = $this->invalidDateException->getValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
