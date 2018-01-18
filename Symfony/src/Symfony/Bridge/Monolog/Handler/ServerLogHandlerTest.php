<?php

namespace tests\Symfony\Bridge\Monolog\Handler;

use Mockery as m;
use Symfony\Bridge\Monolog\Handler\ServerLogHandler;

class ServerLogHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_host = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var array
*/
protected $_context = [];
/**
* @var \Symfony\Bridge\Monolog\Handler\ServerLogHandler
*/
protected $serverLogHandler;

public function setUp()
{
    parent::setUp();

    $this->_host = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_context = [];
    $this->serverLogHandler = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler($this->_host, $this->_level, $this->_bubble, $this->_context);
}

/**
 * @expectedException \Exception
 */
public function testHandle0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) -> exception (line 63)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) -> exception (line 63)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == false (line 63)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == false (line 63)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle6()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle7()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) -> exception (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle8()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) -> exception (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle9()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) == false (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle10()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) == false (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle11()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) == true (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle12()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) == true (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle13()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) == true (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle14()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) -> exception (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) == true (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle15()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle16()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) -> exception (line 63)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle17()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) -> exception (line 63)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle18()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == false (line 63)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle19()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == false (line 63)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle20()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle21()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle22()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) -> exception (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle23()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) -> exception (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle24()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) == false (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle25()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) == false (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle26()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) == true (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle27()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) == true (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle28()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) == true (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle29()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == false (line 51)
    // if (-1 === stream_socket_sendto($this->socket, $recordFormatted)) == true (line 63)
    // if ($this->socket = $this->createSocket()) == true (line 67)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle30()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == false (line 44)
    // if (!($this->socket = $this->socket ?: $this->createSocket())) == true (line 51)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle31()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isHandling($record)) == true (line 44)

    $actual = $this->serverLogHandler->handle($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
