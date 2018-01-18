<?php

namespace tests;

use Mockery as m;
use SimplePie_Content_Type_Sniffer;

class SimplePie_Content_Type_SnifferTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_file = null;
/**
* @var \SimplePie_Content_Type_Sniffer
*/
protected $simplePie_Content_Type_Sniffer;

public function setUp()
{
    parent::setUp();

    $this->_file = null;
    $this->simplePie_Content_Type_Sniffer = new \SimplePie_Content_Type_Sniffer($this->_file);
}

public function testGet_type0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == false (line 86)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == false (line 88)
    // if (($pos = \strpos($this->file->headers['content-type'], ';')) !== \false) == false (line 97)
    // if ($official === 'unknown/unknown' || $official === 'application/unknown') == false (line 107)
    // if (\substr($official, -4) === '+xml' || $official === 'text/xml' || $official === 'application/xml') == false (line 112)
    // if (\substr($official, 0, 6) === 'image/') == false (line 118)
    // if ($official === 'text/html') == false (line 129)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == false (line 88)
    // if (($pos = \strpos($this->file->headers['content-type'], ';')) !== \false) == false (line 97)
    // if ($official === 'unknown/unknown' || $official === 'application/unknown') == false (line 107)
    // if (\substr($official, -4) === '+xml' || $official === 'text/xml' || $official === 'application/xml') == false (line 112)
    // if (\substr($official, 0, 6) === 'image/') == false (line 118)
    // if ($official === 'text/html') == true (line 129)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == false (line 88)
    // if (($pos = \strpos($this->file->headers['content-type'], ';')) !== \false) == false (line 97)
    // if ($official === 'unknown/unknown' || $official === 'application/unknown') == false (line 107)
    // if (\substr($official, -4) === '+xml' || $official === 'text/xml' || $official === 'application/xml') == false (line 112)
    // if (\substr($official, 0, 6) === 'image/') == true (line 118)
    // if ($return = $this->image()) == false (line 120)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == false (line 88)
    // if (($pos = \strpos($this->file->headers['content-type'], ';')) !== \false) == false (line 97)
    // if ($official === 'unknown/unknown' || $official === 'application/unknown') == false (line 107)
    // if (\substr($official, -4) === '+xml' || $official === 'text/xml' || $official === 'application/xml') == false (line 112)
    // if (\substr($official, 0, 6) === 'image/') == true (line 118)
    // if ($return = $this->image()) == true (line 120)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == false (line 88)
    // if (($pos = \strpos($this->file->headers['content-type'], ';')) !== \false) == false (line 97)
    // if ($official === 'unknown/unknown' || $official === 'application/unknown') == false (line 107)
    // if (\substr($official, -4) === '+xml' || $official === 'text/xml' || $official === 'application/xml') == true (line 112)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == false (line 88)
    // if (($pos = \strpos($this->file->headers['content-type'], ';')) !== \false) == false (line 97)
    // if ($official === 'unknown/unknown' || $official === 'application/unknown') == true (line 107)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == false (line 88)
    // if (($pos = \strpos($this->file->headers['content-type'], ';')) !== \false) == true (line 97)
    // if ($official === 'unknown/unknown' || $official === 'application/unknown') == false (line 107)
    // if (\substr($official, -4) === '+xml' || $official === 'text/xml' || $official === 'application/xml') == false (line 112)
    // if (\substr($official, 0, 6) === 'image/') == false (line 118)
    // if ($official === 'text/html') == false (line 129)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == false (line 88)
    // if (($pos = \strpos($this->file->headers['content-type'], ';')) !== \false) == true (line 97)
    // if ($official === 'unknown/unknown' || $official === 'application/unknown') == false (line 107)
    // if (\substr($official, -4) === '+xml' || $official === 'text/xml' || $official === 'application/xml') == false (line 112)
    // if (\substr($official, 0, 6) === 'image/') == false (line 118)
    // if ($official === 'text/html') == true (line 129)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == false (line 88)
    // if (($pos = \strpos($this->file->headers['content-type'], ';')) !== \false) == true (line 97)
    // if ($official === 'unknown/unknown' || $official === 'application/unknown') == false (line 107)
    // if (\substr($official, -4) === '+xml' || $official === 'text/xml' || $official === 'application/xml') == false (line 112)
    // if (\substr($official, 0, 6) === 'image/') == true (line 118)
    // if ($return = $this->image()) == false (line 120)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == false (line 88)
    // if (($pos = \strpos($this->file->headers['content-type'], ';')) !== \false) == true (line 97)
    // if ($official === 'unknown/unknown' || $official === 'application/unknown') == false (line 107)
    // if (\substr($official, -4) === '+xml' || $official === 'text/xml' || $official === 'application/xml') == false (line 112)
    // if (\substr($official, 0, 6) === 'image/') == true (line 118)
    // if ($return = $this->image()) == true (line 120)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == false (line 88)
    // if (($pos = \strpos($this->file->headers['content-type'], ';')) !== \false) == true (line 97)
    // if ($official === 'unknown/unknown' || $official === 'application/unknown') == false (line 107)
    // if (\substr($official, -4) === '+xml' || $official === 'text/xml' || $official === 'application/xml') == true (line 112)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == false (line 88)
    // if (($pos = \strpos($this->file->headers['content-type'], ';')) !== \false) == true (line 97)
    // if ($official === 'unknown/unknown' || $official === 'application/unknown') == true (line 107)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_type13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->file->headers['content-type'])) == true (line 86)
    // if (!isset($this->file->headers['content-encoding']) && ($this->file->headers['content-type'] === 'text/plain' || $this->file->headers['content-type'] === 'text/plain; charset=ISO-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=iso-8859-1' || $this->file->headers['content-type'] === 'text/plain; charset=UTF-8')) == true (line 88)

    $actual = $this->simplePie_Content_Type_Sniffer->get_type();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testText_or_binary0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->file->body, 0, 2) === "þÿ" || \substr($this->file->body, 0, 2) === "ÿþ" || \substr($this->file->body, 0, 4) === "\0\0þÿ" || \substr($this->file->body, 0, 3) === "ï»¿") == false (line 151)
    // if (\preg_match('/[\\x00-\\x08\\x0E-\\x1A\\x1C-\\x1F]/', $this->file->body)) == false (line 158)

    $actual = $this->simplePie_Content_Type_Sniffer->text_or_binary();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testText_or_binary1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->file->body, 0, 2) === "þÿ" || \substr($this->file->body, 0, 2) === "ÿþ" || \substr($this->file->body, 0, 4) === "\0\0þÿ" || \substr($this->file->body, 0, 3) === "ï»¿") == false (line 151)
    // if (\preg_match('/[\\x00-\\x08\\x0E-\\x1A\\x1C-\\x1F]/', $this->file->body)) == true (line 158)

    $actual = $this->simplePie_Content_Type_Sniffer->text_or_binary();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testText_or_binary2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->file->body, 0, 2) === "þÿ" || \substr($this->file->body, 0, 2) === "ÿþ" || \substr($this->file->body, 0, 4) === "\0\0þÿ" || \substr($this->file->body, 0, 3) === "ï»¿") == true (line 151)

    $actual = $this->simplePie_Content_Type_Sniffer->text_or_binary();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnknown0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtolower(\substr($this->file->body, $ws, 14)) === '<!doctype html' || \strtolower(\substr($this->file->body, $ws, 5)) === '<html' || \strtolower(\substr($this->file->body, $ws, 7)) === '<script') == false (line 176)
    // if (\substr($this->file->body, 0, 5) === '%PDF-') == false (line 182)
    // if (\substr($this->file->body, 0, 11) === '%!PS-Adobe-') == false (line 186)
    // if (\substr($this->file->body, 0, 6) === 'GIF87a' || \substr($this->file->body, 0, 6) === 'GIF89a') == false (line 190)
    // if (\substr($this->file->body, 0, 8) === "‰PNG\r\n\32\n") == false (line 195)
    // if (\substr($this->file->body, 0, 3) === "ÿØÿ") == false (line 199)
    // if (\substr($this->file->body, 0, 2) === "BM") == false (line 203)
    // if (\substr($this->file->body, 0, 4) === "\0\0\1\0") == false (line 207)

    $actual = $this->simplePie_Content_Type_Sniffer->unknown();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnknown1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtolower(\substr($this->file->body, $ws, 14)) === '<!doctype html' || \strtolower(\substr($this->file->body, $ws, 5)) === '<html' || \strtolower(\substr($this->file->body, $ws, 7)) === '<script') == false (line 176)
    // if (\substr($this->file->body, 0, 5) === '%PDF-') == false (line 182)
    // if (\substr($this->file->body, 0, 11) === '%!PS-Adobe-') == false (line 186)
    // if (\substr($this->file->body, 0, 6) === 'GIF87a' || \substr($this->file->body, 0, 6) === 'GIF89a') == false (line 190)
    // if (\substr($this->file->body, 0, 8) === "‰PNG\r\n\32\n") == false (line 195)
    // if (\substr($this->file->body, 0, 3) === "ÿØÿ") == false (line 199)
    // if (\substr($this->file->body, 0, 2) === "BM") == false (line 203)
    // if (\substr($this->file->body, 0, 4) === "\0\0\1\0") == true (line 207)

    $actual = $this->simplePie_Content_Type_Sniffer->unknown();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnknown2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtolower(\substr($this->file->body, $ws, 14)) === '<!doctype html' || \strtolower(\substr($this->file->body, $ws, 5)) === '<html' || \strtolower(\substr($this->file->body, $ws, 7)) === '<script') == false (line 176)
    // if (\substr($this->file->body, 0, 5) === '%PDF-') == false (line 182)
    // if (\substr($this->file->body, 0, 11) === '%!PS-Adobe-') == false (line 186)
    // if (\substr($this->file->body, 0, 6) === 'GIF87a' || \substr($this->file->body, 0, 6) === 'GIF89a') == false (line 190)
    // if (\substr($this->file->body, 0, 8) === "‰PNG\r\n\32\n") == false (line 195)
    // if (\substr($this->file->body, 0, 3) === "ÿØÿ") == false (line 199)
    // if (\substr($this->file->body, 0, 2) === "BM") == true (line 203)

    $actual = $this->simplePie_Content_Type_Sniffer->unknown();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnknown3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtolower(\substr($this->file->body, $ws, 14)) === '<!doctype html' || \strtolower(\substr($this->file->body, $ws, 5)) === '<html' || \strtolower(\substr($this->file->body, $ws, 7)) === '<script') == false (line 176)
    // if (\substr($this->file->body, 0, 5) === '%PDF-') == false (line 182)
    // if (\substr($this->file->body, 0, 11) === '%!PS-Adobe-') == false (line 186)
    // if (\substr($this->file->body, 0, 6) === 'GIF87a' || \substr($this->file->body, 0, 6) === 'GIF89a') == false (line 190)
    // if (\substr($this->file->body, 0, 8) === "‰PNG\r\n\32\n") == false (line 195)
    // if (\substr($this->file->body, 0, 3) === "ÿØÿ") == true (line 199)

    $actual = $this->simplePie_Content_Type_Sniffer->unknown();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnknown4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtolower(\substr($this->file->body, $ws, 14)) === '<!doctype html' || \strtolower(\substr($this->file->body, $ws, 5)) === '<html' || \strtolower(\substr($this->file->body, $ws, 7)) === '<script') == false (line 176)
    // if (\substr($this->file->body, 0, 5) === '%PDF-') == false (line 182)
    // if (\substr($this->file->body, 0, 11) === '%!PS-Adobe-') == false (line 186)
    // if (\substr($this->file->body, 0, 6) === 'GIF87a' || \substr($this->file->body, 0, 6) === 'GIF89a') == false (line 190)
    // if (\substr($this->file->body, 0, 8) === "‰PNG\r\n\32\n") == true (line 195)

    $actual = $this->simplePie_Content_Type_Sniffer->unknown();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnknown5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtolower(\substr($this->file->body, $ws, 14)) === '<!doctype html' || \strtolower(\substr($this->file->body, $ws, 5)) === '<html' || \strtolower(\substr($this->file->body, $ws, 7)) === '<script') == false (line 176)
    // if (\substr($this->file->body, 0, 5) === '%PDF-') == false (line 182)
    // if (\substr($this->file->body, 0, 11) === '%!PS-Adobe-') == false (line 186)
    // if (\substr($this->file->body, 0, 6) === 'GIF87a' || \substr($this->file->body, 0, 6) === 'GIF89a') == true (line 190)

    $actual = $this->simplePie_Content_Type_Sniffer->unknown();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnknown6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtolower(\substr($this->file->body, $ws, 14)) === '<!doctype html' || \strtolower(\substr($this->file->body, $ws, 5)) === '<html' || \strtolower(\substr($this->file->body, $ws, 7)) === '<script') == false (line 176)
    // if (\substr($this->file->body, 0, 5) === '%PDF-') == false (line 182)
    // if (\substr($this->file->body, 0, 11) === '%!PS-Adobe-') == true (line 186)

    $actual = $this->simplePie_Content_Type_Sniffer->unknown();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnknown7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtolower(\substr($this->file->body, $ws, 14)) === '<!doctype html' || \strtolower(\substr($this->file->body, $ws, 5)) === '<html' || \strtolower(\substr($this->file->body, $ws, 7)) === '<script') == false (line 176)
    // if (\substr($this->file->body, 0, 5) === '%PDF-') == true (line 182)

    $actual = $this->simplePie_Content_Type_Sniffer->unknown();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnknown8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtolower(\substr($this->file->body, $ws, 14)) === '<!doctype html' || \strtolower(\substr($this->file->body, $ws, 5)) === '<html' || \strtolower(\substr($this->file->body, $ws, 7)) === '<script') == true (line 176)

    $actual = $this->simplePie_Content_Type_Sniffer->unknown();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->file->body, 0, 6) === 'GIF87a' || \substr($this->file->body, 0, 6) === 'GIF89a') == false (line 224)
    // if (\substr($this->file->body, 0, 8) === "‰PNG\r\n\32\n") == false (line 229)
    // if (\substr($this->file->body, 0, 3) === "ÿØÿ") == false (line 233)
    // if (\substr($this->file->body, 0, 2) === "BM") == false (line 237)
    // if (\substr($this->file->body, 0, 4) === "\0\0\1\0") == false (line 241)

    $actual = $this->simplePie_Content_Type_Sniffer->image();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->file->body, 0, 6) === 'GIF87a' || \substr($this->file->body, 0, 6) === 'GIF89a') == false (line 224)
    // if (\substr($this->file->body, 0, 8) === "‰PNG\r\n\32\n") == false (line 229)
    // if (\substr($this->file->body, 0, 3) === "ÿØÿ") == false (line 233)
    // if (\substr($this->file->body, 0, 2) === "BM") == false (line 237)
    // if (\substr($this->file->body, 0, 4) === "\0\0\1\0") == true (line 241)

    $actual = $this->simplePie_Content_Type_Sniffer->image();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->file->body, 0, 6) === 'GIF87a' || \substr($this->file->body, 0, 6) === 'GIF89a') == false (line 224)
    // if (\substr($this->file->body, 0, 8) === "‰PNG\r\n\32\n") == false (line 229)
    // if (\substr($this->file->body, 0, 3) === "ÿØÿ") == false (line 233)
    // if (\substr($this->file->body, 0, 2) === "BM") == true (line 237)

    $actual = $this->simplePie_Content_Type_Sniffer->image();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->file->body, 0, 6) === 'GIF87a' || \substr($this->file->body, 0, 6) === 'GIF89a') == false (line 224)
    // if (\substr($this->file->body, 0, 8) === "‰PNG\r\n\32\n") == false (line 229)
    // if (\substr($this->file->body, 0, 3) === "ÿØÿ") == true (line 233)

    $actual = $this->simplePie_Content_Type_Sniffer->image();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->file->body, 0, 6) === 'GIF87a' || \substr($this->file->body, 0, 6) === 'GIF89a') == false (line 224)
    // if (\substr($this->file->body, 0, 8) === "‰PNG\r\n\32\n") == true (line 229)

    $actual = $this->simplePie_Content_Type_Sniffer->image();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImage5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($this->file->body, 0, 6) === 'GIF87a' || \substr($this->file->body, 0, 6) === 'GIF89a') == true (line 224)

    $actual = $this->simplePie_Content_Type_Sniffer->image();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == false (line 261)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == false (line 266)
    // Case "\r" == false (line 267)
    // Case " " == false (line 268)
    // Case '<' == false (line 272)
    // Default (line 276)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == false (line 266)
    // Case "\r" == false (line 267)
    // Case " " == false (line 268)
    // Case '<' == true (line 272)
    // if (\substr($this->file->body, $pos, 3) === '!--') == false (line 280)
    // if (\substr($this->file->body, $pos, 1) === '!') == false (line 292)
    // if (\substr($this->file->body, $pos, 1) === '?') == false (line 303)
    // if (\substr($this->file->body, $pos, 3) === 'rss' || \substr($this->file->body, $pos, 7) === 'rdf:RDF') == false (line 314)
    // if (\substr($this->file->body, $pos, 4) === 'feed') == false (line 319)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == false (line 266)
    // Case "\r" == false (line 267)
    // Case " " == false (line 268)
    // Case '<' == true (line 272)
    // if (\substr($this->file->body, $pos, 3) === '!--') == false (line 280)
    // if (\substr($this->file->body, $pos, 1) === '!') == false (line 292)
    // if (\substr($this->file->body, $pos, 1) === '?') == false (line 303)
    // if (\substr($this->file->body, $pos, 3) === 'rss' || \substr($this->file->body, $pos, 7) === 'rdf:RDF') == false (line 314)
    // if (\substr($this->file->body, $pos, 4) === 'feed') == true (line 319)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == false (line 266)
    // Case "\r" == false (line 267)
    // Case " " == false (line 268)
    // Case '<' == true (line 272)
    // if (\substr($this->file->body, $pos, 3) === '!--') == false (line 280)
    // if (\substr($this->file->body, $pos, 1) === '!') == false (line 292)
    // if (\substr($this->file->body, $pos, 1) === '?') == false (line 303)
    // if (\substr($this->file->body, $pos, 3) === 'rss' || \substr($this->file->body, $pos, 7) === 'rdf:RDF') == true (line 314)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == false (line 266)
    // Case "\r" == false (line 267)
    // Case " " == false (line 268)
    // Case '<' == true (line 272)
    // if (\substr($this->file->body, $pos, 3) === '!--') == false (line 280)
    // if (\substr($this->file->body, $pos, 1) === '!') == false (line 292)
    // if (\substr($this->file->body, $pos, 1) === '?') == true (line 303)
    // if ($pos < $len && ($pos = \strpos($this->file->body, '?>', $pos)) !== \false) == false (line 305)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == false (line 266)
    // Case "\r" == false (line 267)
    // Case " " == false (line 268)
    // Case '<' == true (line 272)
    // if (\substr($this->file->body, $pos, 3) === '!--') == false (line 280)
    // if (\substr($this->file->body, $pos, 1) === '!') == false (line 292)
    // if (\substr($this->file->body, $pos, 1) === '?') == true (line 303)
    // if ($pos < $len && ($pos = \strpos($this->file->body, '?>', $pos)) !== \false) == true (line 305)
    // while ($pos < $len) == false (line 261)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == false (line 266)
    // Case "\r" == false (line 267)
    // Case " " == false (line 268)
    // Case '<' == true (line 272)
    // if (\substr($this->file->body, $pos, 3) === '!--') == false (line 280)
    // if (\substr($this->file->body, $pos, 1) === '!') == true (line 292)
    // if ($pos < $len && ($pos = \strpos($this->file->body, '>', $pos)) !== \false) == false (line 294)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == false (line 266)
    // Case "\r" == false (line 267)
    // Case " " == false (line 268)
    // Case '<' == true (line 272)
    // if (\substr($this->file->body, $pos, 3) === '!--') == false (line 280)
    // if (\substr($this->file->body, $pos, 1) === '!') == true (line 292)
    // if ($pos < $len && ($pos = \strpos($this->file->body, '>', $pos)) !== \false) == true (line 294)
    // while ($pos < $len) == false (line 261)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == false (line 266)
    // Case "\r" == false (line 267)
    // Case " " == false (line 268)
    // Case '<' == true (line 272)
    // if (\substr($this->file->body, $pos, 3) === '!--') == true (line 280)
    // if ($pos < $len && ($pos = \strpos($this->file->body, '-->', $pos)) !== \false) == false (line 283)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == false (line 266)
    // Case "\r" == false (line 267)
    // Case " " == false (line 268)
    // Case '<' == true (line 272)
    // if (\substr($this->file->body, $pos, 3) === '!--') == true (line 280)
    // if ($pos < $len && ($pos = \strpos($this->file->body, '-->', $pos)) !== \false) == true (line 283)
    // while ($pos < $len) == false (line 261)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == false (line 266)
    // Case "\r" == false (line 267)
    // Case " " == true (line 268)
    // while ($pos < $len) == false (line 261)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == false (line 266)
    // Case "\r" == true (line 267)
    // while ($pos < $len) == false (line 261)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == false (line 265)
    // Case "\n" == true (line 266)
    // while ($pos < $len) == false (line 261)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFeed_or_html14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $len) == true (line 261)
    // switch ($this->file->body[$pos]) (line 263)
    // Case "\t" == true (line 265)
    // while ($pos < $len) == false (line 261)

    $actual = $this->simplePie_Content_Type_Sniffer->feed_or_html();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
