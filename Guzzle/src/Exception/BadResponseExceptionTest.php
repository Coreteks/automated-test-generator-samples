<?php

namespace tests\GuzzleHttp\Exception;

use Exception;
use GuzzleHttp\Exception\BadResponseException;
use Mockery as m;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class BadResponseExceptionTest extends \PHPUnit_Framework_TestCase
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
protected $_response;
/**
* @var \Mockery\MockInterface
*/
protected $_previous;
/**
* @var array
*/
protected $_handlerContext = [];
/**
* @var \GuzzleHttp\Exception\BadResponseException
*/
protected $badResponseException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $this->_response = m::mock(\Psr\Http\Message\ResponseInterface::class);
    $this->_previous = m::mock(\Exception::class);
    $this->_handlerContext = [];
    $this->badResponseException = new \GuzzleHttp\Exception\BadResponseException($this->_message, $this->_request, $this->_response, $this->_previous, $this->_handlerContext);
}
}
