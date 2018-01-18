<?php

namespace tests;

use CI_Profiler;
use Mockery as m;

class CI_ProfilerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_config = null;
/**
* @var \CI_Profiler
*/
protected $cI_Profiler;

public function setUp()
{
    parent::setUp();

    $this->_config = null;
    $this->cI_Profiler = new \CI_Profiler($this->_config);
}

public function testSet_sections0()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['query_toggle_count'])) == false (line 128)

    $actual = $this->cI_Profiler->set_sections($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_sections1()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['query_toggle_count'])) == false (line 128)
    // if (\in_array($method, $this->_available_sections)) == false (line 136)

    $actual = $this->cI_Profiler->set_sections($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_sections2()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['query_toggle_count'])) == false (line 128)
    // if (\in_array($method, $this->_available_sections)) == true (line 136)

    $actual = $this->cI_Profiler->set_sections($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_sections3()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['query_toggle_count'])) == true (line 128)

    $actual = $this->cI_Profiler->set_sections($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_sections4()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['query_toggle_count'])) == true (line 128)
    // if (\in_array($method, $this->_available_sections)) == false (line 136)

    $actual = $this->cI_Profiler->set_sections($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_sections5()
{
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($config['query_toggle_count'])) == true (line 128)
    // if (\in_array($method, $this->_available_sections)) == true (line 136)

    $actual = $this->cI_Profiler->set_sections($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($fields_displayed === 0) == false (line 565)

    $actual = $this->cI_Profiler->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($fields_displayed === 0) == true (line 565)

    $actual = $this->cI_Profiler->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_compile_[$section] !== \FALSE) == false (line 557)
    // if ($fields_displayed === 0) == false (line 565)

    $actual = $this->cI_Profiler->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_compile_[$section] !== \FALSE) == false (line 557)
    // if ($fields_displayed === 0) == true (line 565)

    $actual = $this->cI_Profiler->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_compile_[$section] !== \FALSE) == true (line 557)
    // if ($fields_displayed === 0) == false (line 565)

    $actual = $this->cI_Profiler->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_compile_[$section] !== \FALSE) == true (line 557)
    // if ($fields_displayed === 0) == true (line 565)

    $actual = $this->cI_Profiler->run();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
