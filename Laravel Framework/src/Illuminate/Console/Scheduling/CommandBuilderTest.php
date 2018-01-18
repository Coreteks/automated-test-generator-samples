<?php

namespace tests\Illuminate\Console\Scheduling;

use Illuminate\Console\Scheduling\CommandBuilder;
use Mockery as m;

class CommandBuilderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Console\Scheduling\CommandBuilder
*/
protected $commandBuilder;

public function setUp()
{
    parent::setUp();

    $this->commandBuilder = new \Illuminate\Console\Scheduling\CommandBuilder();
}

public function testBuildCommand0()
{
    $event = m::mock(\Illuminate\Console\Scheduling\Event::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($event->runInBackground) == false (line 18)

    $actual = $this->commandBuilder->buildCommand($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBuildCommand1()
{
    $event = m::mock(\Illuminate\Console\Scheduling\Event::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($event->runInBackground) == true (line 18)

    $actual = $this->commandBuilder->buildCommand($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
