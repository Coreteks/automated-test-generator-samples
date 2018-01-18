<?php

namespace tests;

use IXR_Date;
use Mockery as m;

class IXR_DateTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_time = null;
/**
* @var \IXR_Date
*/
protected $iXR_Date;

public function setUp()
{
    parent::setUp();

    $this->_time = null;
    $this->iXR_Date = new \IXR_Date($this->_time);
}

public function testIXR_Date0()
{
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Date->IXR_Date($time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseTimestamp0()
{
    $timestamp = m::mock('UntypedParameter_timestamp_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Date->parseTimestamp($timestamp);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseIso0()
{
    $iso = m::mock('UntypedParameter_iso_');

    // TODO: Your mock expectations here

    $actual = $this->iXR_Date->parseIso($iso);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIso0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Date->getIso();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXml0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Date->getXml();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimestamp0()
{
    // TODO: Your mock expectations here

    $actual = $this->iXR_Date->getTimestamp();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
