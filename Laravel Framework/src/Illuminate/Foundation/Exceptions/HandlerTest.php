<?php

namespace tests\Illuminate\Foundation\Exceptions;

use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\Exceptions\Handler;
use Mockery as m;

class HandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Illuminate\Foundation\Exceptions\Handler
*/
protected $handler;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Contracts\Container\Container::class);
    $this->handler = new \Illuminate\Foundation\Exceptions\Handler($this->_container);
}

/**
 * @expectedException \Exception
 */
public function testReport0()
{
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldntReport($e)) == false (line 97)
    // if (method_exists($e, 'report')) == false (line 101)

    $actual = $this->handler->report($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testReport1()
{
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldntReport($e)) == false (line 97)
    // if (method_exists($e, 'report')) == false (line 101)
    // throw $e -> exception (line 108)

    $actual = $this->handler->report($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport2()
{
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldntReport($e)) == false (line 97)
    // if (method_exists($e, 'report')) == false (line 101)

    $actual = $this->handler->report($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport3()
{
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldntReport($e)) == false (line 97)
    // if (method_exists($e, 'report')) == true (line 101)

    $actual = $this->handler->report($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReport4()
{
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->shouldntReport($e)) == true (line 97)

    $actual = $this->handler->report($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShouldReport0()
{
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    $actual = $this->handler->shouldReport($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender0()
{
    $request = m::mock('UntypedParameter_request_');
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($e, 'render') && ($response = $e->render($request))) == false (line 169)
    // if ($e instanceof \Illuminate\Contracts\Support\Responsable) == false (line 171)
    // if ($e instanceof \Illuminate\Http\Exceptions\HttpResponseException) == false (line 177)
    // if ($e instanceof \Illuminate\Auth\AuthenticationException) == false (line 179)
    // if ($e instanceof \Illuminate\Validation\ValidationException) == false (line 181)

    $actual = $this->handler->render($request, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender1()
{
    $request = m::mock('UntypedParameter_request_');
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($e, 'render') && ($response = $e->render($request))) == false (line 169)
    // if ($e instanceof \Illuminate\Contracts\Support\Responsable) == false (line 171)
    // if ($e instanceof \Illuminate\Http\Exceptions\HttpResponseException) == false (line 177)
    // if ($e instanceof \Illuminate\Auth\AuthenticationException) == false (line 179)
    // if ($e instanceof \Illuminate\Validation\ValidationException) == true (line 181)

    $actual = $this->handler->render($request, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender2()
{
    $request = m::mock('UntypedParameter_request_');
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($e, 'render') && ($response = $e->render($request))) == false (line 169)
    // if ($e instanceof \Illuminate\Contracts\Support\Responsable) == false (line 171)
    // if ($e instanceof \Illuminate\Http\Exceptions\HttpResponseException) == false (line 177)
    // if ($e instanceof \Illuminate\Auth\AuthenticationException) == true (line 179)

    $actual = $this->handler->render($request, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender3()
{
    $request = m::mock('UntypedParameter_request_');
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($e, 'render') && ($response = $e->render($request))) == false (line 169)
    // if ($e instanceof \Illuminate\Contracts\Support\Responsable) == false (line 171)
    // if ($e instanceof \Illuminate\Http\Exceptions\HttpResponseException) == true (line 177)

    $actual = $this->handler->render($request, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender4()
{
    $request = m::mock('UntypedParameter_request_');
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($e, 'render') && ($response = $e->render($request))) == false (line 169)
    // if ($e instanceof \Illuminate\Contracts\Support\Responsable) == true (line 171)

    $actual = $this->handler->render($request, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender5()
{
    $request = m::mock('UntypedParameter_request_');
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (method_exists($e, 'render') && ($response = $e->render($request))) == true (line 169)

    $actual = $this->handler->render($request, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRenderForConsole0()
{
    $output = m::mock('UntypedParameter_output_');
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    $actual = $this->handler->renderForConsole($output, $e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
