<?php

namespace tests\Illuminate\Database\Query\Processors;

use Illuminate\Database\Query\Processors\SQLiteProcessor;
use Mockery as m;

class SQLiteProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Query\Processors\SQLiteProcessor
*/
protected $sQLiteProcessor;

public function setUp()
{
    parent::setUp();

    $this->sQLiteProcessor = new \Illuminate\Database\Query\Processors\SQLiteProcessor();
}

public function testProcessColumnListing0()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    $actual = $this->sQLiteProcessor->processColumnListing($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
