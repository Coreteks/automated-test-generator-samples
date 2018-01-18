<?php

namespace tests\Illuminate\Database;

use Illuminate\Database\MySqlConnection;
use Mockery as m;

class MySqlConnectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\MySqlConnection
*/
protected $mySqlConnection;

public function setUp()
{
    parent::setUp();

    $this->mySqlConnection = new \Illuminate\Database\MySqlConnection();
}

public function testGetSchemaBuilder0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->schemaGrammar)) == false (line 31)

    $actual = $this->mySqlConnection->getSchemaBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSchemaBuilder1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->schemaGrammar)) == true (line 31)

    $actual = $this->mySqlConnection->getSchemaBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBindValues0()
{
    $statement = m::mock('UntypedParameter_statement_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->mySqlConnection->bindValues($statement, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBindValues1()
{
    $statement = m::mock('UntypedParameter_statement_');
    $bindings = m::mock('UntypedParameter_bindings_');

    // TODO: Your mock expectations here

    $actual = $this->mySqlConnection->bindValues($statement, $bindings);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
