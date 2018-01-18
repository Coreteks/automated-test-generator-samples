<?php

namespace tests;

use Mockery as m;
use SimplePie_gzdecode;

class SimplePie_gzdecodeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_data = null;
/**
* @var \SimplePie_gzdecode
*/
protected $simplePie_gzdecode;

public function setUp()
{
    parent::setUp();

    $this->_data = null;
    $this->simplePie_gzdecode = new \SimplePie_gzdecode($this->_data);
}

public function test__set0()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->simplePie_gzdecode->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 204)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 299)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 279)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 299)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 259)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 299)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse49()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse50()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse51()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse52()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse53()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse54()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 279)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse55()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse56()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse57()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse58()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse59()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse60()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse61()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse62()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse63()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 299)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse64()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse65()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse66()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse67()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse68()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse69()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse70()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse71()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse72()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == false (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == true (line 248)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse73()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse74()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse75()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse76()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse77()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse78()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse79()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse80()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse81()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 299)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse82()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse83()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse84()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse85()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse86()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse87()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse88()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse89()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse90()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 279)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse91()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse92()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse93()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse94()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse95()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse96()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse97()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse98()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse99()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 299)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse100()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse101()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse102()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse103()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse104()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse105()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse106()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse107()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == false (line 241)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse108()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 259)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse109()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse110()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse111()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse112()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse113()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse114()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse115()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse116()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse117()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 299)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse118()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse119()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse120()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse121()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse122()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse123()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse124()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse125()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == false (line 272)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse126()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 279)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse127()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse128()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse129()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse130()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse131()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse132()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse133()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse134()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == false (line 292)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse135()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 299)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse136()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse137()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse138()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == false (line 312)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse139()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == false (line 316)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse140()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == false (line 322)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse141()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == false (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse142()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == false (line 338)
    // if (\sprintf('%u', \strlen($this->data) & 0xffffffff) !== \sprintf('%u', $isize)) == true (line 358)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse143()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == false (line 248)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 259)
    // if ($this->flags & 8) == true (line 272)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 279)
    // if ($this->flags & 16) == true (line 292)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 299)
    // if ($this->flags & 2) == true (line 312)
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 316)
    // if ((\crc32(\substr($this->compressed_data, 0, $this->position)) & 0xffff) === $crc) == true (line 322)
    // if (($this->data = \gzinflate(\substr($this->compressed_data, $this->position, -8))) === \false) == true (line 338)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse144()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == false (line 216)
    // if (\current(\unpack('S', "\0\1")) === 1) == true (line 227)
    // if ($this->flags & 4) == true (line 241)
    // if ($this->SI2 === "\0") == true (line 248)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse145()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == false (line 207)
    // if ($this->flags > 0x1f) == true (line 216)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse146()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->compressed_size >= $this->min_compressed_size) == true (line 204)
    // if (\substr($this->compressed_data, 0, 3) !== "\37‹\10") == true (line 207)

    $actual = $this->simplePie_gzdecode->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
