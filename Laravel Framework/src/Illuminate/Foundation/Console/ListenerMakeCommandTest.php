<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\ListenerMakeCommand;
use Mockery as m;

class ListenerMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\ListenerMakeCommand
*/
protected $listenerMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->listenerMakeCommand = new \Illuminate\Foundation\Console\ListenerMakeCommand();
}
}
