<?php

namespace tests\PHPUnit\Runner;

use Mockery as m;
use PHPUnit\Runner\Version;

class VersionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Runner\Version
*/
protected $version;

public function setUp()
{
    parent::setUp();

    $this->version = new \PHPUnit\Runner\Version();
}

public function testId0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::$pharVersion !== null) == false (line 30)
    // if (self::$version === null) == false (line 34)

    $actual = $this->version->id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testId1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::$pharVersion !== null) == false (line 30)
    // if (self::$version === null) == true (line 34)

    $actual = $this->version->id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testId2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::$pharVersion !== null) == true (line 30)

    $actual = $this->version->id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSeries0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos(self::id(), '-')) == false (line 47)

    $actual = $this->version->series();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSeries1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos(self::id(), '-')) == true (line 47)

    $actual = $this->version->series();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetVersionString0()
{
    // TODO: Your mock expectations here

    $actual = $this->version->getVersionString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReleaseChannel0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos(self::$pharVersion, '-') !== false) == false (line 69)

    $actual = $this->version->getReleaseChannel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetReleaseChannel1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos(self::$pharVersion, '-') !== false) == true (line 69)

    $actual = $this->version->getReleaseChannel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
