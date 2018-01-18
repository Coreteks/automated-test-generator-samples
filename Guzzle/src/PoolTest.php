<?php

namespace tests\GuzzleHttp;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Pool;
use Mockery as m;

class PoolTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_client;
/**
* @var mixed
*/
protected $_requests = null;
/**
* @var array
*/
protected $_config = [];
/**
* @var \GuzzleHttp\Pool
*/
protected $pool;

public function setUp()
{
    parent::setUp();

    $this->_client = m::mock(\GuzzleHttp\ClientInterface::class);
    $this->_requests = null;
    $this->_config = [];
    $this->pool = new \GuzzleHttp\Pool($this->_client, $this->_requests, $this->_config);
}

public function testPromise0()
{
    // TODO: Your mock expectations here

    $actual = $this->pool->promise();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBatch0()
{
    $client = m::mock(\GuzzleHttp\ClientInterface::class);
    $requests = m::mock('UntypedParameter_requests_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->pool->batch($client, $requests, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
