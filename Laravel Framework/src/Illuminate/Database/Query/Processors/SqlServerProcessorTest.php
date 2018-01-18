<?php

namespace tests\Illuminate\Database\Query\Processors;

use Illuminate\Database\Query\Processors\SqlServerProcessor;
use Mockery as m;

class SqlServerProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Query\Processors\SqlServerProcessor
*/
protected $sqlServerProcessor;

public function setUp()
{
    parent::setUp();

    $this->sqlServerProcessor = new \Illuminate\Database\Query\Processors\SqlServerProcessor();
}

public function testProcessInsertGetId0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $sql = m::mock('UntypedParameter_sql_');
    $values = m::mock('UntypedParameter_values_');
    $sequence = m::mock('UntypedParameter_sequence_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($connection->getConfig('odbc') === true) == false (line 26)

    $actual = $this->sqlServerProcessor->processInsertGetId($query, $sql, $values, $sequence);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessInsertGetId1()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $sql = m::mock('UntypedParameter_sql_');
    $values = m::mock('UntypedParameter_values_');
    $sequence = m::mock('UntypedParameter_sequence_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($connection->getConfig('odbc') === true) == true (line 26)

    $actual = $this->sqlServerProcessor->processInsertGetId($query, $sql, $values, $sequence);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessColumnListing0()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    $actual = $this->sqlServerProcessor->processColumnListing($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
