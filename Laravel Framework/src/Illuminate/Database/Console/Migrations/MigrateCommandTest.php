<?php

namespace tests\Illuminate\Database\Console\Migrations;

use Illuminate\Database\Console\Migrations\MigrateCommand;
use Illuminate\Database\Migrations\Migrator;
use Mockery as m;

class MigrateCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_migrator;
/**
* @var \Illuminate\Database\Console\Migrations\MigrateCommand
*/
protected $migrateCommand;

public function setUp()
{
    parent::setUp();

    $this->_migrator = m::mock(\Illuminate\Database\Migrations\Migrator::class);
    $this->migrateCommand = new \Illuminate\Database\Console\Migrations\MigrateCommand($this->_migrator);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 58)
    // if ($this->option('seed')) == false (line 82)

    $actual = $this->migrateCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 58)
    // if ($this->option('seed')) == true (line 82)

    $actual = $this->migrateCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 58)
    // if ($this->option('seed')) == false (line 82)

    $actual = $this->migrateCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 58)
    // if ($this->option('seed')) == true (line 82)

    $actual = $this->migrateCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == true (line 58)

    $actual = $this->migrateCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
