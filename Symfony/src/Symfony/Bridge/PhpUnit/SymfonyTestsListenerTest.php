<?php

namespace tests\Symfony\Bridge\PhpUnit;

use Mockery as m;
use Symfony\Bridge\PhpUnit\SymfonyTestsListener;

class SymfonyTestsListenerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_mockedNamespaces = [];
/**
* @var \Symfony\Bridge\PhpUnit\SymfonyTestsListener
*/
protected $symfonyTestsListener;

public function setUp()
{
    parent::setUp();

    $this->_mockedNamespaces = [];
    $this->symfonyTestsListener = new \Symfony\Bridge\PhpUnit\SymfonyTestsListener($this->_mockedNamespaces);
}

public function testGlobalListenerDisabled0()
{
    // TODO: Your mock expectations here

    $actual = $this->symfonyTestsListener->globalListenerDisabled();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite0()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    $actual = $this->symfonyTestsListener->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddSkippedTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\Exception::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->symfonyTestsListener->addSkippedTest($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    $actual = $this->symfonyTestsListener->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWarning0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\Warning::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->symfonyTestsListener->addWarning($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->symfonyTestsListener->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
