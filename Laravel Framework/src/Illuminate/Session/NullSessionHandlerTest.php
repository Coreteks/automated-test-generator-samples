<?php

namespace tests\Illuminate\Session;

use Illuminate\Session\NullSessionHandler;
use Mockery as m;

class NullSessionHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Session\NullSessionHandler
*/
protected $nullSessionHandler;

public function setUp()
{
    parent::setUp();

    $this->nullSessionHandler = new \Illuminate\Session\NullSessionHandler();
}

public function testOpen0()
{
    $savePath = m::mock('UntypedParameter_savePath_');
    $sessionName = m::mock('UntypedParameter_sessionName_');

    // TODO: Your mock expectations here

    $actual = $this->nullSessionHandler->open($savePath, $sessionName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->nullSessionHandler->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    $actual = $this->nullSessionHandler->read($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->nullSessionHandler->write($sessionId, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy0()
{
    $sessionId = m::mock('UntypedParameter_sessionId_');

    // TODO: Your mock expectations here

    $actual = $this->nullSessionHandler->destroy($sessionId);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc0()
{
    $lifetime = m::mock('UntypedParameter_lifetime_');

    // TODO: Your mock expectations here

    $actual = $this->nullSessionHandler->gc($lifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
