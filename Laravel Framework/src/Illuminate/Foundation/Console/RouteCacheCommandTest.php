<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\RouteCacheCommand;
use Mockery as m;

class RouteCacheCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var \Illuminate\Foundation\Console\RouteCacheCommand
*/
protected $routeCacheCommand;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->routeCacheCommand = new \Illuminate\Foundation\Console\RouteCacheCommand($this->_files);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($routes) == 0) == false (line 57)

    $actual = $this->routeCacheCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($routes) == 0) == false (line 57)

    $actual = $this->routeCacheCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($routes) == 0) == true (line 57)

    $actual = $this->routeCacheCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
