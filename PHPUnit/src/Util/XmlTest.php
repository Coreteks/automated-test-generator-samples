<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\Xml;

class XmlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\Xml
*/
protected $xml;

public function setUp()
{
    parent::setUp();

    $this->xml = new \PHPUnit\Util\Xml();
}

public function testLoad0()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad1()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad2()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad3()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad4()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad5()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad6()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad7()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad8()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad9()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad10()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad11()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad12()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad13()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad14()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad15()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad16()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad17()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad18()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad19()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad20()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad21()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad22()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad23()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad24()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad25()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad26()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad27()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad28()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad29()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad30()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad31()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad32()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad33()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad34()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad35()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad36()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad37()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad38()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad39()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad40()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad41()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad42()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad43()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad44()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad45()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad46()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad47()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad48()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad49()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad50()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad51()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad52()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad53()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad54()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad55()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad56()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad57()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad58()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad59()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad60()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad61()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad62()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad63()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad64()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad65()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad66()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad67()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad68()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad69()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad70()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad71()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad72()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad73()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad74()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad75()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad76()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad77()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad78()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad79()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad80()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad81()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad82()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad83()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad84()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad85()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad86()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad87()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad88()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad89()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad90()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad91()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad92()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad93()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad94()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad95()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad96()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad97()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad98()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad99()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad100()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad101()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad102()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad103()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad104()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad105()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad106()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad107()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad108()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad109()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad110()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad111()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad112()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad113()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad114()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad115()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad116()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad117()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad118()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad119()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad120()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad121()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad122()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad123()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad124()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad125()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad126()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad127()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == false (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad128()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad129()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad130()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad131()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad132()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad133()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad134()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad135()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad136()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad137()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad138()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad139()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad140()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad141()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad142()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad143()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad144()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad145()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad146()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad147()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad148()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad149()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad150()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad151()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad152()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad153()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad154()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad155()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad156()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad157()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad158()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad159()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad160()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad161()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad162()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad163()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad164()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad165()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad166()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad167()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad168()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad169()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad170()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad171()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad172()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad173()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad174()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad175()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad176()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad177()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad178()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad179()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad180()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad181()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad182()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad183()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad184()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad185()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad186()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad187()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad188()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad189()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad190()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad191()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == false (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad192()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad193()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad194()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad195()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad196()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad197()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad198()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad199()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad200()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad201()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad202()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad203()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad204()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad205()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad206()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad207()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad208()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad209()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad210()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad211()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad212()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad213()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad214()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad215()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad216()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad217()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad218()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad219()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad220()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad221()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad222()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad223()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == false (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad224()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad225()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad226()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad227()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad228()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad229()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad230()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad231()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad232()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad233()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad234()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad235()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad236()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad237()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad238()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad239()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == false (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad240()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad241()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad242()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad243()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad244()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad245()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad246()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad247()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad248()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad249()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad250()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad251()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == false (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad252()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == false (line 99)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad253()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == false (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad254()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == false (line 100)
    // if ($message === '') == true (line 110)
    // throw new \PHPUnit\Framework\Exception($message) -> exception (line 114)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad255()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == false (line 56)
    // if ($xinclude) == true (line 61)
    // if ($filename !== '') == true (line 73)
    // if ($isHtml) == true (line 78)
    // if (!$isHtml && $xinclude) == true (line 84)
    // if (isset($cwd)) == true (line 95)
    // if ($loaded === false || $strict && $message !== '') == true (line 99)
    // if ($filename !== '') == true (line 100)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not load "%s".%s', $filename, $message !== '' ? "\n" . $message : '')) -> exception (line 101)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad256()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == false (line 52)
    // if ($actual === '') == true (line 56)
    // throw new \PHPUnit\Framework\Exception('Could not load XML from empty string') -> exception (line 57)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoad257()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == false (line 48)
    // if (!\is_string($actual)) == true (line 52)
    // throw new \PHPUnit\Framework\Exception('Could not load XML from ' . \gettype($actual)) -> exception (line 53)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad258()
{
    $actual = m::mock('UntypedParameter_actual_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $filename = m::mock('UntypedParameter_filename_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($actual instanceof \DOMDocument) == true (line 48)

    $actual = $this->xml->load($actual, $isHtml, $filename, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadFile0()
{
    $filename = m::mock('UntypedParameter_filename_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($contents === false) == false (line 139)

    $actual = $this->xml->loadFile($filename, $isHtml, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PHPUnit\Framework\Exception
 */
public function testLoadFile1()
{
    $filename = m::mock('UntypedParameter_filename_');
    $isHtml = m::mock('UntypedParameter_isHtml_');
    $xinclude = m::mock('UntypedParameter_xinclude_');
    $strict = m::mock('UntypedParameter_strict_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($contents === false) == true (line 139)
    // throw new \PHPUnit\Framework\Exception(\sprintf('Could not read "%s".', $filename)) -> exception (line 140)

    $actual = $this->xml->loadFile($filename, $isHtml, $xinclude, $strict);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveCharacterDataNodes0()
{
    $node = m::mock(\DOMNode::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node->hasChildNodes()) == false (line 153)

    $actual = $this->xml->removeCharacterDataNodes($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveCharacterDataNodes1()
{
    $node = m::mock(\DOMNode::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node->hasChildNodes()) == true (line 153)
    // for (...) == false (line 154)

    $actual = $this->xml->removeCharacterDataNodes($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveCharacterDataNodes2()
{
    $node = m::mock(\DOMNode::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node->hasChildNodes()) == true (line 153)
    // for (...) == true (line 154)
    // if (($child = $node->childNodes->item($i)) instanceof \DOMCharacterData) == false (line 155)
    // for (...) == false (line 154)

    $actual = $this->xml->removeCharacterDataNodes($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemoveCharacterDataNodes3()
{
    $node = m::mock(\DOMNode::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node->hasChildNodes()) == true (line 153)
    // for (...) == true (line 154)
    // if (($child = $node->childNodes->item($i)) instanceof \DOMCharacterData) == true (line 155)
    // for (...) == false (line 154)

    $actual = $this->xml->removeCharacterDataNodes($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepareString0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->xml->prepareString($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable0()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == false (line 198)
    // Case 'object' == false (line 222)
    // Case 'boolean' == false (line 243)
    // Case 'integer' == false (line 248)
    // Case 'double' == false (line 249)
    // Case 'string' == false (line 250)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable1()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == false (line 198)
    // Case 'object' == false (line 222)
    // Case 'boolean' == false (line 243)
    // Case 'integer' == false (line 248)
    // Case 'double' == false (line 249)
    // Case 'string' == true (line 250)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable2()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == false (line 198)
    // Case 'object' == false (line 222)
    // Case 'boolean' == false (line 243)
    // Case 'integer' == false (line 248)
    // Case 'double' == true (line 249)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable3()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == false (line 198)
    // Case 'object' == false (line 222)
    // Case 'boolean' == false (line 243)
    // Case 'integer' == true (line 248)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable4()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == false (line 198)
    // Case 'object' == false (line 222)
    // Case 'boolean' == true (line 243)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable5()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == false (line 198)
    // Case 'object' == true (line 222)
    // if ($element->hasChildNodes()) == false (line 225)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable6()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == false (line 198)
    // Case 'object' == true (line 222)
    // if ($element->hasChildNodes()) == true (line 225)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable7()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == false (line 198)
    // Case 'object' == true (line 222)
    // if ($element->hasChildNodes()) == true (line 225)
    // if ($argument instanceof \DOMElement) == false (line 230)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable8()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == false (line 198)
    // Case 'object' == true (line 222)
    // if ($element->hasChildNodes()) == true (line 225)
    // if ($argument instanceof \DOMElement) == true (line 230)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable9()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == true (line 198)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable10()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == true (line 198)
    // if (!$entry instanceof \DOMElement || $entry->tagName !== 'element') == false (line 202)
    // if ($item instanceof \DOMText) == false (line 207)
    // if ($entry->hasAttribute('key')) == false (line 213)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable11()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == true (line 198)
    // if (!$entry instanceof \DOMElement || $entry->tagName !== 'element') == false (line 202)
    // if ($item instanceof \DOMText) == false (line 207)
    // if ($entry->hasAttribute('key')) == true (line 213)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable12()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == true (line 198)
    // if (!$entry instanceof \DOMElement || $entry->tagName !== 'element') == false (line 202)
    // if ($item instanceof \DOMText) == true (line 207)
    // if ($entry->hasAttribute('key')) == false (line 213)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable13()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == true (line 198)
    // if (!$entry instanceof \DOMElement || $entry->tagName !== 'element') == false (line 202)
    // if ($item instanceof \DOMText) == true (line 207)
    // if ($entry->hasAttribute('key')) == true (line 213)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXmlToVariable14()
{
    $element = m::mock(\DOMElement::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($element->tagName) (line 197)
    // Case 'array' == true (line 198)
    // if (!$entry instanceof \DOMElement || $entry->tagName !== 'element') == true (line 202)

    $actual = $this->xml->xmlToVariable($element);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
