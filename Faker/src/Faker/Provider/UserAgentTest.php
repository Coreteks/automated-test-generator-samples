<?php

namespace tests\Faker\Provider;

use Faker\Provider\UserAgent;
use Mockery as m;

class UserAgentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\UserAgent
*/
protected $userAgent;

public function setUp()
{
    parent::setUp();

    $this->userAgent = new \Faker\Provider\UserAgent();
}

public function testMacProcessor0()
{
    // TODO: Your mock expectations here

    $actual = $this->userAgent->macProcessor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLinuxProcessor0()
{
    // TODO: Your mock expectations here

    $actual = $this->userAgent->linuxProcessor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUserAgent0()
{
    // TODO: Your mock expectations here

    $actual = $this->userAgent->userAgent();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChrome0()
{
    // TODO: Your mock expectations here

    $actual = $this->userAgent->chrome();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFirefox0()
{
    // TODO: Your mock expectations here

    $actual = $this->userAgent->firefox();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSafari0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (mt_rand(0, 1) == 0) == false (line 106)

    $actual = $this->userAgent->safari();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSafari1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (mt_rand(0, 1) == 0) == true (line 106)

    $actual = $this->userAgent->safari();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpera0()
{
    // TODO: Your mock expectations here

    $actual = $this->userAgent->opera();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInternetExplorer0()
{
    // TODO: Your mock expectations here

    $actual = $this->userAgent->internetExplorer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWindowsPlatformToken0()
{
    // TODO: Your mock expectations here

    $actual = $this->userAgent->windowsPlatformToken();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMacPlatformToken0()
{
    // TODO: Your mock expectations here

    $actual = $this->userAgent->macPlatformToken();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLinuxPlatformToken0()
{
    // TODO: Your mock expectations here

    $actual = $this->userAgent->linuxPlatformToken();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
