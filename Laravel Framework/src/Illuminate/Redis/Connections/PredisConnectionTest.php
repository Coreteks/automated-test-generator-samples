<?php

namespace tests\Illuminate\Redis\Connections;

use Illuminate\Redis\Connections\PredisConnection;
use Mockery as m;

class PredisConnectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_client = null;
/**
* @var \Illuminate\Redis\Connections\PredisConnection
*/
protected $predisConnection;

public function setUp()
{
    parent::setUp();

    $this->_client = null;
    $this->predisConnection = new \Illuminate\Redis\Connections\PredisConnection($this->_client);
}

public function testCreateSubscription0()
{
    $channels = m::mock('UntypedParameter_channels_');
    $callback = m::mock(\Closure::class);
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->predisConnection->createSubscription($channels, $callback, $method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSubscription1()
{
    $channels = m::mock('UntypedParameter_channels_');
    $callback = m::mock(\Closure::class);
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($message->kind === 'message' || $message->kind === 'pmessage') == false (line 38)

    $actual = $this->predisConnection->createSubscription($channels, $callback, $method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSubscription2()
{
    $channels = m::mock('UntypedParameter_channels_');
    $callback = m::mock(\Closure::class);
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($message->kind === 'message' || $message->kind === 'pmessage') == true (line 38)

    $actual = $this->predisConnection->createSubscription($channels, $callback, $method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
