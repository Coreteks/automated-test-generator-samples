<?php

namespace tests\GuzzleHttp\Handler;

use GuzzleHttp\Handler\Proxy;
use Mockery as m;

class ProxyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \GuzzleHttp\Handler\Proxy
*/
protected $proxy;

public function setUp()
{
    parent::setUp();

    $this->proxy = new \GuzzleHttp\Handler\Proxy();
}

public function testWrapSync0()
{
    $default = m::mock('UntypedParameter_default_');
    $sync = m::mock('UntypedParameter_sync_');

    // TODO: Your mock expectations here

    $actual = $this->proxy->wrapSync($default, $sync);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrapStreaming0()
{
    $default = m::mock('UntypedParameter_default_');
    $streaming = m::mock('UntypedParameter_streaming_');

    // TODO: Your mock expectations here

    $actual = $this->proxy->wrapStreaming($default, $streaming);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
