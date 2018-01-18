<?php

namespace tests\Illuminate\Redis;

use Illuminate\Redis\RedisServiceProvider;
use Mockery as m;

class RedisServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Redis\RedisServiceProvider
*/
protected $redisServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->redisServiceProvider = new \Illuminate\Redis\RedisServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->redisServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
