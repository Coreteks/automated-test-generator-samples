<?php

namespace tests;

use Mockery as m;
use WP_Http_Encoding;

class WP_Http_EncodingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Http_Encoding
*/
protected $wP_Http_Encoding;

public function setUp()
{
    parent::setUp();

    $this->wP_Http_Encoding = new \WP_Http_Encoding();
}

public function testCompress0()
{
    $raw = m::mock('UntypedParameter_raw_');
    $level = m::mock('UntypedParameter_level_');
    $supports = m::mock('UntypedParameter_supports_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Http_Encoding->compress($raw, $level, $supports);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecompress0()
{
    $compressed = m::mock('UntypedParameter_compressed_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($compressed)) == false (line 55)
    // if (\false !== ($decompressed = @\gzinflate($compressed))) == false (line 59)
    // if (\false !== ($decompressed = self::compatible_gzinflate($compressed))) == false (line 63)
    // if (\false !== ($decompressed = @\gzuncompress($compressed))) == false (line 67)
    // if (\function_exists('gzdecode')) == false (line 71)

    $actual = $this->wP_Http_Encoding->decompress($compressed, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecompress1()
{
    $compressed = m::mock('UntypedParameter_compressed_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($compressed)) == false (line 55)
    // if (\false !== ($decompressed = @\gzinflate($compressed))) == false (line 59)
    // if (\false !== ($decompressed = self::compatible_gzinflate($compressed))) == false (line 63)
    // if (\false !== ($decompressed = @\gzuncompress($compressed))) == false (line 67)
    // if (\function_exists('gzdecode')) == true (line 71)
    // if (\false !== $decompressed) == false (line 74)

    $actual = $this->wP_Http_Encoding->decompress($compressed, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecompress2()
{
    $compressed = m::mock('UntypedParameter_compressed_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($compressed)) == false (line 55)
    // if (\false !== ($decompressed = @\gzinflate($compressed))) == false (line 59)
    // if (\false !== ($decompressed = self::compatible_gzinflate($compressed))) == false (line 63)
    // if (\false !== ($decompressed = @\gzuncompress($compressed))) == false (line 67)
    // if (\function_exists('gzdecode')) == true (line 71)
    // if (\false !== $decompressed) == true (line 74)

    $actual = $this->wP_Http_Encoding->decompress($compressed, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecompress3()
{
    $compressed = m::mock('UntypedParameter_compressed_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($compressed)) == false (line 55)
    // if (\false !== ($decompressed = @\gzinflate($compressed))) == false (line 59)
    // if (\false !== ($decompressed = self::compatible_gzinflate($compressed))) == false (line 63)
    // if (\false !== ($decompressed = @\gzuncompress($compressed))) == true (line 67)

    $actual = $this->wP_Http_Encoding->decompress($compressed, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecompress4()
{
    $compressed = m::mock('UntypedParameter_compressed_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($compressed)) == false (line 55)
    // if (\false !== ($decompressed = @\gzinflate($compressed))) == false (line 59)
    // if (\false !== ($decompressed = self::compatible_gzinflate($compressed))) == true (line 63)

    $actual = $this->wP_Http_Encoding->decompress($compressed, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecompress5()
{
    $compressed = m::mock('UntypedParameter_compressed_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($compressed)) == false (line 55)
    // if (\false !== ($decompressed = @\gzinflate($compressed))) == true (line 59)

    $actual = $this->wP_Http_Encoding->decompress($compressed, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecompress6()
{
    $compressed = m::mock('UntypedParameter_compressed_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($compressed)) == true (line 55)

    $actual = $this->wP_Http_Encoding->decompress($compressed, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate0()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == false (line 107)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate1()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == false (line 107)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate2()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == false (line 110)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate3()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == false (line 110)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate4()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == false (line 110)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate5()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate6()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate7()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate8()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate9()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate10()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate11()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate12()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate13()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate14()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate15()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate16()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate17()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate18()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate19()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate20()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate21()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate22()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate23()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate24()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate25()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate26()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate27()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate28()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == false (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate29()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate30()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate31()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate32()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate33()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate34()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate35()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate36()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate37()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate38()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate39()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate40()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == false (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate41()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate42()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate43()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate44()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate45()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate46()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == false (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate47()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate48()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate49()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == false (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate50()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == false (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate51()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == false (line 126)
    // if (\false !== $decompressed) == true (line 133)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompatible_gzinflate52()
{
    $gzData = m::mock('UntypedParameter_gzData_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($gzData, 0, 3) == "\37‹\10") == true (line 107)
    // if ($flg > 0) == true (line 110)
    // if ($flg & 4) == true (line 111)
    // if ($flg & 8) == true (line 115)
    // if ($flg & 16) == true (line 118)
    // if ($flg & 2) == true (line 121)
    // if (\false !== $decompressed) == true (line 126)

    $actual = $this->wP_Http_Encoding->compatible_gzinflate($gzData);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding0()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == false (line 159)
    // if ($compression_enabled) == false (line 163)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding1()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == false (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding2()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == false (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding3()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == false (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding4()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == false (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding5()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == false (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding6()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == false (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding7()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == false (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding8()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == false (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding9()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == true (line 159)
    // if ($compression_enabled) == false (line 163)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding10()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == true (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding11()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == true (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding12()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == true (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding13()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == true (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding14()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == true (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding15()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == true (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding16()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == true (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding17()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == false (line 157)
    // if (isset($args['limit_response_size'])) == true (line 159)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding18()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == true (line 157)
    // if ($compression_enabled) == false (line 163)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding19()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == true (line 157)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding20()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == true (line 157)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding21()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == true (line 157)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding22()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == true (line 157)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding23()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == true (line 157)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding24()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == true (line 157)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding25()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == true (line 157)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding26()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == false (line 155)
    // if ($args['stream']) == true (line 157)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding27()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == true (line 155)
    // if ($compression_enabled) == false (line 163)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding28()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == true (line 155)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding29()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == true (line 155)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding30()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == true (line 155)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding31()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == true (line 155)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == false (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding32()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == true (line 155)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding33()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == true (line 155)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == false (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding34()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == true (line 155)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == false (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAccept_encoding35()
{
    $url = m::mock('UntypedParameter_url_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$args['decompress']) == true (line 155)
    // if ($compression_enabled) == true (line 163)
    // if (\function_exists('gzinflate')) == true (line 164)
    // if (\function_exists('gzuncompress')) == true (line 168)
    // if (\function_exists('gzdecode')) == true (line 172)

    $actual = $this->wP_Http_Encoding->accept_encoding($url, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_encoding0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Http_Encoding->content_encoding();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShould_decode0()
{
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($headers)) == false (line 216)
    // if (\is_string($headers)) == false (line 220)

    $actual = $this->wP_Http_Encoding->should_decode($headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShould_decode1()
{
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($headers)) == false (line 216)
    // if (\is_string($headers)) == true (line 220)

    $actual = $this->wP_Http_Encoding->should_decode($headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShould_decode2()
{
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($headers)) == true (line 216)
    // if (\array_key_exists('content-encoding', $headers) && !empty($headers['content-encoding'])) == false (line 217)

    $actual = $this->wP_Http_Encoding->should_decode($headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testShould_decode3()
{
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($headers)) == true (line 216)
    // if (\array_key_exists('content-encoding', $headers) && !empty($headers['content-encoding'])) == true (line 217)

    $actual = $this->wP_Http_Encoding->should_decode($headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_available0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Http_Encoding->is_available();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
