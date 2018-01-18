<?php

namespace tests\Illuminate\Database\Query\Processors;

use Illuminate\Database\Query\Processors\MySqlProcessor;
use Mockery as m;

class MySqlProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Database\Query\Processors\MySqlProcessor
*/
protected $mySqlProcessor;

public function setUp()
{
    parent::setUp();

    $this->mySqlProcessor = new \Illuminate\Database\Query\Processors\MySqlProcessor();
}

public function testProcessColumnListing0()
{
    $results = m::mock('UntypedParameter_results_');

    // TODO: Your mock expectations here

    $actual = $this->mySqlProcessor->processColumnListing($results);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
