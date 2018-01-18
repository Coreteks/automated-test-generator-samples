<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\OptimizeCommand;
use Mockery as m;

class OptimizeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\OptimizeCommand
*/
protected $optimizeCommand;

public function setUp()
{
    parent::setUp();

    $this->optimizeCommand = new \Illuminate\Foundation\Console\OptimizeCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->optimizeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
