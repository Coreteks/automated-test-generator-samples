<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\EventGenerateCommand;
use Mockery as m;

class EventGenerateCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\EventGenerateCommand
*/
protected $eventGenerateCommand;

public function setUp()
{
    parent::setUp();

    $this->eventGenerateCommand = new \Illuminate\Foundation\Console\EventGenerateCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->eventGenerateCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    $actual = $this->eventGenerateCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    $actual = $this->eventGenerateCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
