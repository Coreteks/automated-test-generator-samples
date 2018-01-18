<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\MemcachedConnector;
use Mockery as m;

class MemcachedConnectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Cache\MemcachedConnector
*/
protected $memcachedConnector;

public function setUp()
{
    parent::setUp();

    $this->memcachedConnector = new \Illuminate\Cache\MemcachedConnector();
}

public function testConnect0()
{
    $servers = [];
    $connectionId = m::mock('UntypedParameter_connectionId_');
    $options = [];
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$memcached->getServerList()) == false (line 24)

    $actual = $this->memcachedConnector->connect($servers, $connectionId, $options, $credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect1()
{
    $servers = [];
    $connectionId = m::mock('UntypedParameter_connectionId_');
    $options = [];
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$memcached->getServerList()) == true (line 24)

    $actual = $this->memcachedConnector->connect($servers, $connectionId, $options, $credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect2()
{
    $servers = [];
    $connectionId = m::mock('UntypedParameter_connectionId_');
    $options = [];
    $credentials = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$memcached->getServerList()) == true (line 24)

    $actual = $this->memcachedConnector->connect($servers, $connectionId, $options, $credentials);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
