<?php

namespace tests\Illuminate\View\Middleware;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Mockery as m;

class ShareErrorsFromSessionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_view;
/**
* @var \Illuminate\View\Middleware\ShareErrorsFromSession
*/
protected $shareErrorsFromSession;

public function setUp()
{
    parent::setUp();

    $this->_view = m::mock(\Illuminate\Contracts\View\Factory::class);
    $this->shareErrorsFromSession = new \Illuminate\View\Middleware\ShareErrorsFromSession($this->_view);
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->shareErrorsFromSession->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
