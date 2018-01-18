<?php

namespace tests\Illuminate\Database\Query\Processors;

use Illuminate\Database\Query\Processors\Processor;
use Mockery as m;

class ProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Query\Processors\Processor
*/
protected $processor;

public function setUp()
{
    parent::setUp();

    $this->processor = new \Illuminate\Database\Query\Processors\Processor();
}

public function testProcessSelect0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    $actual = $this->processor->processSelect($query, $results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessInsertGetId0()
{
    $query = m::mock(\Illuminate\Database\Query\Builder::class);
    $sql = m::mock('UntypedParameter_sql_');
    $values = m::mock('UntypedParameter_values_');
    $sequence = m::mock('UntypedParameter_sequence_');

    // TODO: Your mock expectations here

    $actual = $this->processor->processInsertGetId($query, $sql, $values, $sequence);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessColumnListing0()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    $actual = $this->processor->processColumnListing($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
