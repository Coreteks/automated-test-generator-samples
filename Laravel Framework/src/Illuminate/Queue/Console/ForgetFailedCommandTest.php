<?php

namespace tests\Illuminate\Queue\Console;

use Illuminate\Queue\Console\ForgetFailedCommand;
use Mockery as m;

class ForgetFailedCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\Console\ForgetFailedCommand
*/
protected $forgetFailedCommand;

public function setUp()
{
    parent::setUp();

    $this->forgetFailedCommand = new \Illuminate\Queue\Console\ForgetFailedCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->laravel['queue.failer']->forget($this->argument('id'))) == false (line 30)

    $actual = $this->forgetFailedCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->laravel['queue.failer']->forget($this->argument('id'))) == true (line 30)

    $actual = $this->forgetFailedCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
