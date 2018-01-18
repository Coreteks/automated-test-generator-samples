<?php

namespace tests\GuzzleHttp;

use GuzzleHttp\Middleware;
use Mockery as m;

class MiddlewareTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \GuzzleHttp\Middleware
*/
protected $middleware;

public function setUp()
{
    parent::setUp();

    $this->middleware = new \GuzzleHttp\Middleware();
}

public function testCookies0()
{
    // TODO: Your mock expectations here

    $actual = $this->middleware->cookies();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHttpErrors0()
{
    // TODO: Your mock expectations here

    $actual = $this->middleware->httpErrors();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHistory0()
{
    $container = m::mock('UntypedParameter_container_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($container) && !$container instanceof \ArrayAccess) == false (line 83)

    $actual = $this->middleware->history($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testHistory1()
{
    $container = m::mock('UntypedParameter_container_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($container) && !$container instanceof \ArrayAccess) == true (line 83)
    // throw new \InvalidArgumentException('history container must be an array or object implementing ArrayAccess') -> exception (line 84)

    $actual = $this->middleware->history($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTap0()
{
    $before = m::mock('UntypedParameter_before_');
    $after = m::mock('UntypedParameter_after_');

    // TODO: Your mock expectations here

    $actual = $this->middleware->tap($before, $after);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedirect0()
{
    // TODO: Your mock expectations here

    $actual = $this->middleware->redirect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRetry0()
{
    $decider = m::mock('UntypedParameter_decider_');
    $delay = m::mock('UntypedParameter_delay_');

    // TODO: Your mock expectations here

    $actual = $this->middleware->retry($decider, $delay);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLog0()
{
    $logger = m::mock(\Psr\Log\LoggerInterface::class);
    $formatter = m::mock(\GuzzleHttp\MessageFormatter::class);
    $logLevel = m::mock('UntypedParameter_logLevel_');

    // TODO: Your mock expectations here

    $actual = $this->middleware->log($logger, $formatter, $logLevel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareBody0()
{
    // TODO: Your mock expectations here

    $actual = $this->middleware->prepareBody();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMapRequest0()
{
    $fn = m::mock('UntypedParameter_fn_');

    // TODO: Your mock expectations here

    $actual = $this->middleware->mapRequest($fn);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMapResponse0()
{
    $fn = m::mock('UntypedParameter_fn_');

    // TODO: Your mock expectations here

    $actual = $this->middleware->mapResponse($fn);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
