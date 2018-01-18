<?php

namespace tests\Illuminate\Database\Migrations;

use Illuminate\Database\Migrations\MigrationCreator;
use Illuminate\Filesystem\Filesystem;
use Mockery as m;

class MigrationCreatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var \Illuminate\Database\Migrations\MigrationCreator
*/
protected $migrationCreator;

public function setUp()
{
    parent::setUp();

    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->migrationCreator = new \Illuminate\Database\Migrations\MigrationCreator($this->_files);
}

public function testCreate0()
{
    $name = m::mock('UntypedParameter_name_');
    $path = m::mock('UntypedParameter_path_');
    $table = m::mock('UntypedParameter_table_');
    $create = m::mock('UntypedParameter_create_');

    // TODO: Your mock expectations here

    $actual = $this->migrationCreator->create($name, $path, $table, $create);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfterCreate0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->migrationCreator->afterCreate($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStubPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->migrationCreator->stubPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilesystem0()
{
    // TODO: Your mock expectations here

    $actual = $this->migrationCreator->getFilesystem();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
