<?php

namespace tests\Illuminate\Console\Scheduling;

use Illuminate\Console\Scheduling\CacheMutex;
use Illuminate\Contracts\Cache\Repository;
use Mockery as m;

class CacheMutexTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cache;
/**
* @var \Illuminate\Console\Scheduling\CacheMutex
*/
protected $cacheMutex;

public function setUp()
{
    parent::setUp();

    $this->_cache = m::mock(\Illuminate\Contracts\Cache\Repository::class);
    $this->cacheMutex = new \Illuminate\Console\Scheduling\CacheMutex($this->_cache);
}

public function testCreate0()
{
    $event = m::mock(\Illuminate\Console\Scheduling\Event::class);

    // TODO: Your mock expectations here

    $actual = $this->cacheMutex->create($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists0()
{
    $event = m::mock(\Illuminate\Console\Scheduling\Event::class);

    // TODO: Your mock expectations here

    $actual = $this->cacheMutex->exists($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $event = m::mock(\Illuminate\Console\Scheduling\Event::class);

    // TODO: Your mock expectations here

    $actual = $this->cacheMutex->forget($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
