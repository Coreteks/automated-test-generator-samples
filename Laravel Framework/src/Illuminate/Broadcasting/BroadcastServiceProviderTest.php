<?php

namespace tests\Illuminate\Broadcasting;

use Illuminate\Broadcasting\BroadcastServiceProvider;
use Mockery as m;

class BroadcastServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Broadcasting\BroadcastServiceProvider
*/
protected $broadcastServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->broadcastServiceProvider = new \Illuminate\Broadcasting\BroadcastServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->broadcastServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->broadcastServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
