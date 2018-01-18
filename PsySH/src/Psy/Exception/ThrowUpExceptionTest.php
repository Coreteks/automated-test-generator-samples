<?php

namespace tests\Psy\Exception;

use Exception;
use Mockery as m;
use Psy\Exception\ThrowUpException;

class ThrowUpExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_exception;
/**
* @var \Psy\Exception\ThrowUpException
*/
protected $throwUpException;

public function setUp()
{
    parent::setUp();

    $this->_exception = m::mock(\Exception::class);
    $this->throwUpException = new \Psy\Exception\ThrowUpException($this->_exception);
}

public function testGetRawMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->throwUpException->getRawMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
