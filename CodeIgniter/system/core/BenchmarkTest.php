<?php

namespace tests;

use CI_Benchmark;
use Mockery as m;

class CI_BenchmarkTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Benchmark
*/
protected $cI_Benchmark;

public function setUp()
{
    parent::setUp();

    $this->cI_Benchmark = new \CI_Benchmark();
}

public function testMark0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Benchmark->mark($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testElapsed_time0()
{
    $point1 = m::mock('UntypedParameter_point1_');
    $point2 = m::mock('UntypedParameter_point2_');
    $decimals = m::mock('UntypedParameter_decimals_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($point1 === '') == false (line 97)
    // if (!isset($this->marker[$point1])) == false (line 102)
    // if (!isset($this->marker[$point2])) == false (line 107)

    $actual = $this->cI_Benchmark->elapsed_time($point1, $point2, $decimals);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testElapsed_time1()
{
    $point1 = m::mock('UntypedParameter_point1_');
    $point2 = m::mock('UntypedParameter_point2_');
    $decimals = m::mock('UntypedParameter_decimals_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($point1 === '') == false (line 97)
    // if (!isset($this->marker[$point1])) == false (line 102)
    // if (!isset($this->marker[$point2])) == true (line 107)

    $actual = $this->cI_Benchmark->elapsed_time($point1, $point2, $decimals);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testElapsed_time2()
{
    $point1 = m::mock('UntypedParameter_point1_');
    $point2 = m::mock('UntypedParameter_point2_');
    $decimals = m::mock('UntypedParameter_decimals_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($point1 === '') == false (line 97)
    // if (!isset($this->marker[$point1])) == true (line 102)

    $actual = $this->cI_Benchmark->elapsed_time($point1, $point2, $decimals);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testElapsed_time3()
{
    $point1 = m::mock('UntypedParameter_point1_');
    $point2 = m::mock('UntypedParameter_point2_');
    $decimals = m::mock('UntypedParameter_decimals_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($point1 === '') == true (line 97)

    $actual = $this->cI_Benchmark->elapsed_time($point1, $point2, $decimals);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMemory_usage0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Benchmark->memory_usage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
