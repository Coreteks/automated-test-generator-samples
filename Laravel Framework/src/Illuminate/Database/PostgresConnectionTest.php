<?php

namespace tests\Illuminate\Database;

use Illuminate\Database\PostgresConnection;
use Mockery as m;

class PostgresConnectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\PostgresConnection
*/
protected $postgresConnection;

public function setUp()
{
    parent::setUp();

    $this->postgresConnection = new \Illuminate\Database\PostgresConnection();
}

public function testGetSchemaBuilder0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->schemaGrammar)) == false (line 30)

    $actual = $this->postgresConnection->getSchemaBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSchemaBuilder1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->schemaGrammar)) == true (line 30)

    $actual = $this->postgresConnection->getSchemaBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
