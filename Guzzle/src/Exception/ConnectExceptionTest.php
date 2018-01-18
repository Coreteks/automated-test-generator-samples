<?php

namespace tests\GuzzleHttp\Exception;

use Exception;
use GuzzleHttp\Exception\ConnectException;
use Mockery as m;
use Psr\Http\Message\RequestInterface;

class ConnectExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var \Mockery\MockInterface
*/
protected $_request;
/**
* @var \Mockery\MockInterface
*/
protected $_previous;
/**
* @var array
*/
protected $_handlerContext = [];
/**
* @var \GuzzleHttp\Exception\ConnectException
*/
protected $connectException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $this->_previous = m::mock(\Exception::class);
    $this->_handlerContext = [];
    $this->connectException = new \GuzzleHttp\Exception\ConnectException($this->_message, $this->_request, $this->_previous, $this->_handlerContext);
}

public function testGetResponse0()
{
    // TODO: Your mock expectations here

    $actual = $this->connectException->getResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasResponse0()
{
    // TODO: Your mock expectations here

    $actual = $this->connectException->hasResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
