<?php

namespace tests;

use Mockery as m;
use getid3_id3v1;

class getid3_id3v1Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \getid3_id3v1
*/
protected $getid3_id3v1;

public function setUp()
{
    parent::setUp();

    $this->getid3_id3v1 = new \getid3_id3v1();
}

public function testAnalyze0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == false (line 33)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == false (line 33)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == false (line 33)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == false (line 33)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze49()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze50()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze51()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze52()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze53()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze54()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze55()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze56()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze57()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze58()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze59()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze60()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze61()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze62()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze63()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze64()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze65()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze66()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze67()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze68()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze69()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze70()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze71()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze72()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze73()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze74()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze75()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze76()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze77()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze78()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze79()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze80()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze81()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze82()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze83()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze84()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze85()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze86()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze87()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze88()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze89()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze90()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze91()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze92()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze93()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze94()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze95()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze96()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze97()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze98()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze99()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze100()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze101()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze102()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze103()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze104()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze105()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze106()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze107()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze108()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze109()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze110()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze111()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze112()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze113()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze114()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze115()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze116()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze117()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze118()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze119()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze120()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze121()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze122()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze123()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze124()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze125()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze126()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze127()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze128()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze129()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze130()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze131()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze132()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze133()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze134()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze135()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze136()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze137()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze138()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze139()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze140()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze141()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze142()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze143()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze144()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze145()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze146()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze147()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze148()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze149()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze150()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze151()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze152()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze153()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze154()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze155()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze156()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze157()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze158()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze159()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze160()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze161()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze162()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze163()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze164()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze165()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze166()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze167()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze168()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze169()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze170()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze171()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze172()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze173()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze174()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze175()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze176()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze177()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze178()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze179()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze180()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze181()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze182()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze183()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze184()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze185()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze186()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze187()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze188()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze189()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze190()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze191()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze192()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze193()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze194()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze195()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze196()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze197()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze198()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze199()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze200()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze201()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze202()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze203()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze204()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze205()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze206()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze207()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze208()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze209()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze210()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze211()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze212()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze213()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze214()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze215()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze216()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze217()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze218()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze219()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze220()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze221()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze222()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze223()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze224()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze225()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze226()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze227()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze228()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze229()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze230()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze231()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze232()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze233()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze234()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze235()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze236()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze237()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze238()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze239()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze240()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze241()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze242()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze243()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze244()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze245()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze246()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze247()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze248()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze249()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze250()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze251()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze252()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze253()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze254()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze255()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze256()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze257()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze258()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze259()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze260()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze261()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze262()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze263()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze264()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze265()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze266()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze267()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze268()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze269()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze270()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze271()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze272()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze273()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze274()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze275()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze276()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze277()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze278()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze279()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze280()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze281()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze282()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze283()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze284()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze285()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze286()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze287()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze288()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze289()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze290()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze291()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze292()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze293()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze294()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze295()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze296()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze297()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze298()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze299()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze300()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze301()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze302()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze303()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze304()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze305()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze306()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze307()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze308()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze309()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze310()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze311()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze312()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze313()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze314()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze315()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze316()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze317()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze318()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze319()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze320()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze321()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze322()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze323()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze324()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze325()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze326()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze327()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze328()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze329()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze330()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze331()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze332()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze333()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze334()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze335()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze336()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze337()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze338()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze339()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze340()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze341()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze342()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze343()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze344()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze345()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze346()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze347()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze348()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze349()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze350()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze351()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze352()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze353()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze354()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze355()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze356()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze357()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze358()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze359()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze360()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze361()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze362()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze363()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze364()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze365()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze366()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze367()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze368()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze369()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze370()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze371()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze372()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze373()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze374()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze375()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze376()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze377()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze378()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze379()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze380()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze381()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze382()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze383()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze384()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze385()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze386()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze387()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze388()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze389()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze390()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze391()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze392()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze393()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze394()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze395()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze396()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze397()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze398()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze399()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze400()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze401()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze402()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze403()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze404()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze405()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze406()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze407()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze408()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze409()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze410()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze411()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze412()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze413()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze414()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze415()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze416()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze417()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze418()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze419()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze420()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze421()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze422()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze423()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze424()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze425()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze426()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze427()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze428()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze429()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze430()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze431()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze432()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze433()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze434()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze435()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze436()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze437()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze438()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze439()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze440()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze441()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze442()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze443()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze444()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze445()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze446()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze447()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze448()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze449()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze450()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze451()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == false (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze452()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze453()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze454()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze455()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze456()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze457()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze458()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze459()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze460()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze461()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze462()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze463()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze464()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze465()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze466()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze467()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze468()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze469()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze470()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze471()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze472()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze473()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze474()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze475()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze476()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze477()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze478()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze479()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze480()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze481()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze482()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze483()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze484()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze485()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze486()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze487()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze488()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze489()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze490()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze491()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze492()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze493()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze494()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze495()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze496()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze497()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze498()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze499()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze500()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze501()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze502()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze503()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze504()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze505()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze506()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze507()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze508()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze509()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze510()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze511()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze512()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze513()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze514()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze515()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze516()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze517()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze518()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze519()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze520()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze521()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze522()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze523()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze524()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze525()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze526()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze527()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze528()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze529()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze530()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze531()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze532()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze533()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze534()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze535()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze536()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze537()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze538()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze539()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze540()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze541()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze542()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze543()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze544()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze545()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze546()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze547()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze548()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze549()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze550()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze551()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze552()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze553()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze554()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze555()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze556()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze557()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze558()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze559()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze560()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze561()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze562()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze563()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze564()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze565()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze566()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze567()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze568()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze569()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze570()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze571()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze572()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze573()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze574()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze575()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze576()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze577()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze578()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze579()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze580()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze581()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze582()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze583()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze584()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze585()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze586()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze587()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze588()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze589()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze590()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze591()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze592()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze593()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze594()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze595()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze596()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze597()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze598()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze599()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze600()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze601()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze602()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze603()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze604()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze605()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze606()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze607()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze608()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze609()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze610()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze611()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze612()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze613()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze614()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze615()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze616()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze617()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze618()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze619()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze620()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze621()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze622()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze623()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze624()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze625()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze626()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze627()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze628()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze629()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze630()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze631()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze632()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze633()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze634()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze635()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze636()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze637()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze638()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze639()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze640()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze641()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze642()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze643()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze644()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze645()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze646()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze647()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze648()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze649()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze650()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze651()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze652()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze653()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze654()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze655()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze656()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze657()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze658()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze659()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze660()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze661()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze662()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze663()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze664()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze665()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze666()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze667()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze668()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze669()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze670()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze671()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze672()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze673()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze674()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze675()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == false (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze676()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze677()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze678()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze679()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze680()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze681()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze682()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze683()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze684()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze685()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze686()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze687()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze688()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze689()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze690()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze691()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze692()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze693()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze694()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze695()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze696()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze697()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze698()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze699()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze700()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze701()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze702()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze703()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze704()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze705()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze706()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze707()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze708()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze709()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze710()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze711()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze712()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze713()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze714()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze715()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze716()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze717()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze718()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze719()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze720()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze721()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze722()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze723()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze724()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze725()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze726()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze727()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze728()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze729()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze730()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze731()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze732()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze733()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze734()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze735()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze736()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze737()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze738()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze739()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze740()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze741()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze742()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze743()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze744()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze745()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze746()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze747()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze748()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze749()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze750()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze751()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze752()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze753()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze754()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze755()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze756()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze757()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze758()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze759()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze760()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze761()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze762()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze763()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze764()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze765()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze766()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze767()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze768()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze769()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze770()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze771()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze772()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze773()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze774()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze775()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze776()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze777()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze778()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze779()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze780()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze781()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze782()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze783()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze784()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze785()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze786()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze787()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == false (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze788()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze789()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze790()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze791()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze792()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze793()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze794()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze795()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze796()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze797()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze798()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze799()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze800()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze801()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze802()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze803()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze804()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze805()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze806()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze807()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze808()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze809()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze810()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze811()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze812()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze813()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze814()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze815()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze816()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze817()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze818()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze819()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze820()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze821()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze822()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze823()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze824()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze825()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze826()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze827()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze828()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze829()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze830()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze831()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze832()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze833()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze834()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze835()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze836()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze837()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze838()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze839()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze840()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze841()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze842()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze843()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze844()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze845()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze846()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze847()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze848()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze849()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze850()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze851()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze852()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze853()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze854()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze855()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze856()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze857()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze858()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze859()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze860()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze861()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze862()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze863()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze864()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze865()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze866()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze867()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == false (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze868()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze869()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze870()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze871()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze872()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze873()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze874()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze875()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze876()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze877()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze878()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze879()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze880()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze881()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze882()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze883()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == false (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze884()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze885()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze886()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze887()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze888()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze889()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze890()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze891()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == false (line 71)
    // if (\function_exists('iconv') && @\iconv($id3v1_bad_encoding, $id3v1_bad_encoding, $value) === $value) == true (line 74)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze892()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze893()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze894()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze895()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == false (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze896()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == false (line 106)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze897()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == false (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze898()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == false (line 113)
    // if (\substr($preid3v1, 119, 6) == 'LYRICS') == true (line 115)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze899()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == false (line 24)
    // if (\substr($id3v1tag, 0, 3) == 'TAG') == true (line 33)
    // if ($id3v1tag[125] === "\0" && $id3v1tag[126] !== "\0") == true (line 46)
    // if (!empty($ParsedID3v1['genre'])) == true (line 53)
    // if (isset($ParsedID3v1['genre']) && (empty($ParsedID3v1['genre']) || $ParsedID3v1['genre'] == 'Unknown')) == true (line 56)
    // if (\preg_match('#^[\\x00-\\x40\\xA8\\B8\\x80-\\xFF]+$#', $value)) == true (line 69)
    // if (\function_exists('mb_convert_encoding') && @\mb_convert_encoding($value, $id3v1_bad_encoding, $id3v1_bad_encoding) === $value) == true (line 71)
    // if ($id3v1tag !== $GoodFormatID3v1tag) == true (line 94)
    // if (\substr($preid3v1, 0, 3) == 'TAG') == true (line 106)
    // if (\substr($preid3v1, 96, 8) == 'APETAGEX') == true (line 113)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnalyze900()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\getid3_lib::intValueSupported($info['filesize'])) == true (line 24)

    $actual = $this->getid3_id3v1->Analyze();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCutfield0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    $actual = $this->getid3_id3v1->cutfield($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArrayOfGenres0()
{
    $allowSCMPXextended = m::mock('UntypedParameter_allowSCMPXextended_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($allowSCMPXextended && empty($GenreLookupSCMPX)) == false (line 289)

    $actual = $this->getid3_id3v1->ArrayOfGenres($allowSCMPXextended);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArrayOfGenres1()
{
    $allowSCMPXextended = m::mock('UntypedParameter_allowSCMPXextended_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($allowSCMPXextended && empty($GenreLookupSCMPX)) == true (line 289)

    $actual = $this->getid3_id3v1->ArrayOfGenres($allowSCMPXextended);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLookupGenreName0()
{
    $genreid = m::mock('UntypedParameter_genreid_');
    $allowSCMPXextended = m::mock('UntypedParameter_allowSCMPXextended_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($genreid) (line 316)
    // Case 'RX' == false (line 317)
    // Case 'CR' == false (line 318)
    // Default (line 320)
    // if (!\is_numeric($genreid)) == false (line 321)

    $actual = $this->getid3_id3v1->LookupGenreName($genreid, $allowSCMPXextended);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLookupGenreName1()
{
    $genreid = m::mock('UntypedParameter_genreid_');
    $allowSCMPXextended = m::mock('UntypedParameter_allowSCMPXextended_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($genreid) (line 316)
    // Case 'RX' == false (line 317)
    // Case 'CR' == false (line 318)
    // Default (line 320)
    // if (!\is_numeric($genreid)) == true (line 321)

    $actual = $this->getid3_id3v1->LookupGenreName($genreid, $allowSCMPXextended);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLookupGenreName2()
{
    $genreid = m::mock('UntypedParameter_genreid_');
    $allowSCMPXextended = m::mock('UntypedParameter_allowSCMPXextended_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($genreid) (line 316)
    // Case 'RX' == false (line 317)
    // Case 'CR' == true (line 318)

    $actual = $this->getid3_id3v1->LookupGenreName($genreid, $allowSCMPXextended);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLookupGenreName3()
{
    $genreid = m::mock('UntypedParameter_genreid_');
    $allowSCMPXextended = m::mock('UntypedParameter_allowSCMPXextended_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($genreid) (line 316)
    // Case 'RX' == true (line 317)

    $actual = $this->getid3_id3v1->LookupGenreName($genreid, $allowSCMPXextended);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLookupGenreID0()
{
    $genre = m::mock('UntypedParameter_genre_');
    $allowSCMPXextended = m::mock('UntypedParameter_allowSCMPXextended_');

    // TODO: Your mock expectations here

    $actual = $this->getid3_id3v1->LookupGenreID($genre, $allowSCMPXextended);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLookupGenreID1()
{
    $genre = m::mock('UntypedParameter_genre_');
    $allowSCMPXextended = m::mock('UntypedParameter_allowSCMPXextended_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtolower(\str_replace(' ', '', $value)) == $LowerCaseNoSpaceSearchTerm) == false (line 335)

    $actual = $this->getid3_id3v1->LookupGenreID($genre, $allowSCMPXextended);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLookupGenreID2()
{
    $genre = m::mock('UntypedParameter_genre_');
    $allowSCMPXextended = m::mock('UntypedParameter_allowSCMPXextended_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strtolower(\str_replace(' ', '', $value)) == $LowerCaseNoSpaceSearchTerm) == true (line 335)

    $actual = $this->getid3_id3v1->LookupGenreID($genre, $allowSCMPXextended);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStandardiseID3v1GenreName0()
{
    $OriginalGenre = m::mock('UntypedParameter_OriginalGenre_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($GenreID = self::LookupGenreID($OriginalGenre)) !== \false) == false (line 343)

    $actual = $this->getid3_id3v1->StandardiseID3v1GenreName($OriginalGenre);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStandardiseID3v1GenreName1()
{
    $OriginalGenre = m::mock('UntypedParameter_OriginalGenre_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($GenreID = self::LookupGenreID($OriginalGenre)) !== \false) == true (line 343)

    $actual = $this->getid3_id3v1->StandardiseID3v1GenreName($OriginalGenre);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag0()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == false (line 355)
    // if ($genreid < 0 || $genreid > 147) == false (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == false (line 369)
    // Case 'integer' == false (line 370)
    // Default (line 373)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag1()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == false (line 355)
    // if ($genreid < 0 || $genreid > 147) == false (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == false (line 369)
    // Case 'integer' == true (line 370)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag2()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == false (line 355)
    // if ($genreid < 0 || $genreid > 147) == false (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == true (line 369)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag3()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == false (line 355)
    // if ($genreid < 0 || $genreid > 147) == true (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == false (line 369)
    // Case 'integer' == false (line 370)
    // Default (line 373)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag4()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == false (line 355)
    // if ($genreid < 0 || $genreid > 147) == true (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == false (line 369)
    // Case 'integer' == true (line 370)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag5()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == false (line 355)
    // if ($genreid < 0 || $genreid > 147) == true (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == true (line 369)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag6()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == true (line 355)
    // if (\gettype($track) == 'string') == false (line 358)
    // if ($genreid < 0 || $genreid > 147) == false (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == false (line 369)
    // Case 'integer' == false (line 370)
    // Default (line 373)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag7()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == true (line 355)
    // if (\gettype($track) == 'string') == false (line 358)
    // if ($genreid < 0 || $genreid > 147) == false (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == false (line 369)
    // Case 'integer' == true (line 370)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag8()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == true (line 355)
    // if (\gettype($track) == 'string') == false (line 358)
    // if ($genreid < 0 || $genreid > 147) == false (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == true (line 369)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag9()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == true (line 355)
    // if (\gettype($track) == 'string') == false (line 358)
    // if ($genreid < 0 || $genreid > 147) == true (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == false (line 369)
    // Case 'integer' == false (line 370)
    // Default (line 373)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag10()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == true (line 355)
    // if (\gettype($track) == 'string') == false (line 358)
    // if ($genreid < 0 || $genreid > 147) == true (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == false (line 369)
    // Case 'integer' == true (line 370)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag11()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == true (line 355)
    // if (\gettype($track) == 'string') == false (line 358)
    // if ($genreid < 0 || $genreid > 147) == true (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == true (line 369)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag12()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == true (line 355)
    // if (\gettype($track) == 'string') == true (line 358)
    // if ($genreid < 0 || $genreid > 147) == false (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == false (line 369)
    // Case 'integer' == false (line 370)
    // Default (line 373)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag13()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == true (line 355)
    // if (\gettype($track) == 'string') == true (line 358)
    // if ($genreid < 0 || $genreid > 147) == false (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == false (line 369)
    // Case 'integer' == true (line 370)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag14()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == true (line 355)
    // if (\gettype($track) == 'string') == true (line 358)
    // if ($genreid < 0 || $genreid > 147) == false (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == true (line 369)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag15()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == true (line 355)
    // if (\gettype($track) == 'string') == true (line 358)
    // if ($genreid < 0 || $genreid > 147) == true (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == false (line 369)
    // Case 'integer' == false (line 370)
    // Default (line 373)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag16()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == true (line 355)
    // if (\gettype($track) == 'string') == true (line 358)
    // if ($genreid < 0 || $genreid > 147) == true (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == false (line 369)
    // Case 'integer' == true (line 370)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGenerateID3v1Tag17()
{
    $title = m::mock('UntypedParameter_title_');
    $artist = m::mock('UntypedParameter_artist_');
    $album = m::mock('UntypedParameter_album_');
    $year = m::mock('UntypedParameter_year_');
    $genreid = m::mock('UntypedParameter_genreid_');
    $comment = m::mock('UntypedParameter_comment_');
    $track = m::mock('UntypedParameter_track_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($track) && $track > 0 && $track <= 255) == true (line 355)
    // if (\gettype($track) == 'string') == true (line 358)
    // if ($genreid < 0 || $genreid > 147) == true (line 365)
    // switch (\gettype($genreid)) (line 368)
    // Case 'string' == true (line 369)

    $actual = $this->getid3_id3v1->GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
