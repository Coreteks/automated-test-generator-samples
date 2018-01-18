<?php

namespace tests\Illuminate\Database\Console\Migrations;

use Illuminate\Database\Console\Migrations\MigrateMakeCommand;
use Illuminate\Database\Migrations\MigrationCreator;
use Illuminate\Support\Composer;
use Mockery as m;

class MigrateMakeCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_creator;
/**
* @var \Mockery\MockInterface
*/
protected $_composer;
/**
* @var \Illuminate\Database\Console\Migrations\MigrateMakeCommand
*/
protected $migrateMakeCommand;

public function setUp()
{
    parent::setUp();

    $this->_creator = m::mock(\Illuminate\Database\Migrations\MigrationCreator::class);
    $this->_composer = m::mock(\Illuminate\Support\Composer::class);
    $this->migrateMakeCommand = new \Illuminate\Database\Console\Migrations\MigrateMakeCommand($this->_creator, $this->_composer);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$table && is_string($create)) == false (line 76)
    // if (!$table) == false (line 85)

    $actual = $this->migrateMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$table && is_string($create)) == false (line 76)
    // if (!$table) == true (line 85)
    // if (preg_match('/^create_(\\w+)_table$/', $name, $matches)) == false (line 86)

    $actual = $this->migrateMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$table && is_string($create)) == false (line 76)
    // if (!$table) == true (line 85)
    // if (preg_match('/^create_(\\w+)_table$/', $name, $matches)) == true (line 86)

    $actual = $this->migrateMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$table && is_string($create)) == true (line 76)
    // if (!$table) == false (line 85)

    $actual = $this->migrateMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$table && is_string($create)) == true (line 76)
    // if (!$table) == true (line 85)
    // if (preg_match('/^create_(\\w+)_table$/', $name, $matches)) == false (line 86)

    $actual = $this->migrateMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$table && is_string($create)) == true (line 76)
    // if (!$table) == true (line 85)
    // if (preg_match('/^create_(\\w+)_table$/', $name, $matches)) == true (line 86)

    $actual = $this->migrateMakeCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
