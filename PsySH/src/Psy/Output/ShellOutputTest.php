<?php

namespace tests\Psy\Output;

use Mockery as m;
use Psy\Output\ShellOutput;
use Symfony\Component\Console\Formatter\OutputFormatterInterface;

class ShellOutputTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_verbosity = null;
/**
* @var mixed
*/
protected $_decorated = null;
/**
* @var \Mockery\MockInterface
*/
protected $_formatter;
/**
* @var mixed
*/
protected $_pager = null;
/**
* @var \Psy\Output\ShellOutput
*/
protected $shellOutput;

public function setUp()
{
    parent::setUp();

    $this->_verbosity = null;
    $this->_decorated = null;
    $this->_formatter = m::mock(\Symfony\Component\Console\Formatter\OutputFormatterInterface::class);
    $this->_pager = null;
    $this->shellOutput = new \Psy\Output\ShellOutput($this->_verbosity, $this->_decorated, $this->_formatter, $this->_pager);
}

public function testPage0()
{
    $messages = m::mock('UntypedParameter_messages_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($messages)) == false (line 68)
    // if (!is_array($messages) && !is_callable($messages)) == false (line 72)
    // if (is_callable($messages)) == false (line 78)

    $actual = $this->shellOutput->page($messages, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPage1()
{
    $messages = m::mock('UntypedParameter_messages_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($messages)) == false (line 68)
    // if (!is_array($messages) && !is_callable($messages)) == false (line 72)
    // if (is_callable($messages)) == true (line 78)

    $actual = $this->shellOutput->page($messages, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testPage2()
{
    $messages = m::mock('UntypedParameter_messages_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($messages)) == false (line 68)
    // if (!is_array($messages) && !is_callable($messages)) == true (line 72)
    // throw new \InvalidArgumentException('Paged output requires a string, array or callback.') -> exception (line 73)

    $actual = $this->shellOutput->page($messages, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPage3()
{
    $messages = m::mock('UntypedParameter_messages_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($messages)) == true (line 68)
    // if (!is_array($messages) && !is_callable($messages)) == false (line 72)
    // if (is_callable($messages)) == false (line 78)

    $actual = $this->shellOutput->page($messages, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPage4()
{
    $messages = m::mock('UntypedParameter_messages_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($messages)) == true (line 68)
    // if (!is_array($messages) && !is_callable($messages)) == false (line 72)
    // if (is_callable($messages)) == true (line 78)

    $actual = $this->shellOutput->page($messages, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testPage5()
{
    $messages = m::mock('UntypedParameter_messages_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($messages)) == true (line 68)
    // if (!is_array($messages) && !is_callable($messages)) == true (line 72)
    // throw new \InvalidArgumentException('Paged output requires a string, array or callback.') -> exception (line 73)

    $actual = $this->shellOutput->page($messages, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartPaging0()
{
    // TODO: Your mock expectations here

    $actual = $this->shellOutput->startPaging();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStopPaging0()
{
    // TODO: Your mock expectations here

    $actual = $this->shellOutput->stopPaging();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $messages = m::mock('UntypedParameter_messages_');
    $newline = m::mock('UntypedParameter_newline_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVerbosity() === self::VERBOSITY_QUIET) == false (line 118)
    // if ($type & self::NUMBER_LINES) == false (line 124)

    $actual = $this->shellOutput->write($messages, $newline, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite1()
{
    $messages = m::mock('UntypedParameter_messages_');
    $newline = m::mock('UntypedParameter_newline_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVerbosity() === self::VERBOSITY_QUIET) == false (line 118)
    // if ($type & self::NUMBER_LINES) == true (line 124)
    // if ($type & self::OUTPUT_RAW) == false (line 128)

    $actual = $this->shellOutput->write($messages, $newline, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite2()
{
    $messages = m::mock('UntypedParameter_messages_');
    $newline = m::mock('UntypedParameter_newline_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVerbosity() === self::VERBOSITY_QUIET) == false (line 118)
    // if ($type & self::NUMBER_LINES) == true (line 124)
    // if ($type & self::OUTPUT_RAW) == false (line 128)

    $actual = $this->shellOutput->write($messages, $newline, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite3()
{
    $messages = m::mock('UntypedParameter_messages_');
    $newline = m::mock('UntypedParameter_newline_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVerbosity() === self::VERBOSITY_QUIET) == false (line 118)
    // if ($type & self::NUMBER_LINES) == true (line 124)
    // if ($type & self::OUTPUT_RAW) == true (line 128)

    $actual = $this->shellOutput->write($messages, $newline, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite4()
{
    $messages = m::mock('UntypedParameter_messages_');
    $newline = m::mock('UntypedParameter_newline_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVerbosity() === self::VERBOSITY_QUIET) == false (line 118)
    // if ($type & self::NUMBER_LINES) == true (line 124)
    // if ($type & self::OUTPUT_RAW) == true (line 128)

    $actual = $this->shellOutput->write($messages, $newline, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite5()
{
    $messages = m::mock('UntypedParameter_messages_');
    $newline = m::mock('UntypedParameter_newline_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->getVerbosity() === self::VERBOSITY_QUIET) == true (line 118)

    $actual = $this->shellOutput->write($messages, $newline, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDoWrite0()
{
    $message = m::mock('UntypedParameter_message_');
    $newline = m::mock('UntypedParameter_newline_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->paging > 0) == false (line 153)

    $actual = $this->shellOutput->doWrite($message, $newline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDoWrite1()
{
    $message = m::mock('UntypedParameter_message_');
    $newline = m::mock('UntypedParameter_newline_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->paging > 0) == true (line 153)

    $actual = $this->shellOutput->doWrite($message, $newline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
