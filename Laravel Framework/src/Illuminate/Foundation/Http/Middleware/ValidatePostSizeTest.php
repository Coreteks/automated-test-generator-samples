<?php

namespace tests\Illuminate\Foundation\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Mockery as m;

class ValidatePostSizeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Http\Middleware\ValidatePostSize
*/
protected $validatePostSize;

public function setUp()
{
    parent::setUp();

    $this->validatePostSize = new \Illuminate\Foundation\Http\Middleware\ValidatePostSize();
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($max > 0 && $request->server('CONTENT_LENGTH') > $max) == false (line 23)

    $actual = $this->validatePostSize->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Illuminate\Http\Exceptions\PostTooLargeException
 */
public function testHandle1()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($max > 0 && $request->server('CONTENT_LENGTH') > $max) == true (line 23)
    // throw new \Illuminate\Http\Exceptions\PostTooLargeException() -> exception (line 24)

    $actual = $this->validatePostSize->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
