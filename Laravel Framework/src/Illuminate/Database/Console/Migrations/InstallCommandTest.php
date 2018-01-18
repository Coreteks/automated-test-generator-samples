<?php

namespace tests\Illuminate\Database\Console\Migrations;

use Illuminate\Database\Console\Migrations\InstallCommand;
use Illuminate\Database\Migrations\MigrationRepositoryInterface;
use Mockery as m;

class InstallCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_repository;
/**
* @var \Illuminate\Database\Console\Migrations\InstallCommand
*/
protected $installCommand;

public function setUp()
{
    parent::setUp();

    $this->_repository = m::mock(\Illuminate\Database\Migrations\MigrationRepositoryInterface::class);
    $this->installCommand = new \Illuminate\Database\Console\Migrations\InstallCommand($this->_repository);
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    $actual = $this->installCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
