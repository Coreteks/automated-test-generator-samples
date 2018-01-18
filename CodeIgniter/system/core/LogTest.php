<?php

namespace tests;

use CI_Log;
use Mockery as m;

class CI_LogTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Log
*/
protected $cI_Log;

public function setUp()
{
    parent::setUp();

    $this->cI_Log = new \CI_Log();
}

public function testWrite_log0()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log1()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log2()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == false (line 224)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log3()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == false (line 224)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log4()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == true (line 224)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log5()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == true (line 224)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log6()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log7()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log8()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == false (line 224)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log9()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == false (line 224)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log10()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == true (line 224)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log11()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == true (line 224)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log12()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == false (line 190)
    // if (!($fp = @\fopen($filepath, 'ab'))) == true (line 200)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log13()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log14()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log15()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == false (line 224)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log16()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == false (line 224)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log17()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == true (line 224)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log18()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == true (line 224)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log19()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log20()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log21()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == false (line 224)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log22()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == false (line 224)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log23()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == true (line 224)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log24()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == true (line 224)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log25()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == false (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == true (line 200)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log26()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log27()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log28()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == false (line 224)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log29()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == false (line 224)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log30()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == true (line 224)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log31()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == false (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == true (line 224)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log32()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log33()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log34()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == false (line 224)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log35()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == false (line 224)
    // for (...) == false (line 222)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log36()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == true (line 224)
    // if (isset($newfile) && $newfile === \TRUE) == false (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log37()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == false (line 200)
    // if (\strpos($this->_date_fmt, 'u') !== \FALSE) == true (line 208)
    // for (...) == true (line 222)
    // if (($result = \fwrite($fp, self::substr($message, $written))) === \FALSE) == true (line 224)
    // if (isset($newfile) && $newfile === \TRUE) == true (line 233)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log38()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == false (line 181)
    // if (!\file_exists($filepath)) == true (line 190)
    // if ($this->_file_ext === 'php') == true (line 194)
    // if (!($fp = @\fopen($filepath, 'ab'))) == true (line 200)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log39()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == false (line 174)
    // if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) == true (line 181)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite_log40()
{
    $level = m::mock('UntypedParameter_level_');
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_enabled === \FALSE) == true (line 174)

    $actual = $this->cI_Log->write_log($level, $msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
