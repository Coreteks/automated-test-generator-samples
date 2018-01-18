<?php

namespace tests\Monolog\Formatter;

use Mockery as m;
use Monolog\Formatter\LineFormatter;

class LineFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_format = null;
/**
* @var mixed
*/
protected $_dateFormat = null;
/**
* @var mixed
*/
protected $_allowInlineLineBreaks = null;
/**
* @var mixed
*/
protected $_ignoreEmptyContextAndExtra = null;
/**
* @var \Monolog\Formatter\LineFormatter
*/
protected $lineFormatter;

public function setUp()
{
    parent::setUp();

    $this->_format = null;
    $this->_dateFormat = null;
    $this->_allowInlineLineBreaks = null;
    $this->_ignoreEmptyContextAndExtra = null;
    $this->lineFormatter = new \Monolog\Formatter\LineFormatter($this->_format, $this->_dateFormat, $this->_allowInlineLineBreaks, $this->_ignoreEmptyContextAndExtra);
}

public function testIncludeStacktraces0()
{
    $include = m::mock('UntypedParameter_include_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->includeStacktraces) == false (line 48)

    $actual = $this->lineFormatter->includeStacktraces($include);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncludeStacktraces1()
{
    $include = m::mock('UntypedParameter_include_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->includeStacktraces) == true (line 48)

    $actual = $this->lineFormatter->includeStacktraces($include);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAllowInlineLineBreaks0()
{
    $allow = m::mock('UntypedParameter_allow_');

    // TODO: Your mock expectations here

    $actual = $this->lineFormatter->allowInlineLineBreaks($allow);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIgnoreEmptyContextAndExtra0()
{
    $ignore = m::mock('UntypedParameter_ignore_');

    // TODO: Your mock expectations here

    $actual = $this->lineFormatter->ignoreEmptyContextAndExtra($ignore);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat4()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat5()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat6()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat7()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat8()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat9()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat10()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat11()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat12()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat13()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat14()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat15()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat16()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat17()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat18()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat19()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat20()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat21()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat22()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat23()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat24()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat25()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat26()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat27()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat28()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat29()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat30()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat31()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat32()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat33()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat34()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat35()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat36()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat37()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat38()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat39()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat40()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat41()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat42()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat43()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat44()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat45()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat46()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat47()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat48()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat49()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat50()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat51()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat52()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat53()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat54()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat55()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat56()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat57()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat58()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat59()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat60()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat61()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat62()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat63()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat64()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat65()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat66()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat67()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat68()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat69()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat70()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat71()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat72()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat73()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat74()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat75()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat76()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat77()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat78()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat79()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat80()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat81()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat82()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat83()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat84()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat85()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat86()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat87()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat88()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat89()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat90()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat91()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat92()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat93()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat94()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat95()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat96()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat97()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat98()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat99()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat100()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat101()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat102()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat103()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat104()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat105()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat106()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat107()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat108()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat109()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat110()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat111()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat112()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat113()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat114()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat115()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat116()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat117()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat118()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat119()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat120()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat121()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat122()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat123()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat124()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat125()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat126()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat127()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat128()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat129()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat130()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat131()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat132()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat133()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat134()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat135()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat136()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat137()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat138()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat139()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat140()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat141()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat142()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat143()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat144()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat145()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat146()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat147()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat148()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat149()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat150()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat151()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat152()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat153()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat154()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat155()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat156()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat157()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat158()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat159()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat160()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat161()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat162()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat163()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat164()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat165()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat166()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat167()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat168()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat169()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat170()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat171()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat172()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat173()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat174()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat175()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat176()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat177()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat178()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat179()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == false (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat180()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat181()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat182()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat183()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat184()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat185()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat186()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat187()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat188()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat189()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat190()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat191()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat192()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat193()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat194()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat195()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat196()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat197()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat198()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat199()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat200()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat201()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat202()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat203()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat204()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat205()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat206()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat207()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat208()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat209()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat210()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat211()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat212()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat213()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat214()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat215()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat216()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat217()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat218()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat219()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat220()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat221()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat222()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat223()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat224()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat225()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat226()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat227()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat228()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat229()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat230()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat231()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat232()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat233()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat234()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat235()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat236()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat237()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat238()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat239()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == false (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat240()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat241()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat242()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat243()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat244()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat245()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == false (line 86)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat246()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat247()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat248()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat249()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat250()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat251()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat252()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat253()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat254()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat255()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat256()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat257()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == false (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat258()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat259()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat260()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat261()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat262()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat263()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == false (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat264()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat265()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat266()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat267()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == false (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat268()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == false (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat269()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($output, '%extra.' . $var . '%')) == true (line 73)
    // if (false !== strpos($output, '%context.' . $var . '%')) == true (line 80)
    // if ($this->ignoreEmptyContextAndExtra) == true (line 86)
    // if (empty($vars['context'])) == true (line 87)
    // if (empty($vars['extra'])) == true (line 92)
    // if (false !== strpos($output, '%' . $var . '%')) == true (line 99)
    // if (false !== strpos($output, '%')) == true (line 105)

    $actual = $this->lineFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch0()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->lineFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatBatch1()
{
    $records = [];

    // TODO: Your mock expectations here

    $actual = $this->lineFormatter->formatBatch($records);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStringify0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->lineFormatter->stringify($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
