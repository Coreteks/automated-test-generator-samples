<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\EnvironmentCommand;
use Mockery as m;

class EnvironmentCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\EnvironmentCommand
*/
protected $environmentCommand;

public function setUp()
{
    parent::setUp();

    $this->environmentCommand = new \Illuminate\Foundation\Console\EnvironmentCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->environmentCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
