<?php

namespace tests;

use IXR_Message;
use Mockery as m;

class IXR_MessageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var \IXR_Message
*/
protected $iXR_Message;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->iXR_Message = new \IXR_Message($this->_message);
}

public function testIXR_Message0()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Message->IXR_Message($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == false (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == false (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == false (line 122)
    // PhpParser\Node\Stmt\Do_ == false (line 113)
    // if ($this->messageType == 'fault') == false (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == false (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == false (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == false (line 122)
    // PhpParser\Node\Stmt\Do_ == false (line 113)
    // if ($this->messageType == 'fault') == true (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == false (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == false (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == true (line 122)
    // if ($this->messageType == 'fault') == false (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == false (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == false (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == true (line 122)
    // if ($this->messageType == 'fault') == true (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == false (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == false (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == true (line 119)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == false (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == true (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == false (line 122)
    // PhpParser\Node\Stmt\Do_ == false (line 113)
    // if ($this->messageType == 'fault') == false (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == false (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == true (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == false (line 122)
    // PhpParser\Node\Stmt\Do_ == false (line 113)
    // if ($this->messageType == 'fault') == true (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == false (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == true (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == true (line 122)
    // if ($this->messageType == 'fault') == false (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == false (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == true (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == true (line 122)
    // if ($this->messageType == 'fault') == true (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == false (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == true (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == true (line 119)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == false (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == true (line 88)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == true (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == false (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == false (line 122)
    // PhpParser\Node\Stmt\Do_ == false (line 113)
    // if ($this->messageType == 'fault') == false (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == true (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == false (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == false (line 122)
    // PhpParser\Node\Stmt\Do_ == false (line 113)
    // if ($this->messageType == 'fault') == true (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == true (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == false (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == true (line 122)
    // if ($this->messageType == 'fault') == false (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == true (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == false (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == true (line 122)
    // if ($this->messageType == 'fault') == true (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == true (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == false (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == true (line 119)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == true (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == true (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == false (line 122)
    // PhpParser\Node\Stmt\Do_ == false (line 113)
    // if ($this->messageType == 'fault') == false (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == true (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == true (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == false (line 122)
    // PhpParser\Node\Stmt\Do_ == false (line 113)
    // if ($this->messageType == 'fault') == true (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == true (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == true (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == true (line 122)
    // if ($this->messageType == 'fault') == false (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == true (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == true (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == false (line 119)
    // if ($final) == true (line 122)
    // if ($this->messageType == 'fault') == true (line 129)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == true (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == false (line 88)
    // if (\strlen($this->message) <= $chunk_size) == true (line 114)
    // if (!\xml_parse($this->_parser, $part, $final)) == true (line 119)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == false (line 72)
    // if (\function_exists('apply_filters')) == true (line 78)
    // if ($element_limit && 2 * $element_limit < \substr_count($this->message, '<')) == true (line 88)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == false (line 69)
    // if (!\in_array($root_tag, array('<methodCall', '<methodResponse', '<fault'))) == true (line 72)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == false (line 63)
    // if ('<!DOCTYPE' === \strtoupper($root_tag)) == true (line 69)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == false (line 56)
    // if ('' == $this->message) == true (line 63)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == false (line 47)
    // if ('' == $this->message) == true (line 56)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create')) == true (line 47)

    $actual = $this->iXR_Message->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_open0()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 140)
    // Case 'methodCall' == false (line 141)
    // Case 'methodResponse' == false (line 142)
    // Case 'fault' == false (line 143)
    // Case 'data' == false (line 147)
    // Case 'struct' == false (line 151)

    $actual = $this->iXR_Message->tag_open($parser, $tag, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_open1()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 140)
    // Case 'methodCall' == false (line 141)
    // Case 'methodResponse' == false (line 142)
    // Case 'fault' == false (line 143)
    // Case 'data' == false (line 147)
    // Case 'struct' == true (line 151)

    $actual = $this->iXR_Message->tag_open($parser, $tag, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_open2()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 140)
    // Case 'methodCall' == false (line 141)
    // Case 'methodResponse' == false (line 142)
    // Case 'fault' == false (line 143)
    // Case 'data' == true (line 147)

    $actual = $this->iXR_Message->tag_open($parser, $tag, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_open3()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 140)
    // Case 'methodCall' == false (line 141)
    // Case 'methodResponse' == false (line 142)
    // Case 'fault' == true (line 143)

    $actual = $this->iXR_Message->tag_open($parser, $tag, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_open4()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 140)
    // Case 'methodCall' == false (line 141)
    // Case 'methodResponse' == true (line 142)

    $actual = $this->iXR_Message->tag_open($parser, $tag, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_open5()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 140)
    // Case 'methodCall' == true (line 141)

    $actual = $this->iXR_Message->tag_open($parser, $tag, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCdata0()
{
    $parser = m::mock('UntypedParameter_parser_');
    $cdata = m::mock('UntypedParameter_cdata_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Message->cdata($parser, $cdata);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close0()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == false (line 206)
    // Case 'name' == false (line 209)
    // Case 'methodName' == false (line 212)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close1()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == false (line 206)
    // Case 'name' == false (line 209)
    // Case 'methodName' == false (line 212)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close2()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == false (line 206)
    // Case 'name' == false (line 209)
    // Case 'methodName' == false (line 212)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close3()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == false (line 206)
    // Case 'name' == false (line 209)
    // Case 'methodName' == false (line 212)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close4()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == false (line 206)
    // Case 'name' == false (line 209)
    // Case 'methodName' == true (line 212)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close5()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == false (line 206)
    // Case 'name' == false (line 209)
    // Case 'methodName' == true (line 212)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close6()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == false (line 206)
    // Case 'name' == false (line 209)
    // Case 'methodName' == true (line 212)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close7()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == false (line 206)
    // Case 'name' == false (line 209)
    // Case 'methodName' == true (line 212)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close8()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == false (line 206)
    // Case 'name' == true (line 209)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close9()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == false (line 206)
    // Case 'name' == true (line 209)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close10()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == false (line 206)
    // Case 'name' == true (line 209)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close11()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == false (line 206)
    // Case 'name' == true (line 209)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close12()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == true (line 206)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close13()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == true (line 206)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close14()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == true (line 206)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close15()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == false (line 201)
    // Case 'member' == true (line 206)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close16()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == true (line 201)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close17()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == true (line 201)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close18()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == true (line 201)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close19()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == false (line 200)
    // Case 'struct' == true (line 201)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close20()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == true (line 200)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close21()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == true (line 200)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close22()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == true (line 200)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close23()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == false (line 195)
    // Case 'data' == true (line 200)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close24()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == true (line 195)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close25()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == true (line 195)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close26()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == true (line 195)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close27()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == false (line 191)
    // Case 'base64' == true (line 195)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close28()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == true (line 191)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close29()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == true (line 191)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close30()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == true (line 191)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close31()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == false (line 184)
    // Case 'boolean' == true (line 191)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close32()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == true (line 184)
    // if (\trim($this->_currentTagContents) != '') == false (line 186)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close33()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == true (line 184)
    // if (\trim($this->_currentTagContents) != '') == false (line 186)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close34()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == true (line 184)
    // if (\trim($this->_currentTagContents) != '') == false (line 186)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close35()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == true (line 184)
    // if (\trim($this->_currentTagContents) != '') == false (line 186)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close36()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == true (line 184)
    // if (\trim($this->_currentTagContents) != '') == true (line 186)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close37()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == true (line 184)
    // if (\trim($this->_currentTagContents) != '') == true (line 186)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close38()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == true (line 184)
    // if (\trim($this->_currentTagContents) != '') == true (line 186)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close39()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == false (line 180)
    // Case 'value' == true (line 184)
    // if (\trim($this->_currentTagContents) != '') == true (line 186)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close40()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == true (line 180)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close41()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == true (line 180)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close42()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == true (line 180)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close43()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == false (line 176)
    // Case 'dateTime.iso8601' == true (line 180)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close44()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == true (line 176)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close45()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == true (line 176)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close46()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == true (line 176)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close47()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == false (line 172)
    // Case 'string' == true (line 176)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close48()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == true (line 172)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close49()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == true (line 172)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close50()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == true (line 172)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close51()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == false (line 168)
    // Case 'double' == true (line 172)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close52()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == true (line 168)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close53()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == true (line 168)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close54()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == true (line 168)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close55()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == false (line 167)
    // Case 'i4' == true (line 168)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close56()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == true (line 167)
    // if ($valueFlag) == false (line 217)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close57()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == true (line 167)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == false (line 218)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close58()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == true (line 167)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == false (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTag_close59()
{
    $parser = m::mock('UntypedParameter_parser_');
    $tag = m::mock('UntypedParameter_tag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($tag) (line 166)
    // Case 'int' == true (line 167)
    // if ($valueFlag) == true (line 217)
    // if (\count($this->_arraystructs) > 0) == true (line 218)
    // if ($this->_arraystructstypes[\count($this->_arraystructstypes) - 1] == 'struct') == true (line 220)

    $actual = $this->iXR_Message->tag_close($parser, $tag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
