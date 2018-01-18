<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\ConfigCacheCommand;
use Mockery as m;

class ConfigCacheCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var \Illuminate\Foundation\Console\ConfigCacheCommand
*/
protected $configCacheCommand;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->configCacheCommand = new \Illuminate\Foundation\Console\ConfigCacheCommand($this->_files);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->configCacheCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
