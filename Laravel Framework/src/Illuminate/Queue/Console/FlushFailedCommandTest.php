<?php

namespace tests\Illuminate\Queue\Console;

use Illuminate\Queue\Console\FlushFailedCommand;
use Mockery as m;

class FlushFailedCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\Console\FlushFailedCommand
*/
protected $flushFailedCommand;

public function setUp()
{
    parent::setUp();

    $this->flushFailedCommand = new \Illuminate\Queue\Console\FlushFailedCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->flushFailedCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
