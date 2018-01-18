<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\DownCommand;
use Mockery as m;

class DownCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\DownCommand
*/
protected $downCommand;

public function setUp()
{
    parent::setUp();

    $this->downCommand = new \Illuminate\Foundation\Console\DownCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->downCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
