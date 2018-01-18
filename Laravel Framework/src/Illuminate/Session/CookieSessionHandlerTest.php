<?php

namespace tests\Illuminate\Session;

use Illuminate\Contracts\Cookie\QueueingFactory;
use Illuminate\Session\CookieSessionHandler;
use Mockery as m;

class CookieSessionHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cookie;
/**
* @var mixed
*/
protected $_minutes = null;
/**
* @var \Illuminate\Session\CookieSessionHandler
*/
protected $cookieSessionHandler;

public function setUp()
{
    parent::setUp();

    $this->_cookie = m::mock(\Illuminate\Contracts\Cookie\QueueingFactory::class);
    $this->_minutes = null;
    $this->cookieSessionHandler = new \Illuminate\Session\CookieSessionHandler($this->_cookie, $this->_minutes);
}

public function testOpen0()
{
    $savePath = m::mock('UntypedParameter_savePath_');
    $sessionName = m::mock('UntypedParameter_sessionName_');

    // TODO: Your mock expectations here

    $actual = $this->cookieSessionHandler->open($savePath, $sessionName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->cookieSessionHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($decoded = json_decode($value, true)) && is_array($decoded)) == false (line 71)

    $actual = $this->cookieSessionHandler->read($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead1()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($decoded = json_decode($value, true)) && is_array($decoded)) == true (line 71)
    // if (isset($decoded['expires']) && $this->currentTime() <= $decoded['expires']) == false (line 72)

    $actual = $this->cookieSessionHandler->read($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead2()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($decoded = json_decode($value, true)) && is_array($decoded)) == true (line 71)
    // if (isset($decoded['expires']) && $this->currentTime() <= $decoded['expires']) == true (line 72)

    $actual = $this->cookieSessionHandler->read($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->cookieSessionHandler->write($sessionId, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    $actual = $this->cookieSessionHandler->destroy($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc0()
{
    $lifetime = m::mock('UntypedParameter_lifetime_');

    // TODO: Your mock expectations here

    $actual = $this->cookieSessionHandler->gc($lifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRequest0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->cookieSessionHandler->setRequest($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
