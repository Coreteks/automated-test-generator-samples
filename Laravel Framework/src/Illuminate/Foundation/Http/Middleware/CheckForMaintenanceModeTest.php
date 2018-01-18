<?php

namespace tests\Illuminate\Foundation\Http\Middleware;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode;
use Mockery as m;

class CheckForMaintenanceModeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_app;
/**
* @var \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode
*/
protected $checkForMaintenanceMode;

public function setUp()
{
    parent::setUp();

    $this->_app = m::mock(\Illuminate\Contracts\Foundation\Application::class);
    $this->checkForMaintenanceMode = new \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode($this->_app);
}

public function testHandle0()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->isDownForMaintenance()) == false (line 40)

    $actual = $this->checkForMaintenanceMode->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Illuminate\Foundation\Http\Exceptions\MaintenanceModeException
 */
public function testHandle1()
{
    $request = m::mock('UntypedParameter_request_');
    $next = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->isDownForMaintenance()) == true (line 40)
    // throw new \Illuminate\Foundation\Http\Exceptions\MaintenanceModeException($data['time'], $data['retry'], $data['message']) -> exception (line 43)

    $actual = $this->checkForMaintenanceMode->handle($request, $next);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
