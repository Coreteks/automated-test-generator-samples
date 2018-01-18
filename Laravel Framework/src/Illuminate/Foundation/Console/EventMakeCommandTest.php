<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\EventMakeCommand;
use Mockery as m;

class EventMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\EventMakeCommand
*/
protected $eventMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->eventMakeCommand = new \Illuminate\Foundation\Console\EventMakeCommand();
}
}
