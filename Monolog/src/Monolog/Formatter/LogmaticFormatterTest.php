<?php

namespace tests\Monolog\Formatter;

use Mockery as m;
use Monolog\Formatter\LogmaticFormatter;

class LogmaticFormatterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Monolog\Formatter\LogmaticFormatter
*/
protected $logmaticFormatter;

public function setUp()
{
    parent::setUp();

    $this->logmaticFormatter = new \Monolog\Formatter\LogmaticFormatter();
}

public function testSetHostname0()
{
    $hostname = m::mock('UntypedParameter_hostname_');

    // TODO: Your mock expectations here

    $actual = $this->logmaticFormatter->setHostname($hostname);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAppname0()
{
    $appname = m::mock('UntypedParameter_appname_');

    // TODO: Your mock expectations here

    $actual = $this->logmaticFormatter->setAppname($appname);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->hostname)) == false (line 61)
    // if (!empty($this->appname)) == false (line 64)

    $actual = $this->logmaticFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->hostname)) == false (line 61)
    // if (!empty($this->appname)) == true (line 64)

    $actual = $this->logmaticFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat2()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->hostname)) == true (line 61)
    // if (!empty($this->appname)) == false (line 64)

    $actual = $this->logmaticFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat3()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->hostname)) == true (line 61)
    // if (!empty($this->appname)) == true (line 64)

    $actual = $this->logmaticFormatter->format($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
