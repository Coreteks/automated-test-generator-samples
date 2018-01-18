<?php

namespace tests\Illuminate\Session;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Session\FileSessionHandler;
use Mockery as m;

class FileSessionHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var mixed
*/
protected $_path = null;
/**
* @var mixed
*/
protected $_minutes = null;
/**
* @var \Illuminate\Session\FileSessionHandler
*/
protected $fileSessionHandler;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->_path = null;
    $this->_minutes = null;
    $this->fileSessionHandler = new \Illuminate\Session\FileSessionHandler($this->_files, $this->_path, $this->_minutes);
}

public function testOpen0()
{
    $savePath = m::mock('UntypedParameter_savePath_');
    $sessionName = m::mock('UntypedParameter_sessionName_');

    // TODO: Your mock expectations here

    $actual = $this->fileSessionHandler->open($savePath, $sessionName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->fileSessionHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->files->exists($path = $this->path . '/' . $sessionId)) == false (line 69)

    $actual = $this->fileSessionHandler->read($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead1()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->files->exists($path = $this->path . '/' . $sessionId)) == true (line 69)
    // if (filemtime($path) >= \Illuminate\Support\Carbon::now()->subMinutes($this->minutes)->getTimestamp()) == false (line 70)

    $actual = $this->fileSessionHandler->read($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead2()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->files->exists($path = $this->path . '/' . $sessionId)) == true (line 69)
    // if (filemtime($path) >= \Illuminate\Support\Carbon::now()->subMinutes($this->minutes)->getTimestamp()) == true (line 70)

    $actual = $this->fileSessionHandler->read($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->fileSessionHandler->write($sessionId, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    $actual = $this->fileSessionHandler->destroy($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc0()
{
    $lifetime = m::mock('UntypedParameter_lifetime_');

    // TODO: Your mock expectations here

    $actual = $this->fileSessionHandler->gc($lifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc1()
{
    $lifetime = m::mock('UntypedParameter_lifetime_');

    // TODO: Your mock expectations here

    $actual = $this->fileSessionHandler->gc($lifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
