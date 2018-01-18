<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\TestHandler;

class TestHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Handler\TestHandler
*/
protected $testHandler;

public function setUp()
{
    parent::setUp();

    $this->testHandler = new \Monolog\Handler\TestHandler();
}

public function testGetRecords0()
{
    // TODO: Your mock expectations here

    $actual = $this->testHandler->getRecords();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClear0()
{
    // TODO: Your mock expectations here

    $actual = $this->testHandler->clear();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRecords0()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    $actual = $this->testHandler->hasRecords($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRecord0()
{
    $record = m::mock('UntypedParameter_record_');
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($record)) == false (line 89)

    $actual = $this->testHandler->hasRecord($record, $level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRecord1()
{
    $record = m::mock('UntypedParameter_record_');
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($record)) == true (line 89)

    $actual = $this->testHandler->hasRecord($record, $level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRecordThatContains0()
{
    $message = m::mock('UntypedParameter_message_');
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    $actual = $this->testHandler->hasRecordThatContains($message, $level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRecordThatMatches0()
{
    $regex = m::mock('UntypedParameter_regex_');
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    $actual = $this->testHandler->hasRecordThatMatches($regex, $level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRecordThatPasses0()
{
    $predicate = m::mock('UntypedParameter_predicate_');
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->recordsByLevel[$level])) == false (line 114)

    $actual = $this->testHandler->hasRecordThatPasses($predicate, $level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRecordThatPasses1()
{
    $predicate = m::mock('UntypedParameter_predicate_');
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->recordsByLevel[$level])) == false (line 114)
    // if (call_user_func($predicate, $rec, $i)) == false (line 119)

    $actual = $this->testHandler->hasRecordThatPasses($predicate, $level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRecordThatPasses2()
{
    $predicate = m::mock('UntypedParameter_predicate_');
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->recordsByLevel[$level])) == false (line 114)
    // if (call_user_func($predicate, $rec, $i)) == true (line 119)

    $actual = $this->testHandler->hasRecordThatPasses($predicate, $level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasRecordThatPasses3()
{
    $predicate = m::mock('UntypedParameter_predicate_');
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->recordsByLevel[$level])) == true (line 114)

    $actual = $this->testHandler->hasRecordThatPasses($predicate, $level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/(.*)(Debug|Info|Notice|Warning|Error|Critical|Alert|Emergency)(.*)/', $method, $matches) > 0) == false (line 138)
    // throw new \BadMethodCallException('Call to undefined method ' . get_class($this) . '::' . $method . '()') -> exception (line 148)

    $actual = $this->testHandler->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function test__call1()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/(.*)(Debug|Info|Notice|Warning|Error|Critical|Alert|Emergency)(.*)/', $method, $matches) > 0) == true (line 138)
    // if (method_exists($this, $genericMethod)) == false (line 141)
    // throw new \BadMethodCallException('Call to undefined method ' . get_class($this) . '::' . $method . '()') -> exception (line 148)

    $actual = $this->testHandler->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call2()
{
    $method = m::mock('UntypedParameter_method_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match('/(.*)(Debug|Info|Notice|Warning|Error|Critical|Alert|Emergency)(.*)/', $method, $matches) > 0) == true (line 138)
    // if (method_exists($this, $genericMethod)) == true (line 141)

    $actual = $this->testHandler->__call($method, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
