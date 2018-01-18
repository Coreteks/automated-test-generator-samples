<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\NotificationMakeCommand;
use Mockery as m;

class NotificationMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\NotificationMakeCommand
*/
protected $notificationMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->notificationMakeCommand = new \Illuminate\Foundation\Console\NotificationMakeCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 38)
    // if ($this->option('markdown')) == false (line 42)

    $actual = $this->notificationMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == false (line 38)
    // if ($this->option('markdown')) == true (line 42)

    $actual = $this->notificationMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (parent::handle() === false && !$this->option('force')) == true (line 38)

    $actual = $this->notificationMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
