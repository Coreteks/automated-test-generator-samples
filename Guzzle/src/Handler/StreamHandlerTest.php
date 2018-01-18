<?php

namespace tests\GuzzleHttp\Handler;

use GuzzleHttp\Handler\StreamHandler;
use Mockery as m;

class StreamHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \GuzzleHttp\Handler\StreamHandler
*/
protected $streamHandler;

public function setUp()
{
    parent::setUp();

    $this->streamHandler = new \GuzzleHttp\Handler\StreamHandler();
}

/**
 * @expectedException \Exception
 */
public function test__invoke0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == false (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke2()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == true (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke3()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // throw $e -> exception (line 55)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke4()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) -> exception (line 44)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke5()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) -> exception (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == false (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke6()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) -> exception (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == true (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke7()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) -> exception (line 44)
    // throw $e -> exception (line 55)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke8()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == false (line 44)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke9()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == false (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == false (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke10()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == false (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == true (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke11()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == false (line 44)
    // throw $e -> exception (line 55)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke12()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == false (line 44)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke13()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke14()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == false (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke15()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == true (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke16()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)
    // throw $e -> exception (line 55)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke17()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke18()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == false (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke19()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == true (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke20()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)
    // throw $e -> exception (line 55)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke21()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == false (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke22()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke23()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == false (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke24()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == true (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke25()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // throw $e -> exception (line 55)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke26()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) -> exception (line 44)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke27()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) -> exception (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == false (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke28()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) -> exception (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == true (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke29()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) -> exception (line 44)
    // throw $e -> exception (line 55)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke30()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == false (line 44)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke31()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == false (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == false (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke32()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == false (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == true (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke33()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == false (line 44)
    // throw $e -> exception (line 55)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke34()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == false (line 44)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke35()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke36()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == false (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke37()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == true (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke38()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)
    // throw $e -> exception (line 55)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke39()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke40()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == false (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke41()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)
    // if (strpos($message, 'getaddrinfo') || strpos($message, 'Connection refused') || strpos($message, "couldn't connect to host")) == true (line 60)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function test__invoke42()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)
    // throw $e -> exception (line 55)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke43()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['delay'])) == true (line 32)
    // if (0 === $request->getBody()->getSize()) == true (line 44)

    $actual = $this->streamHandler->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
