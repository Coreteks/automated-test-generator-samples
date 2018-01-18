<?php

namespace tests\Illuminate\Foundation\Http;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Http\Kernel;
use Illuminate\Routing\Router;
use Mockery as m;

class KernelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_app;
/**
* @var \Mockery\MockInterface
*/
protected $_router;
/**
* @var \Illuminate\Foundation\Http\Kernel
*/
protected $kernel;

public function setUp()
{
    parent::setUp();

    $this->_app = m::mock(\Illuminate\Contracts\Foundation\Application::class);
    $this->_router = m::mock(\Illuminate\Routing\Router::class);
    $this->kernel = new \Illuminate\Foundation\Http\Kernel($this->_app, $this->_router);
}

/**
 * @expectedException \Exception
 */
public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testHandle3()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle5()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle6()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->handle($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->app->hasBeenBootstrapped()) == false (line 161)

    $actual = $this->kernel->bootstrap();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->app->hasBeenBootstrapped()) == true (line 161)

    $actual = $this->kernel->bootstrap();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTerminate0()
{
    $request = m::mock('UntypedParameter_request_');
    $response = m::mock('UntypedParameter_response_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->terminate($request, $response);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMiddleware0()
{
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    $actual = $this->kernel->hasMiddleware($middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrependMiddleware0()
{
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_search($middleware, $this->middleware) === false) == false (line 274)

    $actual = $this->kernel->prependMiddleware($middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrependMiddleware1()
{
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_search($middleware, $this->middleware) === false) == true (line 274)

    $actual = $this->kernel->prependMiddleware($middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushMiddleware0()
{
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_search($middleware, $this->middleware) === false) == false (line 289)

    $actual = $this->kernel->pushMiddleware($middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPushMiddleware1()
{
    $middleware = m::mock('UntypedParameter_middleware_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_search($middleware, $this->middleware) === false) == true (line 289)

    $actual = $this->kernel->pushMiddleware($middleware);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetApplication0()
{
    // TODO: Your mock expectations here

    $actual = $this->kernel->getApplication();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
