<?php

namespace tests\Symfony\Bridge\PhpUnit;

use Mockery as m;
use Symfony\Bridge\PhpUnit\ClockMock;

class ClockMockTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\PhpUnit\ClockMock
*/
protected $clockMock;

public function setUp()
{
    parent::setUp();

    $this->clockMock = new \Symfony\Bridge\PhpUnit\ClockMock();
}

public function testWithClockMock0()
{
    $enable = m::mock('UntypedParameter_enable_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $enable) == false (line 23)

    $actual = $this->clockMock->withClockMock($enable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWithClockMock1()
{
    $enable = m::mock('UntypedParameter_enable_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $enable) == true (line 23)

    $actual = $this->clockMock->withClockMock($enable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTime0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === self::$now) == false (line 32)

    $actual = $this->clockMock->time();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTime1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === self::$now) == true (line 32)

    $actual = $this->clockMock->time();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSleep0()
{
    $s = m::mock('UntypedParameter_s_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === self::$now) == false (line 41)

    $actual = $this->clockMock->sleep($s);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSleep1()
{
    $s = m::mock('UntypedParameter_s_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === self::$now) == true (line 41)

    $actual = $this->clockMock->sleep($s);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUsleep0()
{
    $us = m::mock('UntypedParameter_us_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === self::$now) == false (line 52)

    $actual = $this->clockMock->usleep($us);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUsleep1()
{
    $us = m::mock('UntypedParameter_us_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === self::$now) == true (line 52)

    $actual = $this->clockMock->usleep($us);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMicrotime0()
{
    $asFloat = m::mock('UntypedParameter_asFloat_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === self::$now) == false (line 61)
    // if ($asFloat) == false (line 65)

    $actual = $this->clockMock->microtime($asFloat);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMicrotime1()
{
    $asFloat = m::mock('UntypedParameter_asFloat_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === self::$now) == false (line 61)
    // if ($asFloat) == true (line 65)

    $actual = $this->clockMock->microtime($asFloat);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMicrotime2()
{
    $asFloat = m::mock('UntypedParameter_asFloat_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === self::$now) == true (line 61)

    $actual = $this->clockMock->microtime($asFloat);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == false (line 77)
    // if (0 === strpos($class, 'Tests\\')) == false (line 80)

    $actual = $this->clockMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == false (line 77)
    // if (0 === strpos($class, 'Tests\\')) == false (line 80)
    // if (function_exists($ns . '\\time')) == false (line 84)

    $actual = $this->clockMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister2()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == false (line 77)
    // if (0 === strpos($class, 'Tests\\')) == false (line 80)
    // if (function_exists($ns . '\\time')) == true (line 84)

    $actual = $this->clockMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister3()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == false (line 77)
    // if (0 === strpos($class, 'Tests\\')) == true (line 80)

    $actual = $this->clockMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister4()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == false (line 77)
    // if (0 === strpos($class, 'Tests\\')) == true (line 80)
    // if (function_exists($ns . '\\time')) == false (line 84)

    $actual = $this->clockMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister5()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == false (line 77)
    // if (0 === strpos($class, 'Tests\\')) == true (line 80)
    // if (function_exists($ns . '\\time')) == true (line 84)

    $actual = $this->clockMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister6()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == true (line 77)

    $actual = $this->clockMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister7()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == true (line 77)
    // if (function_exists($ns . '\\time')) == false (line 84)

    $actual = $this->clockMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister8()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == true (line 77)
    // if (function_exists($ns . '\\time')) == true (line 84)

    $actual = $this->clockMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
