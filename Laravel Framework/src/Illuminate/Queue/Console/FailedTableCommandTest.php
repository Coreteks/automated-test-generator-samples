<?php

namespace tests\Illuminate\Queue\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Queue\Console\FailedTableCommand;
use Illuminate\Support\Composer;
use Mockery as m;

class FailedTableCommandTest extends \PHPUnit_Framework_TestCase
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
* @var \Illuminate\Queue\Console\FailedTableCommand
*/
protected $failedTableCommand;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->_composer = m::mock(\Illuminate\Support\Composer::class);
    $this->failedTableCommand = new \Illuminate\Queue\Console\FailedTableCommand($this->_files, $this->_composer);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->failedTableCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
