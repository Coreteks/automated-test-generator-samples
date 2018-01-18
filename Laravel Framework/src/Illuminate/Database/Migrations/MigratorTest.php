<?php

namespace tests\Illuminate\Database\Migrations;

use Illuminate\Database\ConnectionResolverInterface;
use Illuminate\Database\Migrations\MigrationRepositoryInterface;
use Illuminate\Database\Migrations\Migrator;
use Illuminate\Filesystem\Filesystem;
use Mockery as m;

class MigratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_repository;
/**
* @var \Mockery\MockInterface
*/
protected $_resolver;
/**
* @var \Mockery\MockInterface
*/
protected $_files;
/**
* @var \Illuminate\Database\Migrations\Migrator
*/
protected $migrator;

public function setUp()
{
    parent::setUp();

    $this->_repository = m::mock(\Illuminate\Database\Migrations\MigrationRepositoryInterface::class);
    $this->_resolver = m::mock(\Illuminate\Database\ConnectionResolverInterface::class);
    $this->_files = m::mock(\Illuminate\Filesystem\Filesystem::class);
    $this->migrator = new \Illuminate\Database\Migrations\Migrator($this->_repository, $this->_resolver, $this->_files);
}

public function testRun0()
{
    $paths = m::mock('UntypedParameter_paths_');
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->migrator->run($paths, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunPending0()
{
    $migrations = [];
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($migrations) == 0) == false (line 127)

    $actual = $this->migrator->runPending($migrations, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunPending1()
{
    $migrations = [];
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($migrations) == 0) == false (line 127)
    // if ($step) == false (line 148)

    $actual = $this->migrator->runPending($migrations, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunPending2()
{
    $migrations = [];
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($migrations) == 0) == false (line 127)
    // if ($step) == true (line 148)

    $actual = $this->migrator->runPending($migrations, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRunPending3()
{
    $migrations = [];
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($migrations) == 0) == true (line 127)

    $actual = $this->migrator->runPending($migrations, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRollback0()
{
    $paths = m::mock('UntypedParameter_paths_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($migrations) === 0) == false (line 203)

    $actual = $this->migrator->rollback($paths, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRollback1()
{
    $paths = m::mock('UntypedParameter_paths_');
    $options = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($migrations) === 0) == true (line 203)

    $actual = $this->migrator->rollback($paths, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset0()
{
    $paths = m::mock('UntypedParameter_paths_');
    $pretend = m::mock('UntypedParameter_pretend_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($migrations) === 0) == false (line 280)

    $actual = $this->migrator->reset($paths, $pretend);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset1()
{
    $paths = m::mock('UntypedParameter_paths_');
    $pretend = m::mock('UntypedParameter_pretend_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($migrations) === 0) == true (line 280)

    $actual = $this->migrator->reset($paths, $pretend);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve0()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    $actual = $this->migrator->resolve($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMigrationFiles0()
{
    $paths = m::mock('UntypedParameter_paths_');

    // TODO: Your mock expectations here

    $actual = $this->migrator->getMigrationFiles($paths);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequireFiles0()
{
    $files = [];

    // TODO: Your mock expectations here

    $actual = $this->migrator->requireFiles($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRequireFiles1()
{
    $files = [];

    // TODO: Your mock expectations here

    $actual = $this->migrator->requireFiles($files);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMigrationName0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->migrator->getMigrationName($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->migrator->path($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPaths0()
{
    // TODO: Your mock expectations here

    $actual = $this->migrator->paths();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConnection0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($name)) == false (line 491)

    $actual = $this->migrator->setConnection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConnection1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($name)) == true (line 491)

    $actual = $this->migrator->setConnection($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolveConnection0()
{
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->migrator->resolveConnection($connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRepository0()
{
    // TODO: Your mock expectations here

    $actual = $this->migrator->getRepository();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRepositoryExists0()
{
    // TODO: Your mock expectations here

    $actual = $this->migrator->repositoryExists();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFilesystem0()
{
    // TODO: Your mock expectations here

    $actual = $this->migrator->getFilesystem();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNotes0()
{
    // TODO: Your mock expectations here

    $actual = $this->migrator->getNotes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
