<?php

namespace tests\Illuminate\Database\Console\Migrations;

use Illuminate\Database\Console\Migrations\RollbackCommand;
use Illuminate\Database\Migrations\Migrator;
use Mockery as m;

class RollbackCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_migrator;
/**
* @var \Illuminate\Database\Console\Migrations\RollbackCommand
*/
protected $rollbackCommand;

public function setUp()
{
    parent::setUp();

    $this->_migrator = m::mock(\Illuminate\Database\Migrations\Migrator::class);
    $this->rollbackCommand = new \Illuminate\Database\Console\Migrations\RollbackCommand($this->_migrator);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 54)

    $actual = $this->rollbackCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == false (line 54)

    $actual = $this->rollbackCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->confirmToProceed()) == true (line 54)

    $actual = $this->rollbackCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
