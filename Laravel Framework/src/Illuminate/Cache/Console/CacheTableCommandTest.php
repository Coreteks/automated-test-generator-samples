<?php

namespace tests\Illuminate\Cache\Console;

use Illuminate\Cache\Console\CacheTableCommand;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Composer;
use Mockery as m;

class CacheTableCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var \Mockery\MockInterface
*/
protected $_composer;
/**
* @var \Illuminate\Cache\Console\CacheTableCommand
*/
protected $cacheTableCommand;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->_composer = m::mock(\Illuminate\Support\Composer::class);
    $this->cacheTableCommand = new \Illuminate\Cache\Console\CacheTableCommand($this->_files, $this->_composer);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->cacheTableCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
