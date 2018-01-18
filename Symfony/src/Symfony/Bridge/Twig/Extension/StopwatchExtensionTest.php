<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\StopwatchExtension;
use Symfony\Component\Stopwatch\Stopwatch;

class StopwatchExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_stopwatch;
/**
* @var mixed
*/
protected $_enabled = null;
/**
* @var \Symfony\Bridge\Twig\Extension\StopwatchExtension
*/
protected $stopwatchExtension;

public function setUp()
{
    parent::setUp();

    $this->_stopwatch = m::mock(\Symfony\Component\Stopwatch\Stopwatch::class);
    $this->_enabled = null;
    $this->stopwatchExtension = new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->_stopwatch, $this->_enabled);
}

public function testGetStopwatch0()
{
    // TODO: Your mock expectations here

    $actual = $this->stopwatchExtension->getStopwatch();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenParsers0()
{
    // TODO: Your mock expectations here

    $actual = $this->stopwatchExtension->getTokenParsers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->stopwatchExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
