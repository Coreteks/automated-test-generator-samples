<?php

namespace tests\Psy\VersionUpdater;

use Mockery as m;
use Psy\VersionUpdater\GitHubChecker;

class GitHubCheckerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\VersionUpdater\GitHubChecker
*/
protected $gitHubChecker;

public function setUp()
{
    parent::setUp();

    $this->gitHubChecker = new \Psy\VersionUpdater\GitHubChecker();
}

public function testIsLatest0()
{
    // TODO: Your mock expectations here

    $actual = $this->gitHubChecker->isLatest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLatest0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->latest)) == false (line 35)

    $actual = $this->gitHubChecker->getLatest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLatest1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->latest)) == true (line 35)

    $actual = $this->gitHubChecker->getLatest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLatest0()
{
    $version = m::mock('UntypedParameter_version_');

    // TODO: Your mock expectations here

    $actual = $this->gitHubChecker->setLatest($version);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFetchLatestRelease0()
{
    // TODO: Your mock expectations here

    $actual = $this->gitHubChecker->fetchLatestRelease();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
