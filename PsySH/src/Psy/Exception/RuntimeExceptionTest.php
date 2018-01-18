<?php

namespace tests\Psy\Exception;

use Exception;
use Mockery as m;
use Psy\Exception\RuntimeException;

class RuntimeExceptionTest extends \PHPUnit_Framework_TestCase
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
* @var \Psy\Exception\RuntimeException
*/
protected $runtimeException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_code = null;
    $this->_previous = m::mock(\Exception::class);
    $this->runtimeException = new \Psy\Exception\RuntimeException($this->_message, $this->_code, $this->_previous);
}

public function testGetRawMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->runtimeException->getRawMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
