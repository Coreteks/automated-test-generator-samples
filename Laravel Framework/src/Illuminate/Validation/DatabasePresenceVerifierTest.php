<?php

namespace tests\Illuminate\Validation;

use Illuminate\Database\ConnectionResolverInterface;
use Illuminate\Validation\DatabasePresenceVerifier;
use Mockery as m;

class DatabasePresenceVerifierTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_db;
/**
* @var \Illuminate\Validation\DatabasePresenceVerifier
*/
protected $databasePresenceVerifier;

public function setUp()
{
    parent::setUp();

    $this->_db = m::mock(\Illuminate\Database\ConnectionResolverInterface::class);
    $this->databasePresenceVerifier = new \Illuminate\Validation\DatabasePresenceVerifier($this->_db);
}

public function testGetCount0()
{
    $collection = m::mock('UntypedParameter_collection_');
    $column = m::mock('UntypedParameter_column_');
    $value = m::mock('UntypedParameter_value_');
    $excludeId = m::mock('UntypedParameter_excludeId_');
    $idColumn = m::mock('UntypedParameter_idColumn_');
    $extra = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($excludeId) && $excludeId !== 'NULL') == false (line 51)

    $actual = $this->databasePresenceVerifier->getCount($collection, $column, $value, $excludeId, $idColumn, $extra);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCount1()
{
    $collection = m::mock('UntypedParameter_collection_');
    $column = m::mock('UntypedParameter_column_');
    $value = m::mock('UntypedParameter_value_');
    $excludeId = m::mock('UntypedParameter_excludeId_');
    $idColumn = m::mock('UntypedParameter_idColumn_');
    $extra = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($excludeId) && $excludeId !== 'NULL') == true (line 51)

    $actual = $this->databasePresenceVerifier->getCount($collection, $column, $value, $excludeId, $idColumn, $extra);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMultiCount0()
{
    $collection = m::mock('UntypedParameter_collection_');
    $column = m::mock('UntypedParameter_column_');
    $values = [];
    $extra = [];

    // TODO: Your mock expectations here

    $actual = $this->databasePresenceVerifier->getMultiCount($collection, $column, $values, $extra);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetConnection0()
{
    $connection = m::mock('UntypedParameter_connection_');

    // TODO: Your mock expectations here

    $actual = $this->databasePresenceVerifier->setConnection($connection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
