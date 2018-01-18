<?php

namespace tests\Illuminate\Cache\Console;

use Illuminate\Cache\CacheManager;
use Illuminate\Cache\Console\ClearCommand;
use Illuminate\Filesystem\Filesystem;
use Mockery as m;

class ClearCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cache;
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var \Illuminate\Cache\Console\ClearCommand
*/
protected $clearCommand;

public function setUp()
{
    parent::setUp();

    $this->_cache = m::mock(\Illuminate\Cache\CacheManager::class);
    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->clearCommand = new \Illuminate\Cache\Console\ClearCommand($this->_cache, $this->_files);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->clearCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlushFacades0()
{
    // TODO: Your mock expectations here

    $actual = $this->clearCommand->flushFacades();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlushFacades1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/facade-.*\\.php$/', $file)) == false (line 86)

    $actual = $this->clearCommand->flushFacades();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlushFacades2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/facade-.*\\.php$/', $file)) == true (line 86)

    $actual = $this->clearCommand->flushFacades();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
