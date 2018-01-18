<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\AppNameCommand;
use Illuminate\Support\Composer;
use Mockery as m;

class AppNameCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_composer;
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var \Illuminate\Foundation\Console\AppNameCommand
*/
protected $appNameCommand;

public function setUp()
{
    parent::setUp();

    $this->_composer = m::mock(\Illuminate\Support\Composer::class);
    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->appNameCommand = new \Illuminate\Foundation\Console\AppNameCommand($this->_composer, $this->_files);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->appNameCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
