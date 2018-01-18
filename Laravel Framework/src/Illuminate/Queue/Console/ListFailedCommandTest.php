<?php

namespace tests\Illuminate\Queue\Console;

use Illuminate\Queue\Console\ListFailedCommand;
use Mockery as m;

class ListFailedCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Queue\Console\ListFailedCommand
*/
protected $listFailedCommand;

public function setUp()
{
    parent::setUp();

    $this->listFailedCommand = new \Illuminate\Queue\Console\ListFailedCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($jobs = $this->getFailedJobs()) == 0) == false (line 38)

    $actual = $this->listFailedCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($jobs = $this->getFailedJobs()) == 0) == true (line 38)

    $actual = $this->listFailedCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
