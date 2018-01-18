<?php

namespace tests\Illuminate\Routing\Console;

use Illuminate\Routing\Console\MiddlewareMakeCommand;
use Mockery as m;

class MiddlewareMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Routing\Console\MiddlewareMakeCommand
*/
protected $middlewareMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->middlewareMakeCommand = new \Illuminate\Routing\Console\MiddlewareMakeCommand();
}
}
