<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\CodeExtension;

class CodeExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_fileLinkFormat = null;
/**
* @var mixed
*/
protected $_rootDir = null;
/**
* @var mixed
*/
protected $_charset = null;
/**
* @var \Symfony\Bridge\Twig\Extension\CodeExtension
*/
protected $codeExtension;

public function setUp()
{
    parent::setUp();

    $this->_fileLinkFormat = null;
    $this->_rootDir = null;
    $this->_charset = null;
    $this->codeExtension = new \Symfony\Bridge\Twig\Extension\CodeExtension($this->_fileLinkFormat, $this->_rootDir, $this->_charset);
}

public function testGetFilters0()
{
    // TODO: Your mock expectations here

    $actual = $this->codeExtension->getFilters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbbrClass0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->codeExtension->abbrClass($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbbrMethod0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($method, '::')) == false (line 69)
    // if ('Closure' === $method) == false (line 72)

    $actual = $this->codeExtension->abbrMethod($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbbrMethod1()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($method, '::')) == false (line 69)
    // if ('Closure' === $method) == true (line 72)

    $actual = $this->codeExtension->abbrMethod($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbbrMethod2()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($method, '::')) == true (line 69)

    $actual = $this->codeExtension->abbrMethod($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->codeExtension->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs1()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == false (line 92)
    // if ('array' === $item[0]) == false (line 96)
    // if ('null' === $item[0]) == false (line 98)
    // if ('boolean' === $item[0]) == false (line 100)
    // if ('resource' === $item[0]) == false (line 102)

    $actual = $this->codeExtension->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs2()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == false (line 92)
    // if ('array' === $item[0]) == false (line 96)
    // if ('null' === $item[0]) == false (line 98)
    // if ('boolean' === $item[0]) == false (line 100)
    // if ('resource' === $item[0]) == true (line 102)

    $actual = $this->codeExtension->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs3()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == false (line 92)
    // if ('array' === $item[0]) == false (line 96)
    // if ('null' === $item[0]) == false (line 98)
    // if ('boolean' === $item[0]) == true (line 100)

    $actual = $this->codeExtension->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs4()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == false (line 92)
    // if ('array' === $item[0]) == false (line 96)
    // if ('null' === $item[0]) == true (line 98)

    $actual = $this->codeExtension->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs5()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == false (line 92)
    // if ('array' === $item[0]) == true (line 96)

    $actual = $this->codeExtension->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs6()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == true (line 92)

    $actual = $this->codeExtension->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgsAsText0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->codeExtension->formatArgsAsText($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFileExcerpt0()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $srcContext = m::mock('UntypedParameter_srcContext_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_readable($file)) == false (line 137)

    $actual = $this->codeExtension->fileExcerpt($file, $line, $srcContext);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFileExcerpt1()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $srcContext = m::mock('UntypedParameter_srcContext_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_readable($file)) == true (line 137)
    // if (0 > $srcContext) == false (line 150)
    // for (...) == false (line 154)

    $actual = $this->codeExtension->fileExcerpt($file, $line, $srcContext);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFileExcerpt2()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $srcContext = m::mock('UntypedParameter_srcContext_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_readable($file)) == true (line 137)
    // if (0 > $srcContext) == false (line 150)
    // for (...) == true (line 154)
    // for (...) == false (line 154)

    $actual = $this->codeExtension->fileExcerpt($file, $line, $srcContext);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFileExcerpt3()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $srcContext = m::mock('UntypedParameter_srcContext_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_readable($file)) == true (line 137)
    // if (0 > $srcContext) == true (line 150)
    // for (...) == false (line 154)

    $actual = $this->codeExtension->fileExcerpt($file, $line, $srcContext);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFileExcerpt4()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $srcContext = m::mock('UntypedParameter_srcContext_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_readable($file)) == true (line 137)
    // if (0 > $srcContext) == true (line 150)
    // for (...) == true (line 154)
    // for (...) == false (line 154)

    $actual = $this->codeExtension->fileExcerpt($file, $line, $srcContext);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatFile0()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $text) == false (line 175)
    // if (false !== ($link = $this->getFileLink($file, $line))) == false (line 186)

    $actual = $this->codeExtension->formatFile($file, $line, $text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatFile1()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $text) == false (line 175)
    // if (false !== ($link = $this->getFileLink($file, $line))) == true (line 186)

    $actual = $this->codeExtension->formatFile($file, $line, $text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatFile2()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $text) == true (line 175)
    // if (0 === strpos($text, $this->rootDir)) == false (line 177)
    // if (false !== ($link = $this->getFileLink($file, $line))) == false (line 186)

    $actual = $this->codeExtension->formatFile($file, $line, $text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatFile3()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $text) == true (line 175)
    // if (0 === strpos($text, $this->rootDir)) == false (line 177)
    // if (false !== ($link = $this->getFileLink($file, $line))) == true (line 186)

    $actual = $this->codeExtension->formatFile($file, $line, $text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatFile4()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $text) == true (line 175)
    // if (0 === strpos($text, $this->rootDir)) == true (line 177)
    // if (false !== ($link = $this->getFileLink($file, $line))) == false (line 186)

    $actual = $this->codeExtension->formatFile($file, $line, $text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatFile5()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $text) == true (line 175)
    // if (0 === strpos($text, $this->rootDir)) == true (line 177)
    // if (false !== ($link = $this->getFileLink($file, $line))) == true (line 186)

    $actual = $this->codeExtension->formatFile($file, $line, $text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFileLink0()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($fmt = $this->fileLinkFormat) == false (line 203)

    $actual = $this->codeExtension->getFileLink($file, $line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFileLink1()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($fmt = $this->fileLinkFormat) == true (line 203)

    $actual = $this->codeExtension->getFileLink($file, $line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatFileFromText0()
{
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    $actual = $this->codeExtension->formatFileFromText($text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatLogMessage0()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($context && false !== strpos($message, '{')) == false (line 222)

    $actual = $this->codeExtension->formatLogMessage($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatLogMessage1()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($context && false !== strpos($message, '{')) == true (line 222)
    // if ($replacements) == false (line 230)

    $actual = $this->codeExtension->formatLogMessage($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatLogMessage2()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($context && false !== strpos($message, '{')) == true (line 222)
    // if ($replacements) == true (line 230)

    $actual = $this->codeExtension->formatLogMessage($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatLogMessage3()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($context && false !== strpos($message, '{')) == true (line 222)
    // if (is_scalar($val)) == false (line 225)
    // if ($replacements) == false (line 230)

    $actual = $this->codeExtension->formatLogMessage($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatLogMessage4()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($context && false !== strpos($message, '{')) == true (line 222)
    // if (is_scalar($val)) == false (line 225)
    // if ($replacements) == true (line 230)

    $actual = $this->codeExtension->formatLogMessage($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatLogMessage5()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($context && false !== strpos($message, '{')) == true (line 222)
    // if (is_scalar($val)) == true (line 225)
    // if ($replacements) == false (line 230)

    $actual = $this->codeExtension->formatLogMessage($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatLogMessage6()
{
    $message = m::mock('UntypedParameter_message_');
    $context = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($context && false !== strpos($message, '{')) == true (line 222)
    // if (is_scalar($val)) == true (line 225)
    // if ($replacements) == true (line 230)

    $actual = $this->codeExtension->formatLogMessage($message, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->codeExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
