<?php

namespace tests;

use AVCSequenceParameterSetReader;
use Mockery as m;

class AVCSequenceParameterSetReaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_sps = null;
/**
* @var \AVCSequenceParameterSetReader
*/
protected $aVCSequenceParameterSetReader;

public function setUp()
{
    parent::setUp();

    $this->_sps = null;
    $this->aVCSequenceParameterSetReader = new \AVCSequenceParameterSetReader($this->_sps);
}

public function testReadData0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == false (line 646)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == false (line 652)
    // if ($picOrderType == 1) == false (line 654)
    // if ($frame_mbs_only_flag == 0) == false (line 669)
    // if ($frame_cropping_flag) == false (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == false (line 652)
    // if ($picOrderType == 1) == false (line 654)
    // if ($frame_mbs_only_flag == 0) == false (line 669)
    // if ($frame_cropping_flag) == true (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == false (line 652)
    // if ($picOrderType == 1) == false (line 654)
    // if ($frame_mbs_only_flag == 0) == true (line 669)
    // if ($frame_cropping_flag) == false (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == false (line 652)
    // if ($picOrderType == 1) == false (line 654)
    // if ($frame_mbs_only_flag == 0) == true (line 669)
    // if ($frame_cropping_flag) == true (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == false (line 652)
    // if ($picOrderType == 1) == true (line 654)
    // for (...) == false (line 659)
    // if ($frame_mbs_only_flag == 0) == false (line 669)
    // if ($frame_cropping_flag) == false (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == false (line 652)
    // if ($picOrderType == 1) == true (line 654)
    // for (...) == false (line 659)
    // if ($frame_mbs_only_flag == 0) == false (line 669)
    // if ($frame_cropping_flag) == true (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == false (line 652)
    // if ($picOrderType == 1) == true (line 654)
    // for (...) == false (line 659)
    // if ($frame_mbs_only_flag == 0) == true (line 669)
    // if ($frame_cropping_flag) == false (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == false (line 652)
    // if ($picOrderType == 1) == true (line 654)
    // for (...) == false (line 659)
    // if ($frame_mbs_only_flag == 0) == true (line 669)
    // if ($frame_cropping_flag) == true (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == false (line 652)
    // if ($picOrderType == 1) == true (line 654)
    // for (...) == true (line 659)
    // for (...) == false (line 659)
    // if ($frame_mbs_only_flag == 0) == false (line 669)
    // if ($frame_cropping_flag) == false (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == false (line 652)
    // if ($picOrderType == 1) == true (line 654)
    // for (...) == true (line 659)
    // for (...) == false (line 659)
    // if ($frame_mbs_only_flag == 0) == false (line 669)
    // if ($frame_cropping_flag) == true (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == false (line 652)
    // if ($picOrderType == 1) == true (line 654)
    // for (...) == true (line 659)
    // for (...) == false (line 659)
    // if ($frame_mbs_only_flag == 0) == true (line 669)
    // if ($frame_cropping_flag) == false (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == false (line 652)
    // if ($picOrderType == 1) == true (line 654)
    // for (...) == true (line 659)
    // for (...) == false (line 659)
    // if ($frame_mbs_only_flag == 0) == true (line 669)
    // if ($frame_cropping_flag) == true (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == true (line 652)
    // if ($frame_mbs_only_flag == 0) == false (line 669)
    // if ($frame_cropping_flag) == false (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == true (line 652)
    // if ($frame_mbs_only_flag == 0) == false (line 669)
    // if ($frame_cropping_flag) == true (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == true (line 652)
    // if ($frame_mbs_only_flag == 0) == true (line 669)
    // if ($frame_cropping_flag) == false (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadData16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($profile > 0) == true (line 646)
    // if ($picOrderType == 0) == true (line 652)
    // if ($frame_mbs_only_flag == 0) == true (line 669)
    // if ($frame_cropping_flag) == true (line 680)

    $actual = $this->aVCSequenceParameterSetReader->readData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkipBits0()
{
    $bits = m::mock('UntypedParameter_bits_');

    // TODO: Your mock expectations here

    $actual = $this->aVCSequenceParameterSetReader->skipBits($bits);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBit0()
{
    // TODO: Your mock expectations here

    $actual = $this->aVCSequenceParameterSetReader->getBit();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBits0()
{
    $bits = m::mock('UntypedParameter_bits_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 708)

    $actual = $this->aVCSequenceParameterSetReader->getBits($bits);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBits1()
{
    $bits = m::mock('UntypedParameter_bits_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 708)
    // for (...) == false (line 708)

    $actual = $this->aVCSequenceParameterSetReader->getBits($bits);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExpGolombUe0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($bit == 0) == false (line 717)

    $actual = $this->aVCSequenceParameterSetReader->expGolombUe();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExpGolombUe1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($bit == 0) == true (line 717)
    // if ($significantBits > 31) == false (line 721)
    // while ($bit == 0) == false (line 717)

    $actual = $this->aVCSequenceParameterSetReader->expGolombUe();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExpGolombUe2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($bit == 0) == true (line 717)
    // if ($significantBits > 31) == true (line 721)

    $actual = $this->aVCSequenceParameterSetReader->expGolombUe();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExpGolombSe0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($result & 0x1) == 0) == false (line 731)

    $actual = $this->aVCSequenceParameterSetReader->expGolombSe();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExpGolombSe1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($result & 0x1) == 0) == true (line 731)

    $actual = $this->aVCSequenceParameterSetReader->expGolombSe();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetWidth0()
{
    // TODO: Your mock expectations here

    $actual = $this->aVCSequenceParameterSetReader->getWidth();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHeight0()
{
    // TODO: Your mock expectations here

    $actual = $this->aVCSequenceParameterSetReader->getHeight();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
