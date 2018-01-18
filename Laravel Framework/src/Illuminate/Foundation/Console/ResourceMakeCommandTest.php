<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\ResourceMakeCommand;
use Mockery as m;

class ResourceMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\ResourceMakeCommand
*/
protected $resourceMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->resourceMakeCommand = new \Illuminate\Foundation\Console\ResourceMakeCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->collection()) == false (line 39)

    $actual = $this->resourceMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->collection()) == true (line 39)

    $actual = $this->resourceMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
