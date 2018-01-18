<?php

namespace tests\Illuminate\Queue\Console;

use Illuminate\Queue\Console\ListenCommand;
use Illuminate\Queue\Listener;
use Mockery as m;

class ListenCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_listener;
/**
* @var \Illuminate\Queue\Console\ListenCommand
*/
protected $listenCommand;

public function setUp()
{
    parent::setUp();

    $this->_listener = m::mock(\Illuminate\Queue\Listener::class);
    $this->listenCommand = new \Illuminate\Queue\Console\ListenCommand($this->_listener);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->listenCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
