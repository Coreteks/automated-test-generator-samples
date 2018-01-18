<?php

namespace tests\PHPUnit\Util\TestDox;

use Mockery as m;
use PHPUnit\Util\TestDox\TestResult;

class TestResultTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_colorize = null;
/**
* @var mixed
*/
protected $_testClass = null;
/**
* @var mixed
*/
protected $_testMethod = null;
/**
* @var \PHPUnit\Util\TestDox\TestResult
*/
protected $testResult;

public function setUp()
{
    parent::setUp();

    $this->_colorize = null;
    $this->_testClass = null;
    $this->_testMethod = null;
    $this->testResult = new \PHPUnit\Util\TestDox\TestResult($this->_colorize, $this->_testClass, $this->_testMethod);
}

public function testIsTestSuccessful0()
{
    // TODO: Your mock expectations here

    $actual = $this->testResult->isTestSuccessful();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFail0()
{
    $symbol = m::mock('UntypedParameter_symbol_');
    $additionalInformation = m::mock('UntypedParameter_additionalInformation_');
    $additionalInformationVerbose = m::mock('UntypedParameter_additionalInformationVerbose_');

    // TODO: Your mock expectations here

    $actual = $this->testResult->fail($symbol, $additionalInformation, $additionalInformationVerbose);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRuntime0()
{
    $runtime = m::mock('UntypedParameter_runtime_');

    // TODO: Your mock expectations here

    $actual = $this->testResult->setRuntime($runtime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    $previousTestResult = m::mock('UntypedParameter_previousTestResult_');
    $verbose = m::mock('UntypedParameter_verbose_');

    // TODO: Your mock expectations here

    $actual = $this->testResult->toString($previousTestResult, $verbose);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
