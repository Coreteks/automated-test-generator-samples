<?php

namespace tests\Illuminate\Cookie\Middleware;

use Illuminate\Contracts\Cookie\QueueingFactory;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Mockery as m;

class AddQueuedCookiesToResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cookies;
/**
* @var \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse
*/
protected $addQueuedCookiesToResponse;

public function setUp()
{
    parent::setUp();

    $this->_cookies = m::mock(\Illuminate\Contracts\Cookie\QueueingFactory::class);
    $this->addQueuedCookiesToResponse = new \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse($this->_cookies);
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->addQueuedCookiesToResponse->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->addQueuedCookiesToResponse->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
