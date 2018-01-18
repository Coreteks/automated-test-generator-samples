<?php

namespace tests\Illuminate\Foundation\Testing\Constraints;

use Illuminate\Database\Connection;
use Illuminate\Foundation\Testing\Constraints\HasInDatabase;
use Mockery as m;

class HasInDatabaseTest extends \PHPUnit_Framework_TestCase
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
* @var \Illuminate\Foundation\Testing\Constraints\HasInDatabase
*/
protected $hasInDatabase;

public function setUp()
{
    parent::setUp();

    $this->_database = m::mock(\Illuminate\Database\Connection::class);
    $this->_data = [];
    $this->hasInDatabase = new \Illuminate\Foundation\Testing\Constraints\HasInDatabase($this->_database, $this->_data);
}

public function testMatches0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->hasInDatabase->matches($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailureDescription0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    $actual = $this->hasInDatabase->failureDescription($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->hasInDatabase->toString($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
