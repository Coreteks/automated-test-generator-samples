<?php

namespace tests\Illuminate\Database\Query\Processors;

use Illuminate\Database\Query\Processors\PostgresProcessor;
use Mockery as m;

class PostgresProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Query\Processors\PostgresProcessor
*/
protected $postgresProcessor;

public function setUp()
{
    parent::setUp();

    $this->postgresProcessor = new \Illuminate\Database\Query\Processors\PostgresProcessor();
}

public function testProcessInsertGetId0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $sql = m::mock('UntypedParameter_sql_');
    $values = m::mock('UntypedParameter_values_');
    $sequence = m::mock('UntypedParameter_sequence_');

    // TODO: Your mock expectations here

    $actual = $this->postgresProcessor->processInsertGetId($query, $sql, $values, $sequence);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessColumnListing0()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    $actual = $this->postgresProcessor->processColumnListing($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
