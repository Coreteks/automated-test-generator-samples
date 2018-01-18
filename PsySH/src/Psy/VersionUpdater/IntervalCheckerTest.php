<?php

namespace tests\Psy\VersionUpdater;

use Mockery as m;
use Psy\VersionUpdater\IntervalChecker;

class IntervalCheckerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_cacheFile = null;
/**
* @var mixed
*/
protected $_interval = null;
/**
* @var \Psy\VersionUpdater\IntervalChecker
*/
protected $intervalChecker;

public function setUp()
{
    parent::setUp();

    $this->_cacheFile = null;
    $this->_interval = null;
    $this->intervalChecker = new \Psy\VersionUpdater\IntervalChecker($this->_cacheFile, $this->_interval);
}

public function testFetchLatestRelease0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cached && isset($cached->last_check) && isset($cached->release)) == false (line 31)
    // if ($release && isset($release->tag_name)) == false (line 41)

    $actual = $this->intervalChecker->fetchLatestRelease();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFetchLatestRelease1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cached && isset($cached->last_check) && isset($cached->release)) == false (line 31)
    // if ($release && isset($release->tag_name)) == true (line 41)

    $actual = $this->intervalChecker->fetchLatestRelease();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFetchLatestRelease2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cached && isset($cached->last_check) && isset($cached->release)) == true (line 31)
    // if ($lastCheck >= $now->sub($this->getDateInterval())) == false (line 34)
    // if ($release && isset($release->tag_name)) == false (line 41)

    $actual = $this->intervalChecker->fetchLatestRelease();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFetchLatestRelease3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cached && isset($cached->last_check) && isset($cached->release)) == true (line 31)
    // if ($lastCheck >= $now->sub($this->getDateInterval())) == false (line 34)
    // if ($release && isset($release->tag_name)) == true (line 41)

    $actual = $this->intervalChecker->fetchLatestRelease();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFetchLatestRelease4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($cached && isset($cached->last_check) && isset($cached->release)) == true (line 31)
    // if ($lastCheck >= $now->sub($this->getDateInterval())) == true (line 34)

    $actual = $this->intervalChecker->fetchLatestRelease();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
