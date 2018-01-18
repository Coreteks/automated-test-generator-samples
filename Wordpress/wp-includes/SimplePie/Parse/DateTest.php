<?php

namespace tests;

use Mockery as m;
use SimplePie_Parse_Date;

class SimplePie_Parse_DateTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \SimplePie_Parse_Date
*/
protected $simplePie_Parse_Date;

public function setUp()
{
    parent::setUp();

    $this->simplePie_Parse_Date = new \SimplePie_Parse_Date();
}

public function testGet0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$object) == false (line 576)

    $actual = $this->simplePie_Parse_Date->get();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$object) == true (line 576)

    $actual = $this->simplePie_Parse_Date->get();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse0()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    $actual = $this->simplePie_Parse_Date->parse($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($returned = \call_user_func(array($this, $method), $date)) !== \false) == false (line 603)

    $actual = $this->simplePie_Parse_Date->parse($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($returned = \call_user_func(array($this, $method), $date)) !== \false) == true (line 603)

    $actual = $this->simplePie_Parse_Date->parse($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse3()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($returned = \call_user_func($method, $date)) !== \false) == false (line 595)

    $actual = $this->simplePie_Parse_Date->parse($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse4()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($returned = \call_user_func($method, $date)) !== \false) == false (line 595)
    // if (($returned = \call_user_func(array($this, $method), $date)) !== \false) == false (line 603)

    $actual = $this->simplePie_Parse_Date->parse($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse5()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($returned = \call_user_func($method, $date)) !== \false) == false (line 595)
    // if (($returned = \call_user_func(array($this, $method), $date)) !== \false) == true (line 603)

    $actual = $this->simplePie_Parse_Date->parse($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse6()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($returned = \call_user_func($method, $date)) !== \false) == true (line 595)

    $actual = $this->simplePie_Parse_Date->parse($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_callback0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable($callback)) == false (line 621)

    $actual = $this->simplePie_Parse_Date->add_callback($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_callback1()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_callable($callback)) == true (line 621)

    $actual = $this->simplePie_Parse_Date->add_callback($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf0()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == false (line 650)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf1()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == false (line 668)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == false (line 679)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf2()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == false (line 668)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == false (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf3()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == false (line 668)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == true (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf4()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == false (line 668)
    // for (...) == true (line 673)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == false (line 679)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf5()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == false (line 668)
    // for (...) == true (line 673)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == false (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf6()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == false (line 668)
    // for (...) == true (line 673)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == true (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf7()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == true (line 668)
    // for (...) == false (line 668)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == false (line 679)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf8()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == true (line 668)
    // for (...) == false (line 668)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == false (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf9()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == true (line 668)
    // for (...) == false (line 668)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == true (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf10()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == true (line 668)
    // for (...) == false (line 668)
    // for (...) == true (line 673)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == false (line 679)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf11()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == true (line 668)
    // for (...) == false (line 668)
    // for (...) == true (line 673)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == false (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf12()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == true (line 668)
    // for (...) == false (line 668)
    // for (...) == true (line 673)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == true (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf13()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == false (line 650)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf14()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == false (line 668)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == false (line 679)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf15()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == false (line 668)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == false (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf16()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == false (line 668)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == true (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf17()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == false (line 668)
    // for (...) == true (line 673)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == false (line 679)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf18()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == false (line 668)
    // for (...) == true (line 673)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == false (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf19()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == false (line 668)
    // for (...) == true (line 673)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == true (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf20()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == true (line 668)
    // for (...) == false (line 668)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == false (line 679)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf21()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == true (line 668)
    // for (...) == false (line 668)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == false (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf22()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == true (line 668)
    // for (...) == false (line 668)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == true (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf23()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == true (line 668)
    // for (...) == false (line 668)
    // for (...) == true (line 673)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == false (line 679)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf24()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == true (line 668)
    // for (...) == false (line 668)
    // for (...) == true (line 673)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == false (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_w3cdtf25()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 642)
    // if (\preg_match($pcre, $date, $match)) == true (line 650)
    // for (...) == true (line 668)
    // for (...) == false (line 668)
    // for (...) == true (line 673)
    // for (...) == false (line 673)
    // if (isset($match[9]) && $match[9] !== '') == true (line 679)
    // if ($match[9] === '-') == true (line 683)

    $actual = $this->simplePie_Parse_Date->date_w3cdtf($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_rfc2822_comments0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == false (line 720)

    $actual = $this->simplePie_Parse_Date->remove_rfc2822_comments($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_rfc2822_comments1()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == true (line 720)
    // if ($string[$pos - 1] !== '\\') == false (line 724)
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == false (line 720)

    $actual = $this->simplePie_Parse_Date->remove_rfc2822_comments($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_rfc2822_comments2()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == true (line 720)
    // if ($string[$pos - 1] !== '\\') == true (line 724)
    // while ($depth && $position < $length) == false (line 727)
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == false (line 720)

    $actual = $this->simplePie_Parse_Date->remove_rfc2822_comments($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_rfc2822_comments3()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == true (line 720)
    // if ($string[$pos - 1] !== '\\') == true (line 724)
    // while ($depth && $position < $length) == true (line 727)
    // if ($string[$position - 1] === '\\') == false (line 730)
    // if (isset($string[$position])) == false (line 735)
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == false (line 720)

    $actual = $this->simplePie_Parse_Date->remove_rfc2822_comments($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_rfc2822_comments4()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == true (line 720)
    // if ($string[$pos - 1] !== '\\') == true (line 724)
    // while ($depth && $position < $length) == true (line 727)
    // if ($string[$position - 1] === '\\') == false (line 730)
    // if (isset($string[$position])) == true (line 735)
    // switch ($string[$position]) (line 737)
    // Case '(' == false (line 739)
    // Case ')' == false (line 743)
    // while ($depth && $position < $length) == false (line 727)
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == false (line 720)

    $actual = $this->simplePie_Parse_Date->remove_rfc2822_comments($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_rfc2822_comments5()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == true (line 720)
    // if ($string[$pos - 1] !== '\\') == true (line 724)
    // while ($depth && $position < $length) == true (line 727)
    // if ($string[$position - 1] === '\\') == false (line 730)
    // if (isset($string[$position])) == true (line 735)
    // switch ($string[$position]) (line 737)
    // Case '(' == false (line 739)
    // Case ')' == true (line 743)
    // while ($depth && $position < $length) == false (line 727)
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == false (line 720)

    $actual = $this->simplePie_Parse_Date->remove_rfc2822_comments($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_rfc2822_comments6()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == true (line 720)
    // if ($string[$pos - 1] !== '\\') == true (line 724)
    // while ($depth && $position < $length) == true (line 727)
    // if ($string[$position - 1] === '\\') == false (line 730)
    // if (isset($string[$position])) == true (line 735)
    // switch ($string[$position]) (line 737)
    // Case '(' == true (line 739)
    // while ($depth && $position < $length) == false (line 727)
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == false (line 720)

    $actual = $this->simplePie_Parse_Date->remove_rfc2822_comments($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_rfc2822_comments7()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == true (line 720)
    // if ($string[$pos - 1] !== '\\') == true (line 724)
    // while ($depth && $position < $length) == true (line 727)
    // if ($string[$position - 1] === '\\') == true (line 730)
    // while ($depth && $position < $length) == false (line 727)
    // while ($position < $length && ($pos = \strpos($string, '(', $position)) !== \false) == false (line 720)

    $actual = $this->simplePie_Parse_Date->remove_rfc2822_comments($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc28220()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == false (line 789)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc28221()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == false (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc28222()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == false (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc28223()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == false (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc28224()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == false (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc28225()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == false (line 820)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc28226()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == false (line 820)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc28227()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == true (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc28228()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == true (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc28229()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == true (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282210()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == true (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282211()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == true (line 820)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282212()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == true (line 820)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282213()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == false (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282214()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == false (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282215()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == false (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282216()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == false (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282217()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == false (line 814)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282218()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == false (line 814)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282219()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == true (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282220()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == true (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282221()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == true (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282222()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == true (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282223()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == true (line 814)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282224()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == true (line 814)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282225()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == false (line 789)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282226()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == false (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282227()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == false (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282228()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == false (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282229()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == false (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282230()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == false (line 820)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282231()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == false (line 820)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282232()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == true (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282233()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == true (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282234()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == true (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282235()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == true (line 820)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282236()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == true (line 820)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282237()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == false (line 810)
    // if (isset($this->timezone[\strtoupper($match[11])])) == true (line 820)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282238()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == false (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282239()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == false (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282240()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == false (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282241()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == false (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282242()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == false (line 814)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282243()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == false (line 814)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282244()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == true (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282245()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == true (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == false (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282246()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == true (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282247()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == true (line 814)
    // if ($match[4] < 50) == false (line 831)
    // if ($match[4] < 1000) == true (line 835)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282248()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == true (line 814)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == false (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc282249()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 774)
    // if (\preg_match($pcre, $this->remove_rfc2822_comments($date), $match)) == true (line 789)
    // if ($match[8] !== '') == true (line 810)
    // if ($match[8] === '-') == true (line 814)
    // if ($match[4] < 50) == true (line 831)
    // if ($match[7] !== '') == true (line 841)

    $actual = $this->simplePie_Parse_Date->date_rfc2822($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc8500()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 867)
    // if (\preg_match($pcre, $date, $match)) == false (line 877)

    $actual = $this->simplePie_Parse_Date->date_rfc850($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc8501()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 867)
    // if (\preg_match($pcre, $date, $match)) == true (line 877)
    // if (isset($this->timezone[\strtoupper($match[8])])) == false (line 895)
    // if ($match[4] < 50) == false (line 906)

    $actual = $this->simplePie_Parse_Date->date_rfc850($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc8502()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 867)
    // if (\preg_match($pcre, $date, $match)) == true (line 877)
    // if (isset($this->timezone[\strtoupper($match[8])])) == false (line 895)
    // if ($match[4] < 50) == true (line 906)

    $actual = $this->simplePie_Parse_Date->date_rfc850($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc8503()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 867)
    // if (\preg_match($pcre, $date, $match)) == true (line 877)
    // if (isset($this->timezone[\strtoupper($match[8])])) == true (line 895)
    // if ($match[4] < 50) == false (line 906)

    $actual = $this->simplePie_Parse_Date->date_rfc850($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc8504()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 867)
    // if (\preg_match($pcre, $date, $match)) == true (line 877)
    // if (isset($this->timezone[\strtoupper($match[8])])) == true (line 895)
    // if ($match[4] < 50) == true (line 906)

    $actual = $this->simplePie_Parse_Date->date_rfc850($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc8505()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 867)
    // if (\preg_match($pcre, $date, $match)) == false (line 877)

    $actual = $this->simplePie_Parse_Date->date_rfc850($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc8506()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 867)
    // if (\preg_match($pcre, $date, $match)) == true (line 877)
    // if (isset($this->timezone[\strtoupper($match[8])])) == false (line 895)
    // if ($match[4] < 50) == false (line 906)

    $actual = $this->simplePie_Parse_Date->date_rfc850($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc8507()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 867)
    // if (\preg_match($pcre, $date, $match)) == true (line 877)
    // if (isset($this->timezone[\strtoupper($match[8])])) == false (line 895)
    // if ($match[4] < 50) == true (line 906)

    $actual = $this->simplePie_Parse_Date->date_rfc850($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc8508()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 867)
    // if (\preg_match($pcre, $date, $match)) == true (line 877)
    // if (isset($this->timezone[\strtoupper($match[8])])) == true (line 895)
    // if ($match[4] < 50) == false (line 906)

    $actual = $this->simplePie_Parse_Date->date_rfc850($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_rfc8509()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 867)
    // if (\preg_match($pcre, $date, $match)) == true (line 877)
    // if (isset($this->timezone[\strtoupper($match[8])])) == true (line 895)
    // if ($match[4] < 50) == true (line 906)

    $actual = $this->simplePie_Parse_Date->date_rfc850($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_asctime0()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 932)
    // if (\preg_match($pcre, $date, $match)) == false (line 943)

    $actual = $this->simplePie_Parse_Date->date_asctime($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_asctime1()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == false (line 932)
    // if (\preg_match($pcre, $date, $match)) == true (line 943)

    $actual = $this->simplePie_Parse_Date->date_asctime($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_asctime2()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 932)
    // if (\preg_match($pcre, $date, $match)) == false (line 943)

    $actual = $this->simplePie_Parse_Date->date_asctime($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_asctime3()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$pcre) == true (line 932)
    // if (\preg_match($pcre, $date, $match)) == true (line 943)

    $actual = $this->simplePie_Parse_Date->date_asctime($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_strtotime0()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($strtotime === -1 || $strtotime === \false) == false (line 974)

    $actual = $this->simplePie_Parse_Date->date_strtotime($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDate_strtotime1()
{
    $date = m::mock('UntypedParameter_date_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($strtotime === -1 || $strtotime === \false) == true (line 974)

    $actual = $this->simplePie_Parse_Date->date_strtotime($date);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
