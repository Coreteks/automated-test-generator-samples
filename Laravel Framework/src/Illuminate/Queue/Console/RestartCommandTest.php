<?php

namespace tests\Illuminate\Queue\Console;

use Illuminate\Queue\Console\RestartCommand;
use Mockery as m;

class RestartCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\Console\RestartCommand
*/
protected $restartCommand;

public function setUp()
{
    parent::setUp();

    $this->restartCommand = new \Illuminate\Queue\Console\RestartCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->restartCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
