<?php

namespace tests\Illuminate\Auth\Console;

use Illuminate\Auth\Console\ClearResetsCommand;
use Mockery as m;

class ClearResetsCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Auth\Console\ClearResetsCommand
*/
protected $clearResetsCommand;

public function setUp()
{
    parent::setUp();

    $this->clearResetsCommand = new \Illuminate\Auth\Console\ClearResetsCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->clearResetsCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
