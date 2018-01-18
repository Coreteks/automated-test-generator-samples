<?php

namespace tests\Illuminate\Broadcasting;

use Illuminate\Broadcasting\BroadcastController;
use Mockery as m;

class BroadcastControllerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Broadcasting\BroadcastController
*/
protected $broadcastController;

public function setUp()
{
    parent::setUp();

    $this->broadcastController = new \Illuminate\Broadcasting\BroadcastController();
}

public function testAuthenticate0()
{
    $request = m::mock(\Illuminate\Http\Request::class);

    // TODO: Your mock expectations here

    $actual = $this->broadcastController->authenticate($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
