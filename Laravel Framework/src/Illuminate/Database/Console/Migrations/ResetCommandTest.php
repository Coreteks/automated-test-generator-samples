<?php

namespace tests\Illuminate\Database\Console\Migrations;

use Illuminate\Database\Console\Migrations\ResetCommand;
use Illuminate\Database\Migrations\Migrator;
use Mockery as m;

class ResetCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_migrator;
/**
* @var \Illuminate\Database\Console\Migrations\ResetCommand
*/
protected $resetCommand;

public function setUp()
{
    parent::setUp();

    $this->_migrator = m::mock(\Illuminate\Database\Migrations\Migrator::class);
    $this->resetCommand = new \Illuminate\Database\Console\Migrations\ResetCommand($this->_migrator);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 54)
    // if (!$this->migrator->repositoryExists()) == false (line 63)

    $actual = $this->resetCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 54)
    // if (!$this->migrator->repositoryExists()) == false (line 63)

    $actual = $this->resetCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 54)
    // if (!$this->migrator->repositoryExists()) == true (line 63)

    $actual = $this->resetCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == true (line 54)

    $actual = $this->resetCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
