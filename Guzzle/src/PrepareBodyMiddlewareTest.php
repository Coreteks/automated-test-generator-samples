<?php

namespace tests\GuzzleHttp;

use GuzzleHttp\PrepareBodyMiddleware;
use Mockery as m;

class PrepareBodyMiddlewareTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_nextHandler = null;
/**
* @var \GuzzleHttp\PrepareBodyMiddleware
*/
protected $prepareBodyMiddleware;

public function setUp()
{
    parent::setUp();

    $this->_nextHandler = null;
    $this->prepareBodyMiddleware = new \GuzzleHttp\PrepareBodyMiddleware($this->_nextHandler);
}

public function test__invoke0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == false (line 36)
    // if (!$request->hasHeader('Content-Type')) == false (line 43)
    // if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) == false (line 52)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == false (line 36)
    // if (!$request->hasHeader('Content-Type')) == false (line 43)
    // if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) == true (line 52)
    // if ($size !== null) == false (line 56)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke2()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == false (line 36)
    // if (!$request->hasHeader('Content-Type')) == false (line 43)
    // if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) == true (line 52)
    // if ($size !== null) == true (line 56)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke3()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == false (line 36)
    // if (!$request->hasHeader('Content-Type')) == true (line 43)
    // if ($uri = $request->getBody()->getMetadata('uri')) == false (line 44)
    // if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) == false (line 52)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke4()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == false (line 36)
    // if (!$request->hasHeader('Content-Type')) == true (line 43)
    // if ($uri = $request->getBody()->getMetadata('uri')) == false (line 44)
    // if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) == true (line 52)
    // if ($size !== null) == false (line 56)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke5()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == false (line 36)
    // if (!$request->hasHeader('Content-Type')) == true (line 43)
    // if ($uri = $request->getBody()->getMetadata('uri')) == false (line 44)
    // if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) == true (line 52)
    // if ($size !== null) == true (line 56)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke6()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == false (line 36)
    // if (!$request->hasHeader('Content-Type')) == true (line 43)
    // if ($uri = $request->getBody()->getMetadata('uri')) == true (line 44)
    // if ($type = \GuzzleHttp\Psr7\mimetype_from_filename($uri)) == false (line 45)
    // if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) == false (line 52)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke7()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == false (line 36)
    // if (!$request->hasHeader('Content-Type')) == true (line 43)
    // if ($uri = $request->getBody()->getMetadata('uri')) == true (line 44)
    // if ($type = \GuzzleHttp\Psr7\mimetype_from_filename($uri)) == false (line 45)
    // if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) == true (line 52)
    // if ($size !== null) == false (line 56)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke8()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == false (line 36)
    // if (!$request->hasHeader('Content-Type')) == true (line 43)
    // if ($uri = $request->getBody()->getMetadata('uri')) == true (line 44)
    // if ($type = \GuzzleHttp\Psr7\mimetype_from_filename($uri)) == false (line 45)
    // if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) == true (line 52)
    // if ($size !== null) == true (line 56)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke9()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == false (line 36)
    // if (!$request->hasHeader('Content-Type')) == true (line 43)
    // if ($uri = $request->getBody()->getMetadata('uri')) == true (line 44)
    // if ($type = \GuzzleHttp\Psr7\mimetype_from_filename($uri)) == true (line 45)
    // if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) == false (line 52)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke10()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == false (line 36)
    // if (!$request->hasHeader('Content-Type')) == true (line 43)
    // if ($uri = $request->getBody()->getMetadata('uri')) == true (line 44)
    // if ($type = \GuzzleHttp\Psr7\mimetype_from_filename($uri)) == true (line 45)
    // if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) == true (line 52)
    // if ($size !== null) == false (line 56)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke11()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == false (line 36)
    // if (!$request->hasHeader('Content-Type')) == true (line 43)
    // if ($uri = $request->getBody()->getMetadata('uri')) == true (line 44)
    // if ($type = \GuzzleHttp\Psr7\mimetype_from_filename($uri)) == true (line 45)
    // if (!$request->hasHeader('Content-Length') && !$request->hasHeader('Transfer-Encoding')) == true (line 52)
    // if ($size !== null) == true (line 56)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke12()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($request->getBody()->getSize() === 0) == true (line 36)

    $actual = $this->prepareBodyMiddleware->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
