<?php

namespace tests\Illuminate\Database\Console\Seeds;

use Illuminate\Database\Console\Seeds\SeederMakeCommand;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Composer;
use Mockery as m;

class SeederMakeCommandTest extends \PHPUnit_Framework_TestCase
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
* @var \Illuminate\Database\Console\Seeds\SeederMakeCommand
*/
protected $seederMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->_composer = m::mock(\Illuminate\Support\Composer::class);
    $this->seederMakeCommand = new \Illuminate\Database\Console\Seeds\SeederMakeCommand($this->_files, $this->_composer);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->seederMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
