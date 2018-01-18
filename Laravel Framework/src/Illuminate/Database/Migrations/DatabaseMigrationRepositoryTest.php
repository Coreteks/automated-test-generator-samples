<?php

namespace tests\Illuminate\Database\Migrations;

use Illuminate\Database\ConnectionResolverInterface;
use Illuminate\Database\Migrations\DatabaseMigrationRepository;
use Mockery as m;

class DatabaseMigrationRepositoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_resolver;
/**
* @var mixed
*/
protected $_table = null;
/**
* @var \Illuminate\Database\Migrations\DatabaseMigrationRepository
*/
protected $databaseMigrationRepository;

public function setUp()
{
    parent::setUp();

    $this->_resolver = m::mock(\Illuminate\Database\ConnectionResolverInterface::class);
    $this->_table = null;
    $this->databaseMigrationRepository = new \Illuminate\Database\Migrations\DatabaseMigrationRepository($this->_resolver, $this->_table);
}

public function testGetRan0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseMigrationRepository->getRan();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMigrations0()
{
    $steps = m::mock('UntypedParameter_steps_');

    // TODO: Your mock expectations here

    $actual = $this->databaseMigrationRepository->getMigrations($steps);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLast0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseMigrationRepository->getLast();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLog0()
{
    $file = m::mock('UntypedParameter_file_');
    $batch = m::mock('UntypedParameter_batch_');

    // TODO: Your mock expectations here

    $actual = $this->databaseMigrationRepository->log($file, $batch);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $migration = m::mock('UntypedParameter_migration_');

    // TODO: Your mock expectations here

    $actual = $this->databaseMigrationRepository->delete($migration);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextBatchNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseMigrationRepository->getNextBatchNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastBatchNumber0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseMigrationRepository->getLastBatchNumber();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateRepository0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseMigrationRepository->createRepository();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRepositoryExists0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseMigrationRepository->repositoryExists();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnectionResolver0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseMigrationRepository->getConnectionResolver();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConnection0()
{
    // TODO: Your mock expectations here

    $actual = $this->databaseMigrationRepository->getConnection();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetSource0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->databaseMigrationRepository->setSource($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
