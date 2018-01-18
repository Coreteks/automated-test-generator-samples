<?php

namespace tests\Illuminate\Foundation;

use Illuminate\Foundation\EnvironmentDetector;
use Mockery as m;

class EnvironmentDetectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\EnvironmentDetector
*/
protected $environmentDetector;

public function setUp()
{
    parent::setUp();

    $this->environmentDetector = new \Illuminate\Foundation\EnvironmentDetector();
}

public function testDetect0()
{
    $callback = m::mock(\Closure::class);
    $consoleArgs = m::mock('UntypedParameter_consoleArgs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($consoleArgs) == false (line 20)

    $actual = $this->environmentDetector->detect($callback, $consoleArgs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDetect1()
{
    $callback = m::mock(\Closure::class);
    $consoleArgs = m::mock('UntypedParameter_consoleArgs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($consoleArgs) == true (line 20)

    $actual = $this->environmentDetector->detect($callback, $consoleArgs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
