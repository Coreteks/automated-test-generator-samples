<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\UpCommand;
use Mockery as m;

class UpCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\UpCommand
*/
protected $upCommand;

public function setUp()
{
    parent::setUp();

    $this->upCommand = new \Illuminate\Foundation\Console\UpCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->upCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
