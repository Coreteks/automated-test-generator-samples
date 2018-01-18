<?php

namespace tests\Illuminate\Cache;

use Illuminate\Cache\CacheServiceProvider;
use Mockery as m;

class CacheServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Cache\CacheServiceProvider
*/
protected $cacheServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->cacheServiceProvider = new \Illuminate\Cache\CacheServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->cacheServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->cacheServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
