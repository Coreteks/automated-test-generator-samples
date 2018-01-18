<?php

namespace tests\Illuminate\Database\Console\Migrations;

use Illuminate\Database\Console\Migrations\RefreshCommand;
use Mockery as m;

class RefreshCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Console\Migrations\RefreshCommand
*/
protected $refreshCommand;

public function setUp()
{
    parent::setUp();

    $this->refreshCommand = new \Illuminate\Database\Console\Migrations\RefreshCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 34)
    // if ($step > 0) == false (line 52)
    // if ($this->needsSeeding()) == false (line 67)

    $actual = $this->refreshCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 34)
    // if ($step > 0) == false (line 52)
    // if ($this->needsSeeding()) == true (line 67)

    $actual = $this->refreshCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 34)
    // if ($step > 0) == true (line 52)
    // if ($this->needsSeeding()) == false (line 67)

    $actual = $this->refreshCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 34)
    // if ($step > 0) == true (line 52)
    // if ($this->needsSeeding()) == true (line 67)

    $actual = $this->refreshCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == true (line 34)

    $actual = $this->refreshCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
