<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\Blacklist;

class BlacklistTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\Blacklist
*/
protected $blacklist;

public function setUp()
{
    parent::setUp();

    $this->blacklist = new \PHPUnit\Util\Blacklist();
}

public function testGetBlacklistedDirectories0()
{
    // TODO: Your mock expectations here

    $actual = $this->blacklist->getBlacklistedDirectories();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsBlacklisted0()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('PHPUNIT_TESTSUITE')) == false (line 85)

    $actual = $this->blacklist->isBlacklisted($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsBlacklisted1()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('PHPUNIT_TESTSUITE')) == false (line 85)
    // if (\strpos($file, $directory) === 0) == false (line 92)

    $actual = $this->blacklist->isBlacklisted($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsBlacklisted2()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('PHPUNIT_TESTSUITE')) == false (line 85)
    // if (\strpos($file, $directory) === 0) == true (line 92)

    $actual = $this->blacklist->isBlacklisted($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsBlacklisted3()
{
    $file = m::mock('UntypedParameter_file_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\defined('PHPUNIT_TESTSUITE')) == true (line 85)

    $actual = $this->blacklist->isBlacklisted($file);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
