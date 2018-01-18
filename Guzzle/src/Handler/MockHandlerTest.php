<?php

namespace tests\GuzzleHttp\Handler;

use GuzzleHttp\Handler\MockHandler;
use Mockery as m;

class MockHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_queue = [];
/**
* @var mixed
*/
protected $_onFulfilled = null;
/**
* @var mixed
*/
protected $_onRejected = null;
/**
* @var \GuzzleHttp\Handler\MockHandler
*/
protected $mockHandler;

public function setUp()
{
    parent::setUp();

    $this->_queue = [];
    $this->_onFulfilled = null;
    $this->_onRejected = null;
    $this->mockHandler = new \GuzzleHttp\Handler\MockHandler($this->_queue, $this->_onFulfilled, $this->_onRejected);
}

public function testCreateWithMiddleware0()
{
    $queue = [];
    $onFulfilled = m::mock('UntypedParameter_onFulfilled_');
    $onRejected = m::mock('UntypedParameter_onRejected_');

    // TODO: Your mock expectations here

    $actual = $this->mockHandler->createWithMiddleware($queue, $onFulfilled, $onRejected);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == false (line 69)
    // if (isset($options['on_headers'])) == false (line 77)
    // if (is_callable($response)) == false (line 89)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == false (line 69)
    // if (isset($options['on_headers'])) == false (line 77)
    // if (is_callable($response)) == true (line 89)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke2()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == false (line 69)
    // if (isset($options['on_headers'])) == true (line 77)
    // if (!is_callable($options['on_headers'])) == false (line 78)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke3()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == false (line 69)
    // if (isset($options['on_headers'])) == true (line 77)
    // if (!is_callable($options['on_headers'])) == false (line 78)
    // if (is_callable($response)) == false (line 89)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke4()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == false (line 69)
    // if (isset($options['on_headers'])) == true (line 77)
    // if (!is_callable($options['on_headers'])) == false (line 78)
    // if (is_callable($response)) == true (line 89)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke5()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == false (line 69)
    // if (isset($options['on_headers'])) == true (line 77)
    // if (!is_callable($options['on_headers'])) == false (line 78)
    // if (is_callable($response)) == false (line 89)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke6()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == false (line 69)
    // if (isset($options['on_headers'])) == true (line 77)
    // if (!is_callable($options['on_headers'])) == false (line 78)
    // if (is_callable($response)) == true (line 89)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function test__invoke7()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == false (line 69)
    // if (isset($options['on_headers'])) == true (line 77)
    // if (!is_callable($options['on_headers'])) == true (line 78)
    // throw new \InvalidArgumentException('on_headers must be callable') -> exception (line 79)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke8()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == true (line 69)
    // if (isset($options['on_headers'])) == false (line 77)
    // if (is_callable($response)) == false (line 89)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke9()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == true (line 69)
    // if (isset($options['on_headers'])) == false (line 77)
    // if (is_callable($response)) == true (line 89)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke10()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == true (line 69)
    // if (isset($options['on_headers'])) == true (line 77)
    // if (!is_callable($options['on_headers'])) == false (line 78)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke11()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == true (line 69)
    // if (isset($options['on_headers'])) == true (line 77)
    // if (!is_callable($options['on_headers'])) == false (line 78)
    // if (is_callable($response)) == false (line 89)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke12()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == true (line 69)
    // if (isset($options['on_headers'])) == true (line 77)
    // if (!is_callable($options['on_headers'])) == false (line 78)
    // if (is_callable($response)) == true (line 89)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke13()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == true (line 69)
    // if (isset($options['on_headers'])) == true (line 77)
    // if (!is_callable($options['on_headers'])) == false (line 78)
    // if (is_callable($response)) == false (line 89)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke14()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == true (line 69)
    // if (isset($options['on_headers'])) == true (line 77)
    // if (!is_callable($options['on_headers'])) == false (line 78)
    // if (is_callable($response)) == true (line 89)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function test__invoke15()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == false (line 65)
    // if (isset($options['delay'])) == true (line 69)
    // if (isset($options['on_headers'])) == true (line 77)
    // if (!is_callable($options['on_headers'])) == true (line 78)
    // throw new \InvalidArgumentException('on_headers must be callable') -> exception (line 79)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \OutOfBoundsException
 */
public function test__invoke16()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->queue) == true (line 65)
    // throw new \OutOfBoundsException('Mock queue is empty') -> exception (line 66)

    $actual = $this->mockHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAppend0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockHandler->append();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testAppend1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \Psr\Http\Message\ResponseInterface || $value instanceof \Exception || $value instanceof \GuzzleHttp\Promise\PromiseInterface || is_callable($value)) == false (line 135)
    // throw new \InvalidArgumentException('Expected a response or ' . 'exception. Found ' . \GuzzleHttp\describe_type($value)) -> exception (line 142)

    $actual = $this->mockHandler->append();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAppend2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \Psr\Http\Message\ResponseInterface || $value instanceof \Exception || $value instanceof \GuzzleHttp\Promise\PromiseInterface || is_callable($value)) == true (line 135)

    $actual = $this->mockHandler->append();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastRequest0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockHandler->getLastRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastOptions0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockHandler->getLastOptions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCount0()
{
    // TODO: Your mock expectations here

    $actual = $this->mockHandler->count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
