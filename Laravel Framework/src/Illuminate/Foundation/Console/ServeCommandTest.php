<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\ServeCommand;
use Mockery as m;

class ServeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\ServeCommand
*/
protected $serveCommand;

public function setUp()
{
    parent::setUp();

    $this->serveCommand = new \Illuminate\Foundation\Console\ServeCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->serveCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
