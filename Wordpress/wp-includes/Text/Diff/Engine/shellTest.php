<?php

namespace tests;

use Mockery as m;
use Text_Diff_Engine_shell;

class Text_Diff_Engine_shellTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Text_Diff_Engine_shell
*/
protected $text_Diff_Engine_shell;

public function setUp()
{
    parent::setUp();

    $this->text_Diff_Engine_shell = new \Text_Diff_Engine_shell();
}

public function testDiff0()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff1()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff2()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff3()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff4()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff5()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff6()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff7()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff8()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff9()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff10()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff11()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff12()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff13()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff14()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff15()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff16()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff17()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff18()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff19()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff20()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff21()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff22()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff23()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff24()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff25()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff26()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff27()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff28()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff29()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff30()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff31()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff32()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff33()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff34()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff35()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff36()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff37()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff38()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff39()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff40()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff41()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff42()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff43()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff44()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff45()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff46()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff47()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff48()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff49()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff50()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff51()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff52()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff53()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff54()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff55()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff56()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff57()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff58()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff59()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff60()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff61()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff62()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff63()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff64()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff65()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == false (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff66()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff67()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff68()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff69()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff70()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff71()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff72()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff73()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff74()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff75()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff76()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff77()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff78()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff79()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff80()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff81()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff82()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff83()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff84()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff85()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff86()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff87()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff88()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff89()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff90()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff91()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff92()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff93()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff94()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff95()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff96()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff97()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == false (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff98()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff99()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff100()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff101()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff102()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff103()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff104()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff105()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff106()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff107()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff108()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff109()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff110()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff111()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff112()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff113()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == false (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff114()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff115()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff116()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff117()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff118()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff119()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff120()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff121()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == false (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff122()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff123()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == false (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff124()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff125()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == false (line 102)
    // Case 'a' == true (line 110)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff126()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff127()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == false (line 94)
    // Case 'c' == true (line 102)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff128()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == false (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff129()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == false (line 54)
    // if (!isset($match[5])) == true (line 71)
    // if ($match[3] == 'a') == true (line 76)
    // if ($match[3] == 'd') == true (line 80)
    // if ($from_line_no < $match[1] || $to_line_no < $match[4]) == true (line 84)
    // switch ($match[3]) (line 93)
    // Case 'd' == true (line 94)
    // if (!empty($from_lines)) == true (line 120)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDiff130()
{
    $from_lines = m::mock('UntypedParameter_from_lines_');
    $to_lines = m::mock('UntypedParameter_to_lines_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($diff)) == true (line 54)

    $actual = $this->text_Diff_Engine_shell->diff($from_lines, $to_lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_getLines0()
{
    $text_lines = m::mock('UntypedParameter_text_lines_');
    $line_no = m::mock('UntypedParameter_line_no_');
    $end = m::mock('UntypedParameter_end_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($end)) == false (line 147)

    $actual = $this->text_Diff_Engine_shell->_getLines($text_lines, $line_no, $end);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_getLines1()
{
    $text_lines = m::mock('UntypedParameter_text_lines_');
    $line_no = m::mock('UntypedParameter_line_no_');
    $end = m::mock('UntypedParameter_end_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($end)) == true (line 147)
    // while ($line_no <= $end) == false (line 150)

    $actual = $this->text_Diff_Engine_shell->_getLines($text_lines, $line_no, $end);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_getLines2()
{
    $text_lines = m::mock('UntypedParameter_text_lines_');
    $line_no = m::mock('UntypedParameter_line_no_');
    $end = m::mock('UntypedParameter_end_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($end)) == true (line 147)
    // while ($line_no <= $end) == true (line 150)
    // while ($line_no <= $end) == false (line 150)

    $actual = $this->text_Diff_Engine_shell->_getLines($text_lines, $line_no, $end);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
