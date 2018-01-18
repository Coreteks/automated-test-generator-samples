<?php

namespace tests\GuzzleHttp\Exception;

use Exception;
use GuzzleHttp\Exception\RequestException;
use Mockery as m;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RequestExceptionTest extends \PHPUnit_Framework_TestCase
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
* @var \GuzzleHttp\Exception\RequestException
*/
protected $requestException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $this->_response = m::mock(\Psr\Http\Message\ResponseInterface::class);
    $this->_previous = m::mock(\Exception::class);
    $this->_handlerContext = [];
    $this->requestException = new \GuzzleHttp\Exception\RequestException($this->_message, $this->_request, $this->_response, $this->_previous, $this->_handlerContext);
}

public function testWrapException0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    $actual = $this->requestException->wrapException($request, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);
    $previous = m::mock(\Exception::class);
    $ctx = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$response) == false (line 71)
    // if ($level === 4) == false (line 82)
    // if ($level === 5) == false (line 85)
    // if ($summary !== null) == false (line 109)

    $actual = $this->requestException->create($request, $response, $previous, $ctx);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate1()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);
    $previous = m::mock(\Exception::class);
    $ctx = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$response) == false (line 71)
    // if ($level === 4) == false (line 82)
    // if ($level === 5) == false (line 85)
    // if ($summary !== null) == true (line 109)

    $actual = $this->requestException->create($request, $response, $previous, $ctx);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate2()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);
    $previous = m::mock(\Exception::class);
    $ctx = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$response) == false (line 71)
    // if ($level === 4) == false (line 82)
    // if ($level === 5) == true (line 85)
    // if ($summary !== null) == false (line 109)

    $actual = $this->requestException->create($request, $response, $previous, $ctx);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate3()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);
    $previous = m::mock(\Exception::class);
    $ctx = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$response) == false (line 71)
    // if ($level === 4) == false (line 82)
    // if ($level === 5) == true (line 85)
    // if ($summary !== null) == true (line 109)

    $actual = $this->requestException->create($request, $response, $previous, $ctx);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate4()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);
    $previous = m::mock(\Exception::class);
    $ctx = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$response) == false (line 71)
    // if ($level === 4) == true (line 82)
    // if ($summary !== null) == false (line 109)

    $actual = $this->requestException->create($request, $response, $previous, $ctx);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate5()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);
    $previous = m::mock(\Exception::class);
    $ctx = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$response) == false (line 71)
    // if ($level === 4) == true (line 82)
    // if ($summary !== null) == true (line 109)

    $actual = $this->requestException->create($request, $response, $previous, $ctx);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate6()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);
    $previous = m::mock(\Exception::class);
    $ctx = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$response) == true (line 71)

    $actual = $this->requestException->create($request, $response, $previous, $ctx);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResponseBodySummary0()
{
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$body->isSeekable()) == false (line 129)
    // if ($size === 0) == false (line 135)
    // if ($size > 120) == false (line 142)
    // if (preg_match('/[^\\pL\\pM\\pN\\pP\\pS\\pZ\\n\\r\\t]/', $summary)) == false (line 148)

    $actual = $this->requestException->getResponseBodySummary($response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResponseBodySummary1()
{
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$body->isSeekable()) == false (line 129)
    // if ($size === 0) == false (line 135)
    // if ($size > 120) == false (line 142)
    // if (preg_match('/[^\\pL\\pM\\pN\\pP\\pS\\pZ\\n\\r\\t]/', $summary)) == true (line 148)

    $actual = $this->requestException->getResponseBodySummary($response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResponseBodySummary2()
{
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$body->isSeekable()) == false (line 129)
    // if ($size === 0) == false (line 135)
    // if ($size > 120) == true (line 142)
    // if (preg_match('/[^\\pL\\pM\\pN\\pP\\pS\\pZ\\n\\r\\t]/', $summary)) == false (line 148)

    $actual = $this->requestException->getResponseBodySummary($response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResponseBodySummary3()
{
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$body->isSeekable()) == false (line 129)
    // if ($size === 0) == false (line 135)
    // if ($size > 120) == true (line 142)
    // if (preg_match('/[^\\pL\\pM\\pN\\pP\\pS\\pZ\\n\\r\\t]/', $summary)) == true (line 148)

    $actual = $this->requestException->getResponseBodySummary($response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResponseBodySummary4()
{
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$body->isSeekable()) == false (line 129)
    // if ($size === 0) == true (line 135)

    $actual = $this->requestException->getResponseBodySummary($response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResponseBodySummary5()
{
    $response = m::mock(\Psr\Http\Message\ResponseInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$body->isSeekable()) == true (line 129)

    $actual = $this->requestException->getResponseBodySummary($response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRequest0()
{
    // TODO: Your mock expectations here

    $actual = $this->requestException->getRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResponse0()
{
    // TODO: Your mock expectations here

    $actual = $this->requestException->getResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasResponse0()
{
    // TODO: Your mock expectations here

    $actual = $this->requestException->hasResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHandlerContext0()
{
    // TODO: Your mock expectations here

    $actual = $this->requestException->getHandlerContext();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
