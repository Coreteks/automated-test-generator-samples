<?php

namespace tests\Illuminate\Foundation\Testing\Constraints;

use Illuminate\Database\Connection;
use Illuminate\Foundation\Testing\Constraints\SoftDeletedInDatabase;
use Mockery as m;

class SoftDeletedInDatabaseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_database;
/**
* @var array
*/
protected $_data = [];
/**
* @var \Illuminate\Foundation\Testing\Constraints\SoftDeletedInDatabase
*/
protected $softDeletedInDatabase;

public function setUp()
{
    parent::setUp();

    $this->_database = m::mock(\Illuminate\Database\Connection::class);
    $this->_data = [];
    $this->softDeletedInDatabase = new \Illuminate\Foundation\Testing\Constraints\SoftDeletedInDatabase($this->_database, $this->_data);
}

public function testMatches0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->softDeletedInDatabase->matches($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailureDescription0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->softDeletedInDatabase->failureDescription($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->softDeletedInDatabase->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
