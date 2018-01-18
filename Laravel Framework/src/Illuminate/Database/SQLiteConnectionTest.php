<?php

namespace tests\Illuminate\Database;

use Illuminate\Database\SQLiteConnection;
use Mockery as m;

class SQLiteConnectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\SQLiteConnection
*/
protected $sQLiteConnection;

public function setUp()
{
    parent::setUp();

    $this->sQLiteConnection = new \Illuminate\Database\SQLiteConnection();
}

public function testGetSchemaBuilder0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->schemaGrammar)) == false (line 30)

    $actual = $this->sQLiteConnection->getSchemaBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSchemaBuilder1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($this->schemaGrammar)) == true (line 30)

    $actual = $this->sQLiteConnection->getSchemaBuilder();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
