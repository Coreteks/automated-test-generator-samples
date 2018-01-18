<?php

namespace tests;

use CI_Utf8;
use Mockery as m;

class CI_Utf8Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_charset = null;
/**
* @var \CI_Utf8
*/
protected $cI_Utf8;

public function setUp()
{
    parent::setUp();

    $this->_charset = null;
    $this->cI_Utf8 = new \CI_Utf8($this->_charset);
}

public function testClean_string0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_ascii($str) === \FALSE) == false (line 92)

    $actual = $this->cI_Utf8->clean_string($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean_string1()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_ascii($str) === \FALSE) == true (line 92)
    // if (\MB_ENABLED) == false (line 94)
    // if (\ICONV_ENABLED) == false (line 98)

    $actual = $this->cI_Utf8->clean_string($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean_string2()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_ascii($str) === \FALSE) == true (line 92)
    // if (\MB_ENABLED) == false (line 94)
    // if (\ICONV_ENABLED) == true (line 98)

    $actual = $this->cI_Utf8->clean_string($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean_string3()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->is_ascii($str) === \FALSE) == true (line 92)
    // if (\MB_ENABLED) == true (line 94)

    $actual = $this->cI_Utf8->clean_string($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSafe_ascii_for_xml0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Utf8->safe_ascii_for_xml($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvert_to_utf80()
{
    $str = m::mock('UntypedParameter_str_');
    $encoding = m::mock('UntypedParameter_encoding_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\MB_ENABLED) == false (line 137)
    // if (\ICONV_ENABLED) == false (line 141)

    $actual = $this->cI_Utf8->convert_to_utf8($str, $encoding);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvert_to_utf81()
{
    $str = m::mock('UntypedParameter_str_');
    $encoding = m::mock('UntypedParameter_encoding_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\MB_ENABLED) == false (line 137)
    // if (\ICONV_ENABLED) == true (line 141)

    $actual = $this->cI_Utf8->convert_to_utf8($str, $encoding);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConvert_to_utf82()
{
    $str = m::mock('UntypedParameter_str_');
    $encoding = m::mock('UntypedParameter_encoding_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\MB_ENABLED) == true (line 137)

    $actual = $this->cI_Utf8->convert_to_utf8($str, $encoding);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_ascii0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Utf8->is_ascii($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
