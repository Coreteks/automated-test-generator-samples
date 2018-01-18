<?php

namespace tests;

use Mockery as m;
use getid3_dts;

class getid3_dtsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \getid3_dts
*/
protected $getid3_dts;

public function setUp()
{
    parent::setUp();

    $this->getid3_dts = new \getid3_dts();
}

public function testAnalyze0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == false (line 53)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == false (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == false (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == false (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == false (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == false (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == false (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == true (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == true (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == true (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == true (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == true (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == true (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == true (line 76)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == true (line 76)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == true (line 76)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == true (line 76)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == true (line 76)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == true (line 76)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == true (line 73)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == true (line 73)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == true (line 73)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == true (line 73)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == true (line 73)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == true (line 73)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == true (line 70)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == true (line 70)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == true (line 70)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == true (line 70)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == true (line 70)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == false (line 48)
    // if ($this->isDependencyFor('matroska')) == true (line 53)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == true (line 70)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == false (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == false (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == false (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == false (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == false (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == false (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze49()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == true (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze50()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == true (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze51()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == true (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze52()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == true (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze53()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == true (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze54()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == false (line 76)
    // Case 3 == true (line 79)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze55()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == true (line 76)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze56()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == true (line 76)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze57()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == true (line 76)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze58()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == true (line 76)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze59()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == true (line 76)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze60()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == false (line 73)
    // Case 2 == true (line 76)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze61()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == true (line 73)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze62()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == true (line 73)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze63()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == true (line 73)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze64()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == true (line 73)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze65()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == true (line 73)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze66()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == false (line 70)
    // Case 1 == true (line 73)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze67()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == true (line 70)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze68()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == true (line 70)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze69()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == true (line 70)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == false (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze70()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == true (line 70)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == false (line 132)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze71()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == true (line 70)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == false (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze72()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($encoding = \array_search($sync, self::$syncwords)) !== \false) == true (line 48)
    // for (...) == true (line 68)
    // switch ($encoding) (line 69)
    // Case 0 == true (line 70)
    // for (...) == false (line 68)
    // if ($info['dts']['flags']['crc_present']) == true (line 103)
    // if (isset($info['avdataend']) && !empty($info['dts']['bitrate']) && \is_numeric($info['dts']['bitrate'])) == true (line 132)
    // if ($encoding == 2 || $encoding == 3) == true (line 134)

    $actual = $this->getid3_dts->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBitrateLookup0()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    $actual = $this->getid3_dts->bitrateLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSampleRateLookup0()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    $actual = $this->getid3_dts->sampleRateLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBitPerSampleLookup0()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    $actual = $this->getid3_dts->bitPerSampleLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup0()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == false (line 227)
    // Case 5 == false (line 230)
    // Case 6 == false (line 231)
    // Case 7 == false (line 234)
    // Case 8 == false (line 235)
    // Case 9 == false (line 238)
    // Case 10 == false (line 241)
    // Case 11 == false (line 242)
    // Case 12 == false (line 243)
    // Case 13 == false (line 246)
    // Case 14 == false (line 249)
    // Case 15 == false (line 250)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup1()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == false (line 227)
    // Case 5 == false (line 230)
    // Case 6 == false (line 231)
    // Case 7 == false (line 234)
    // Case 8 == false (line 235)
    // Case 9 == false (line 238)
    // Case 10 == false (line 241)
    // Case 11 == false (line 242)
    // Case 12 == false (line 243)
    // Case 13 == false (line 246)
    // Case 14 == false (line 249)
    // Case 15 == true (line 250)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup2()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == false (line 227)
    // Case 5 == false (line 230)
    // Case 6 == false (line 231)
    // Case 7 == false (line 234)
    // Case 8 == false (line 235)
    // Case 9 == false (line 238)
    // Case 10 == false (line 241)
    // Case 11 == false (line 242)
    // Case 12 == false (line 243)
    // Case 13 == false (line 246)
    // Case 14 == true (line 249)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup3()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == false (line 227)
    // Case 5 == false (line 230)
    // Case 6 == false (line 231)
    // Case 7 == false (line 234)
    // Case 8 == false (line 235)
    // Case 9 == false (line 238)
    // Case 10 == false (line 241)
    // Case 11 == false (line 242)
    // Case 12 == false (line 243)
    // Case 13 == true (line 246)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup4()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == false (line 227)
    // Case 5 == false (line 230)
    // Case 6 == false (line 231)
    // Case 7 == false (line 234)
    // Case 8 == false (line 235)
    // Case 9 == false (line 238)
    // Case 10 == false (line 241)
    // Case 11 == false (line 242)
    // Case 12 == true (line 243)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup5()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == false (line 227)
    // Case 5 == false (line 230)
    // Case 6 == false (line 231)
    // Case 7 == false (line 234)
    // Case 8 == false (line 235)
    // Case 9 == false (line 238)
    // Case 10 == false (line 241)
    // Case 11 == true (line 242)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup6()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == false (line 227)
    // Case 5 == false (line 230)
    // Case 6 == false (line 231)
    // Case 7 == false (line 234)
    // Case 8 == false (line 235)
    // Case 9 == false (line 238)
    // Case 10 == true (line 241)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup7()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == false (line 227)
    // Case 5 == false (line 230)
    // Case 6 == false (line 231)
    // Case 7 == false (line 234)
    // Case 8 == false (line 235)
    // Case 9 == true (line 238)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup8()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == false (line 227)
    // Case 5 == false (line 230)
    // Case 6 == false (line 231)
    // Case 7 == false (line 234)
    // Case 8 == true (line 235)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup9()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == false (line 227)
    // Case 5 == false (line 230)
    // Case 6 == false (line 231)
    // Case 7 == true (line 234)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup10()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == false (line 227)
    // Case 5 == false (line 230)
    // Case 6 == true (line 231)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup11()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == false (line 227)
    // Case 5 == true (line 230)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup12()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == false (line 226)
    // Case 4 == true (line 227)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup13()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == false (line 225)
    // Case 3 == true (line 226)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup14()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == false (line 224)
    // Case 2 == true (line 225)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup15()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == false (line 221)
    // Case 1 == true (line 224)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNumChannelsLookup16()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($index) (line 220)
    // Case 0 == true (line 221)

    $actual = $this->getid3_dts->numChannelsLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChannelArrangementLookup0()
{
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    $actual = $this->getid3_dts->channelArrangementLookup($index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDialogNormalization0()
{
    $index = m::mock('UntypedParameter_index_');
    $version = m::mock('UntypedParameter_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($version) (line 280)
    // Case 7 == false (line 281)
    // Case 6 == false (line 284)

    $actual = $this->getid3_dts->dialogNormalization($index, $version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDialogNormalization1()
{
    $index = m::mock('UntypedParameter_index_');
    $version = m::mock('UntypedParameter_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($version) (line 280)
    // Case 7 == false (line 281)
    // Case 6 == true (line 284)

    $actual = $this->getid3_dts->dialogNormalization($index, $version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDialogNormalization2()
{
    $index = m::mock('UntypedParameter_index_');
    $version = m::mock('UntypedParameter_version_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($version) (line 280)
    // Case 7 == true (line 281)

    $actual = $this->getid3_dts->dialogNormalization($index, $version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
