<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\QueuedCommand;
use Mockery as m;

class QueuedCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_data = null;
/**
* @var \Illuminate\Foundation\Console\QueuedCommand
*/
protected $queuedCommand;

public function setUp()
{
    parent::setUp();

    $this->_data = null;
    $this->queuedCommand = new \Illuminate\Foundation\Console\QueuedCommand($this->_data);
}

public function testHandle0()
{
    $kernel = m::mock(\Illuminate\Contracts\Console\Kernel::class);

    // TODO: Your mock expectations here

    $actual = $this->queuedCommand->handle($kernel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
