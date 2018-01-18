<?php

namespace tests\Illuminate\Routing\Console;

use Illuminate\Routing\Console\ControllerMakeCommand;
use Mockery as m;

class ControllerMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\Console\ControllerMakeCommand
*/
protected $controllerMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->controllerMakeCommand = new \Illuminate\Routing\Console\ControllerMakeCommand();
}
}
