<?php

namespace tests\Illuminate\View;

use Illuminate\View\ViewServiceProvider;
use Mockery as m;

class ViewServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\View\ViewServiceProvider
*/
protected $viewServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->viewServiceProvider = new \Illuminate\View\ViewServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->viewServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterFactory0()
{
    // TODO: Your mock expectations here

    $actual = $this->viewServiceProvider->registerFactory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterViewFinder0()
{
    // TODO: Your mock expectations here

    $actual = $this->viewServiceProvider->registerViewFinder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterEngineResolver0()
{
    // TODO: Your mock expectations here

    $actual = $this->viewServiceProvider->registerEngineResolver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterFileEngine0()
{
    $resolver = m::mock('UntypedParameter_resolver_');

    // TODO: Your mock expectations here

    $actual = $this->viewServiceProvider->registerFileEngine($resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterPhpEngine0()
{
    $resolver = m::mock('UntypedParameter_resolver_');

    // TODO: Your mock expectations here

    $actual = $this->viewServiceProvider->registerPhpEngine($resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterBladeEngine0()
{
    $resolver = m::mock('UntypedParameter_resolver_');

    // TODO: Your mock expectations here

    $actual = $this->viewServiceProvider->registerBladeEngine($resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
