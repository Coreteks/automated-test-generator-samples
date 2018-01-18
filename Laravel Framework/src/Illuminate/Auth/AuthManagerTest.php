<?php

namespace tests\Illuminate\Auth;

use Illuminate\Auth\AuthManager;
use Mockery as m;

class AuthManagerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_app = null;
/**
* @var \Illuminate\Auth\AuthManager
*/
protected $authManager;

public function setUp()
{
    parent::setUp();

    $this->_app = null;
    $this->authManager = new \Illuminate\Auth\AuthManager($this->_app);
}

public function testGuard0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->authManager->guard($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSessionDriver0()
{
    $name = m::mock('UntypedParameter_name_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($guard, 'setCookieJar')) == false (line 128)
    // if (method_exists($guard, 'setDispatcher')) == false (line 132)
    // if (method_exists($guard, 'setRequest')) == false (line 136)

    $actual = $this->authManager->createSessionDriver($name, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSessionDriver1()
{
    $name = m::mock('UntypedParameter_name_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($guard, 'setCookieJar')) == false (line 128)
    // if (method_exists($guard, 'setDispatcher')) == false (line 132)
    // if (method_exists($guard, 'setRequest')) == true (line 136)

    $actual = $this->authManager->createSessionDriver($name, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSessionDriver2()
{
    $name = m::mock('UntypedParameter_name_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($guard, 'setCookieJar')) == false (line 128)
    // if (method_exists($guard, 'setDispatcher')) == true (line 132)
    // if (method_exists($guard, 'setRequest')) == false (line 136)

    $actual = $this->authManager->createSessionDriver($name, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSessionDriver3()
{
    $name = m::mock('UntypedParameter_name_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($guard, 'setCookieJar')) == false (line 128)
    // if (method_exists($guard, 'setDispatcher')) == true (line 132)
    // if (method_exists($guard, 'setRequest')) == true (line 136)

    $actual = $this->authManager->createSessionDriver($name, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSessionDriver4()
{
    $name = m::mock('UntypedParameter_name_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($guard, 'setCookieJar')) == true (line 128)
    // if (method_exists($guard, 'setDispatcher')) == false (line 132)
    // if (method_exists($guard, 'setRequest')) == false (line 136)

    $actual = $this->authManager->createSessionDriver($name, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSessionDriver5()
{
    $name = m::mock('UntypedParameter_name_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($guard, 'setCookieJar')) == true (line 128)
    // if (method_exists($guard, 'setDispatcher')) == false (line 132)
    // if (method_exists($guard, 'setRequest')) == true (line 136)

    $actual = $this->authManager->createSessionDriver($name, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSessionDriver6()
{
    $name = m::mock('UntypedParameter_name_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($guard, 'setCookieJar')) == true (line 128)
    // if (method_exists($guard, 'setDispatcher')) == true (line 132)
    // if (method_exists($guard, 'setRequest')) == false (line 136)

    $actual = $this->authManager->createSessionDriver($name, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSessionDriver7()
{
    $name = m::mock('UntypedParameter_name_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($guard, 'setCookieJar')) == true (line 128)
    // if (method_exists($guard, 'setDispatcher')) == true (line 132)
    // if (method_exists($guard, 'setRequest')) == true (line 136)

    $actual = $this->authManager->createSessionDriver($name, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateTokenDriver0()
{
    $name = m::mock('UntypedParameter_name_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    $actual = $this->authManager->createTokenDriver($name, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultDriver0()
{
    // TODO: Your mock expectations here

    $actual = $this->authManager->getDefaultDriver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldUse0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->authManager->shouldUse($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDefaultDriver0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->authManager->setDefaultDriver($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testViaRequest0()
{
    $driver = m::mock('UntypedParameter_driver_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->authManager->viaRequest($driver, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUserResolver0()
{
    // TODO: Your mock expectations here

    $actual = $this->authManager->userResolver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolveUsersUsing0()
{
    $userResolver = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->authManager->resolveUsersUsing($userResolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend0()
{
    $driver = m::mock('UntypedParameter_driver_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->authManager->extend($driver, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvider0()
{
    $name = m::mock('UntypedParameter_name_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->authManager->provider($name, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->authManager->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
