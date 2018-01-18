<?php

namespace tests\Illuminate\Http\Exceptions;

use Illuminate\Http\Exceptions\HttpResponseException;
use Mockery as m;
use Symfony\Component\HttpFoundation\Response;

class HttpResponseExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_response;
/**
* @var \Illuminate\Http\Exceptions\HttpResponseException
*/
protected $httpResponseException;

public function setUp()
{
    parent::setUp();

    $this->_response = m::mock(\Symfony\Component\HttpFoundation\Response::class);
    $this->httpResponseException = new \Illuminate\Http\Exceptions\HttpResponseException($this->_response);
}

public function testGetResponse0()
{
    // TODO: Your mock expectations here

    $actual = $this->httpResponseException->getResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
