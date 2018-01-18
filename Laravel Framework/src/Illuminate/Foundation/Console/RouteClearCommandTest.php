<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\RouteClearCommand;
use Mockery as m;

class RouteClearCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var \Illuminate\Foundation\Console\RouteClearCommand
*/
protected $routeClearCommand;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->routeClearCommand = new \Illuminate\Foundation\Console\RouteClearCommand($this->_files);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->routeClearCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
