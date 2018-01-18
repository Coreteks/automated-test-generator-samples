<?php

namespace tests\Illuminate\Session;

use Illuminate\Session\SessionManager;
use Mockery as m;

class SessionManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Session\SessionManager
*/
protected $sessionManager;

public function setUp()
{
    parent::setUp();

    $this->sessionManager = new \Illuminate\Session\SessionManager();
}

public function testGetSessionConfig0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionManager->getSessionConfig();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultDriver0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionManager->getDefaultDriver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultDriver0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->sessionManager->setDefaultDriver($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
