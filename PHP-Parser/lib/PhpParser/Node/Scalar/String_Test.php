<?php

namespace tests\PhpParser\Node\Scalar;

use Mockery as m;
use PhpParser\Node\Scalar\String_;

class String_Test extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_value = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Scalar\String_
*/
protected $string_;

public function setUp()
{
    parent::setUp();

    $this->_value = null;
    $this->_attributes = [];
    $this->string_ = new \PhpParser\Node\Scalar\String_($this->_value, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->string_->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse0()
{
    $str = m::mock('UntypedParameter_str_');
    $parseUnicodeEscape = m::mock('UntypedParameter_parseUnicodeEscape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('b' === $str[0] || 'B' === $str[0]) == false (line 57)
    // if ('\'' === $str[$bLength]) == false (line 61)

    $actual = $this->string_->parse($str, $parseUnicodeEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $str = m::mock('UntypedParameter_str_');
    $parseUnicodeEscape = m::mock('UntypedParameter_parseUnicodeEscape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('b' === $str[0] || 'B' === $str[0]) == false (line 57)
    // if ('\'' === $str[$bLength]) == true (line 61)

    $actual = $this->string_->parse($str, $parseUnicodeEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $str = m::mock('UntypedParameter_str_');
    $parseUnicodeEscape = m::mock('UntypedParameter_parseUnicodeEscape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('b' === $str[0] || 'B' === $str[0]) == true (line 57)
    // if ('\'' === $str[$bLength]) == false (line 61)

    $actual = $this->string_->parse($str, $parseUnicodeEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse3()
{
    $str = m::mock('UntypedParameter_str_');
    $parseUnicodeEscape = m::mock('UntypedParameter_parseUnicodeEscape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('b' === $str[0] || 'B' === $str[0]) == true (line 57)
    // if ('\'' === $str[$bLength]) == true (line 61)

    $actual = $this->string_->parse($str, $parseUnicodeEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseEscapeSequences0()
{
    $str = m::mock('UntypedParameter_str_');
    $quote = m::mock('UntypedParameter_quote_');
    $parseUnicodeEscape = m::mock('UntypedParameter_parseUnicodeEscape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $quote) == false (line 86)
    // if ($parseUnicodeEscape) == false (line 91)

    $actual = $this->string_->parseEscapeSequences($str, $quote, $parseUnicodeEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseEscapeSequences1()
{
    $str = m::mock('UntypedParameter_str_');
    $quote = m::mock('UntypedParameter_quote_');
    $parseUnicodeEscape = m::mock('UntypedParameter_parseUnicodeEscape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $quote) == false (line 86)
    // if ($parseUnicodeEscape) == true (line 91)

    $actual = $this->string_->parseEscapeSequences($str, $quote, $parseUnicodeEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseEscapeSequences2()
{
    $str = m::mock('UntypedParameter_str_');
    $quote = m::mock('UntypedParameter_quote_');
    $parseUnicodeEscape = m::mock('UntypedParameter_parseUnicodeEscape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $quote) == true (line 86)
    // if ($parseUnicodeEscape) == false (line 91)

    $actual = $this->string_->parseEscapeSequences($str, $quote, $parseUnicodeEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseEscapeSequences3()
{
    $str = m::mock('UntypedParameter_str_');
    $quote = m::mock('UntypedParameter_quote_');
    $parseUnicodeEscape = m::mock('UntypedParameter_parseUnicodeEscape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $quote) == true (line 86)
    // if ($parseUnicodeEscape) == true (line 91)

    $actual = $this->string_->parseEscapeSequences($str, $quote, $parseUnicodeEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseDocString0()
{
    $startToken = m::mock('UntypedParameter_startToken_');
    $str = m::mock('UntypedParameter_str_');
    $parseUnicodeEscape = m::mock('UntypedParameter_parseUnicodeEscape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($startToken, '\'')) == false (line 154)

    $actual = $this->string_->parseDocString($startToken, $str, $parseUnicodeEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseDocString1()
{
    $startToken = m::mock('UntypedParameter_startToken_');
    $str = m::mock('UntypedParameter_str_');
    $parseUnicodeEscape = m::mock('UntypedParameter_parseUnicodeEscape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpos($startToken, '\'')) == true (line 154)

    $actual = $this->string_->parseDocString($startToken, $str, $parseUnicodeEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->string_->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
