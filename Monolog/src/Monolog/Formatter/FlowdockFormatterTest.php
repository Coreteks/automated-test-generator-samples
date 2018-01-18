<?php

namespace tests\Monolog\Formatter;

use Mockery as m;
use Monolog\Formatter\FlowdockFormatter;

class FlowdockFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_source = null;
/**
* @var mixed
*/
protected $_sourceEmail = null;
/**
* @var \Monolog\Formatter\FlowdockFormatter
*/
protected $flowdockFormatter;

public function setUp()
{
    parent::setUp();

    $this->_source = null;
    $this->_sourceEmail = null;
    $this->flowdockFormatter = new \Monolog\Formatter\FlowdockFormatter($this->_source, $this->_sourceEmail);
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->flowdockFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->flowdockFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->flowdockFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->flowdockFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortMessage0()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $hasMbString) == false (line 89)
    // if ($hasMbString) == false (line 95)
    // if (strlen($message) > $maxLength) == false (line 100)

    $actual = $this->flowdockFormatter->getShortMessage($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortMessage1()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $hasMbString) == false (line 89)
    // if ($hasMbString) == false (line 95)
    // if (strlen($message) > $maxLength) == true (line 100)

    $actual = $this->flowdockFormatter->getShortMessage($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortMessage2()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $hasMbString) == false (line 89)
    // if ($hasMbString) == true (line 95)
    // if (mb_strlen($message, 'UTF-8') > $maxLength) == false (line 96)

    $actual = $this->flowdockFormatter->getShortMessage($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortMessage3()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $hasMbString) == false (line 89)
    // if ($hasMbString) == true (line 95)
    // if (mb_strlen($message, 'UTF-8') > $maxLength) == true (line 96)

    $actual = $this->flowdockFormatter->getShortMessage($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortMessage4()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $hasMbString) == true (line 89)
    // if ($hasMbString) == false (line 95)
    // if (strlen($message) > $maxLength) == false (line 100)

    $actual = $this->flowdockFormatter->getShortMessage($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortMessage5()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $hasMbString) == true (line 89)
    // if ($hasMbString) == false (line 95)
    // if (strlen($message) > $maxLength) == true (line 100)

    $actual = $this->flowdockFormatter->getShortMessage($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortMessage6()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $hasMbString) == true (line 89)
    // if ($hasMbString) == true (line 95)
    // if (mb_strlen($message, 'UTF-8') > $maxLength) == false (line 96)

    $actual = $this->flowdockFormatter->getShortMessage($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortMessage7()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $hasMbString) == true (line 89)
    // if ($hasMbString) == true (line 95)
    // if (mb_strlen($message, 'UTF-8') > $maxLength) == true (line 96)

    $actual = $this->flowdockFormatter->getShortMessage($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
