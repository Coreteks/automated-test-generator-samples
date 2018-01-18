<?php

namespace tests\Illuminate\Session;

use Illuminate\Contracts\Cache\Repository;
use Illuminate\Session\CacheBasedSessionHandler;
use Mockery as m;

class CacheBasedSessionHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cache;
/**
* @var mixed
*/
protected $_minutes = null;
/**
* @var \Illuminate\Session\CacheBasedSessionHandler
*/
protected $cacheBasedSessionHandler;

public function setUp()
{
    parent::setUp();

    $this->_cache = m::mock(\Illuminate\Contracts\Cache\Repository::class);
    $this->_minutes = null;
    $this->cacheBasedSessionHandler = new \Illuminate\Session\CacheBasedSessionHandler($this->_cache, $this->_minutes);
}

public function testOpen0()
{
    $savePath = m::mock('UntypedParameter_savePath_');
    $sessionName = m::mock('UntypedParameter_sessionName_');

    // TODO: Your mock expectations here

    $actual = $this->cacheBasedSessionHandler->open($savePath, $sessionName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->cacheBasedSessionHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    $actual = $this->cacheBasedSessionHandler->read($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->cacheBasedSessionHandler->write($sessionId, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    $actual = $this->cacheBasedSessionHandler->destroy($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc0()
{
    $lifetime = m::mock('UntypedParameter_lifetime_');

    // TODO: Your mock expectations here

    $actual = $this->cacheBasedSessionHandler->gc($lifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCache0()
{
    // TODO: Your mock expectations here

    $actual = $this->cacheBasedSessionHandler->getCache();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
