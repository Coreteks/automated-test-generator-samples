<?php

namespace tests\Illuminate\Database\Console\Migrations;

use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Database\Migrations\Migrator;
use Mockery as m;

class StatusCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_migrator;
/**
* @var \Illuminate\Database\Console\Migrations\StatusCommand
*/
protected $statusCommand;

public function setUp()
{
    parent::setUp();

    $this->_migrator = m::mock(\Illuminate\Database\Migrations\Migrator::class);
    $this->statusCommand = new \Illuminate\Database\Console\Migrations\StatusCommand($this->_migrator);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->migrator->repositoryExists()) == false (line 54)
    // if (count($migrations = $this->getStatusFor($ran)) > 0) == false (line 60)

    $actual = $this->statusCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->migrator->repositoryExists()) == false (line 54)
    // if (count($migrations = $this->getStatusFor($ran)) > 0) == true (line 60)

    $actual = $this->statusCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->migrator->repositoryExists()) == true (line 54)

    $actual = $this->statusCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
