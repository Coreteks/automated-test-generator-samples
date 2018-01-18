<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\ConfigClearCommand;
use Mockery as m;

class ConfigClearCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var \Illuminate\Foundation\Console\ConfigClearCommand
*/
protected $configClearCommand;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->configClearCommand = new \Illuminate\Foundation\Console\ConfigClearCommand($this->_files);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->configClearCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
