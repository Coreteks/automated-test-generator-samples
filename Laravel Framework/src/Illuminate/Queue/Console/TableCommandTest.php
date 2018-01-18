<?php

namespace tests\Illuminate\Queue\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Queue\Console\TableCommand;
use Illuminate\Support\Composer;
use Mockery as m;

class TableCommandTest extends \PHPUnit_Framework_TestCase
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
* @var \Illuminate\Queue\Console\TableCommand
*/
protected $tableCommand;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->_composer = m::mock(\Illuminate\Support\Composer::class);
    $this->tableCommand = new \Illuminate\Queue\Console\TableCommand($this->_files, $this->_composer);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->tableCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
