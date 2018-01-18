<?php

namespace tests\Illuminate\Database\Console\Migrations;

use Illuminate\Database\Console\Migrations\FreshCommand;
use Mockery as m;

class FreshCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Console\Migrations\FreshCommand
*/
protected $freshCommand;

public function setUp()
{
    parent::setUp();

    $this->freshCommand = new \Illuminate\Database\Console\Migrations\FreshCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 34)
    // if ($this->needsSeeding()) == false (line 50)

    $actual = $this->freshCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 34)
    // if ($this->needsSeeding()) == true (line 50)

    $actual = $this->freshCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == true (line 34)

    $actual = $this->freshCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
