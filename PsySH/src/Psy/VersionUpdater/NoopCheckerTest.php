<?php

namespace tests\Psy\VersionUpdater;

use Mockery as m;
use Psy\VersionUpdater\NoopChecker;

class NoopCheckerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\VersionUpdater\NoopChecker
*/
protected $noopChecker;

public function setUp()
{
    parent::setUp();

    $this->noopChecker = new \Psy\VersionUpdater\NoopChecker();
}

public function testIsLatest0()
{
    // TODO: Your mock expectations here

    $actual = $this->noopChecker->isLatest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLatest0()
{
    // TODO: Your mock expectations here

    $actual = $this->noopChecker->getLatest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
