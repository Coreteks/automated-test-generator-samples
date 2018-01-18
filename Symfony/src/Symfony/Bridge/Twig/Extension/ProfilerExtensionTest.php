<?php

namespace tests\Symfony\Bridge\Twig\Extension;

use Mockery as m;
use Symfony\Bridge\Twig\Extension\ProfilerExtension;
use Symfony\Component\Stopwatch\Stopwatch;
use Twig\Profiler\Profile;

class ProfilerExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_profile;
/**
* @var \Mockery\MockInterface
*/
protected $_stopwatch;
/**
* @var \Symfony\Bridge\Twig\Extension\ProfilerExtension
*/
protected $profilerExtension;

public function setUp()
{
    parent::setUp();

    $this->_profile = m::mock(\Twig\Profiler\Profile::class);
    $this->_stopwatch = m::mock(\Symfony\Component\Stopwatch\Stopwatch::class);
    $this->profilerExtension = new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->_profile, $this->_stopwatch);
}

public function testEnter0()
{
    $profile = m::mock(\Twig\Profiler\Profile::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->stopwatch && $profile->isTemplate()) == false (line 36)

    $actual = $this->profilerExtension->enter($profile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnter1()
{
    $profile = m::mock(\Twig\Profiler\Profile::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->stopwatch && $profile->isTemplate()) == true (line 36)

    $actual = $this->profilerExtension->enter($profile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeave0()
{
    $profile = m::mock(\Twig\Profiler\Profile::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->stopwatch && $profile->isTemplate()) == false (line 47)

    $actual = $this->profilerExtension->leave($profile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeave1()
{
    $profile = m::mock(\Twig\Profiler\Profile::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->stopwatch && $profile->isTemplate()) == true (line 47)

    $actual = $this->profilerExtension->leave($profile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->profilerExtension->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
