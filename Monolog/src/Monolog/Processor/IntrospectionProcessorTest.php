<?php

namespace tests\Monolog\Processor;

use Mockery as m;
use Monolog\Processor\IntrospectionProcessor;

class IntrospectionProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_level = null;
/**
* @var array
*/
protected $_skipClassesPartials = [];
/**
* @var mixed
*/
protected $_skipStackFramesCount = null;
/**
* @var \Monolog\Processor\IntrospectionProcessor
*/
protected $introspectionProcessor;

public function setUp()
{
    parent::setUp();

    $this->_level = null;
    $this->_skipClassesPartials = [];
    $this->_skipStackFramesCount = null;
    $this->introspectionProcessor = new \Monolog\Processor\IntrospectionProcessor($this->_level, $this->_skipClassesPartials, $this->_skipStackFramesCount);
}

public function test__invoke0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 50)
    // while ($this->isTraceClassOrSkippedFunction($trace, $i)) == false (line 68)

    $actual = $this->introspectionProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 50)
    // while ($this->isTraceClassOrSkippedFunction($trace, $i)) == true (line 68)
    // if (isset($trace[$i]['class'])) == false (line 69)
    // if (in_array($trace[$i]['function'], $this->skipFunctions)) == false (line 76)

    $actual = $this->introspectionProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 50)
    // while ($this->isTraceClassOrSkippedFunction($trace, $i)) == true (line 68)
    // if (isset($trace[$i]['class'])) == false (line 69)
    // if (in_array($trace[$i]['function'], $this->skipFunctions)) == true (line 76)
    // while ($this->isTraceClassOrSkippedFunction($trace, $i)) == false (line 68)

    $actual = $this->introspectionProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 50)
    // while ($this->isTraceClassOrSkippedFunction($trace, $i)) == true (line 68)
    // if (isset($trace[$i]['class'])) == true (line 69)

    $actual = $this->introspectionProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 50)
    // while ($this->isTraceClassOrSkippedFunction($trace, $i)) == true (line 68)
    // if (isset($trace[$i]['class'])) == true (line 69)
    // if (strpos($trace[$i]['class'], $part) !== false) == false (line 71)

    $actual = $this->introspectionProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == false (line 50)
    // while ($this->isTraceClassOrSkippedFunction($trace, $i)) == true (line 68)
    // if (isset($trace[$i]['class'])) == true (line 69)
    // if (strpos($trace[$i]['class'], $part) !== false) == true (line 71)
    // while ($this->isTraceClassOrSkippedFunction($trace, $i)) == false (line 68)

    $actual = $this->introspectionProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke6()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($record['level'] < $this->level) == true (line 50)

    $actual = $this->introspectionProcessor->__invoke($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
