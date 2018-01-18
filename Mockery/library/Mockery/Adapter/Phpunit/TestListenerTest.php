<?php

namespace tests\Mockery\Adapter\Phpunit;

use Mockery as m;
use Mockery\Adapter\Phpunit\TestListener;

class TestListenerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\Adapter\Phpunit\TestListener
*/
protected $testListener;

public function setUp()
{
    parent::setUp();

    $this->testListener = new \Mockery\Adapter\Phpunit\TestListener();
}

/**
 * @expectedException \Exception
 */
public function testEndTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if ($test->getStatus() !== \PHPUnit\Runner\BaseTestRunner::STATUS_PASSED) == false (line 46)

    $actual = $this->testListener->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest1()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if ($test->getStatus() !== \PHPUnit\Runner\BaseTestRunner::STATUS_PASSED) == false (line 46)

    $actual = $this->testListener->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest2()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if ($test->getStatus() !== \PHPUnit\Runner\BaseTestRunner::STATUS_PASSED) == false (line 46)

    $actual = $this->testListener->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest3()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if ($test->getStatus() !== \PHPUnit\Runner\BaseTestRunner::STATUS_PASSED) == true (line 46)

    $actual = $this->testListener->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest4()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == true (line 40)

    $actual = $this->testListener->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite0()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    $actual = $this->testListener->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
