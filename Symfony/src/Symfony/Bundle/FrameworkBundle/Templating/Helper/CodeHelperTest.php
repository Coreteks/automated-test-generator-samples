<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Templating\Helper;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper;

class CodeHelperTest extends \PHPUnit_Framework_TestCase
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
* @var \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper
*/
protected $codeHelper;

public function setUp()
{
    parent::setUp();

    $this->_fileLinkFormat = null;
    $this->_rootDir = null;
    $this->_charset = null;
    $this->codeHelper = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper($this->_fileLinkFormat, $this->_rootDir, $this->_charset);
}

public function testFormatArgsAsText0()
{
    $args = [];

    // TODO: Your mock expectations here

    $actual = $this->codeHelper->formatArgsAsText($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbbrClass0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->codeHelper->abbrClass($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbbrMethod0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($method, '::')) == false (line 60)
    // if ('Closure' === $method) == false (line 63)

    $actual = $this->codeHelper->abbrMethod($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbbrMethod1()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($method, '::')) == false (line 60)
    // if ('Closure' === $method) == true (line 63)

    $actual = $this->codeHelper->abbrMethod($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAbbrMethod2()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($method, '::')) == true (line 60)

    $actual = $this->codeHelper->abbrMethod($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs0()
{
    $args = [];

    // TODO: Your mock expectations here

    $actual = $this->codeHelper->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs1()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == false (line 83)
    // if ('array' === $item[0]) == false (line 87)
    // if ('string' === $item[0]) == false (line 89)
    // if ('null' === $item[0]) == false (line 91)
    // if ('boolean' === $item[0]) == false (line 93)
    // if ('resource' === $item[0]) == false (line 95)

    $actual = $this->codeHelper->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs2()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == false (line 83)
    // if ('array' === $item[0]) == false (line 87)
    // if ('string' === $item[0]) == false (line 89)
    // if ('null' === $item[0]) == false (line 91)
    // if ('boolean' === $item[0]) == false (line 93)
    // if ('resource' === $item[0]) == true (line 95)

    $actual = $this->codeHelper->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs3()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == false (line 83)
    // if ('array' === $item[0]) == false (line 87)
    // if ('string' === $item[0]) == false (line 89)
    // if ('null' === $item[0]) == false (line 91)
    // if ('boolean' === $item[0]) == true (line 93)

    $actual = $this->codeHelper->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs4()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == false (line 83)
    // if ('array' === $item[0]) == false (line 87)
    // if ('string' === $item[0]) == false (line 89)
    // if ('null' === $item[0]) == true (line 91)

    $actual = $this->codeHelper->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs5()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == false (line 83)
    // if ('array' === $item[0]) == false (line 87)
    // if ('string' === $item[0]) == true (line 89)

    $actual = $this->codeHelper->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs6()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == false (line 83)
    // if ('array' === $item[0]) == true (line 87)

    $actual = $this->codeHelper->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatArgs7()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('object' === $item[0]) == true (line 83)

    $actual = $this->codeHelper->formatArgs($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFileExcerpt0()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_readable($file)) == false (line 117)

    $actual = $this->codeHelper->fileExcerpt($file, $line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFileExcerpt1()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_readable($file)) == true (line 117)
    // if (extension_loaded('fileinfo')) == false (line 118)
    // for (...) == false (line 135)

    $actual = $this->codeHelper->fileExcerpt($file, $line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFileExcerpt2()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_readable($file)) == true (line 117)
    // if (extension_loaded('fileinfo')) == false (line 118)
    // for (...) == true (line 135)
    // for (...) == false (line 135)

    $actual = $this->codeHelper->fileExcerpt($file, $line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFileExcerpt3()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_readable($file)) == true (line 117)
    // if (extension_loaded('fileinfo')) == true (line 118)
    // if ('application/octet-stream' === $finfo->file($file, FILEINFO_MIME_TYPE)) == false (line 122)
    // for (...) == false (line 135)

    $actual = $this->codeHelper->fileExcerpt($file, $line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFileExcerpt4()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_readable($file)) == true (line 117)
    // if (extension_loaded('fileinfo')) == true (line 118)
    // if ('application/octet-stream' === $finfo->file($file, FILEINFO_MIME_TYPE)) == false (line 122)
    // for (...) == true (line 135)
    // for (...) == false (line 135)

    $actual = $this->codeHelper->fileExcerpt($file, $line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFileExcerpt5()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_readable($file)) == true (line 117)
    // if (extension_loaded('fileinfo')) == true (line 118)
    // if ('application/octet-stream' === $finfo->file($file, FILEINFO_MIME_TYPE)) == true (line 122)

    $actual = $this->codeHelper->fileExcerpt($file, $line);
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
    // if (null === $text) == false (line 156)
    // if (false !== ($link = $this->getFileLink($file, $line))) == false (line 168)

    $actual = $this->codeHelper->formatFile($file, $line, $text);
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
    // if (null === $text) == false (line 156)
    // if (false !== ($link = $this->getFileLink($file, $line))) == true (line 168)

    $actual = $this->codeHelper->formatFile($file, $line, $text);
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
    // if (null === $text) == true (line 156)
    // if (0 === strpos($fileStr, $this->rootDir)) == false (line 159)
    // if (false !== ($link = $this->getFileLink($file, $line))) == false (line 168)

    $actual = $this->codeHelper->formatFile($file, $line, $text);
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
    // if (null === $text) == true (line 156)
    // if (0 === strpos($fileStr, $this->rootDir)) == false (line 159)
    // if (false !== ($link = $this->getFileLink($file, $line))) == true (line 168)

    $actual = $this->codeHelper->formatFile($file, $line, $text);
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
    // if (null === $text) == true (line 156)
    // if (0 === strpos($fileStr, $this->rootDir)) == true (line 159)
    // if (false !== ($link = $this->getFileLink($file, $line))) == false (line 168)

    $actual = $this->codeHelper->formatFile($file, $line, $text);
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
    // if (null === $text) == true (line 156)
    // if (0 === strpos($fileStr, $this->rootDir)) == true (line 159)
    // if (false !== ($link = $this->getFileLink($file, $line))) == true (line 168)

    $actual = $this->codeHelper->formatFile($file, $line, $text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFileLink0()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($fmt = $this->fileLinkFormat) == false (line 185)

    $actual = $this->codeHelper->getFileLink($file, $line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFileLink1()
{
    $file = m::mock('UntypedParameter_file_');
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($fmt = $this->fileLinkFormat) == true (line 185)

    $actual = $this->codeHelper->getFileLink($file, $line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatFileFromText0()
{
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    $actual = $this->codeHelper->formatFileFromText($text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->codeHelper->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
