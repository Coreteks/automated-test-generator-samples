<?php

namespace tests\Illuminate\Session\Console;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Session\Console\SessionTableCommand;
use Illuminate\Support\Composer;
use Mockery as m;

class SessionTableCommandTest extends \PHPUnit_Framework_TestCase
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
* @var \Illuminate\Session\Console\SessionTableCommand
*/
protected $sessionTableCommand;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->_composer = m::mock(\Illuminate\Support\Composer::class);
    $this->sessionTableCommand = new \Illuminate\Session\Console\SessionTableCommand($this->_files, $this->_composer);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionTableCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
