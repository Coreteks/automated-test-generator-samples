<?php

namespace tests\PHPUnit\Util\TestDox;

use Mockery as m;
use PHPUnit\Util\TestDox\CliTestDoxPrinter;

class CliTestDoxPrinterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_out = null;
/**
* @var mixed
*/
protected $_verbose = null;
/**
* @var mixed
*/
protected $_colors = null;
/**
* @var mixed
*/
protected $_debug = null;
/**
* @var mixed
*/
protected $_numberOfColumns = null;
/**
* @var mixed
*/
protected $_reverse = null;
/**
* @var \PHPUnit\Util\TestDox\CliTestDoxPrinter
*/
protected $cliTestDoxPrinter;

public function setUp()
{
    parent::setUp();

    $this->_out = null;
    $this->_verbose = null;
    $this->_colors = null;
    $this->_debug = null;
    $this->_numberOfColumns = null;
    $this->_reverse = null;
    $this->cliTestDoxPrinter = new \PHPUnit\Util\TestDox\CliTestDoxPrinter($this->_out, $this->_verbose, $this->_colors, $this->_debug, $this->_numberOfColumns, $this->_reverse);
}

public function testStartTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase && !$test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 57)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 63)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 79)

    $actual = $this->cliTestDoxPrinter->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest1()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase && !$test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 57)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 63)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 79)

    $actual = $this->cliTestDoxPrinter->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest2()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase && !$test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 57)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 63)
    // if (isset($annotations['class']['testdox'][0])) == false (line 66)
    // if (isset($annotations['method']['testdox'][0])) == false (line 72)

    $actual = $this->cliTestDoxPrinter->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest3()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase && !$test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 57)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 63)
    // if (isset($annotations['class']['testdox'][0])) == false (line 66)
    // if (isset($annotations['method']['testdox'][0])) == true (line 72)

    $actual = $this->cliTestDoxPrinter->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest4()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase && !$test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 57)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 63)
    // if (isset($annotations['class']['testdox'][0])) == true (line 66)
    // if (isset($annotations['method']['testdox'][0])) == false (line 72)

    $actual = $this->cliTestDoxPrinter->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest5()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase && !$test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 57)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 63)
    // if (isset($annotations['class']['testdox'][0])) == true (line 66)
    // if (isset($annotations['method']['testdox'][0])) == true (line 72)

    $actual = $this->cliTestDoxPrinter->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest6()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase && !$test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 57)

    $actual = $this->cliTestDoxPrinter->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase && !$test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 97)
    // if (!$this->currentTestResult->isTestSuccessful()) == false (line 109)

    $actual = $this->cliTestDoxPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest1()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase && !$test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 97)
    // if (!$this->currentTestResult->isTestSuccessful()) == true (line 109)

    $actual = $this->cliTestDoxPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest2()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase && !$test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 97)

    $actual = $this->cliTestDoxPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddError0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->cliTestDoxPrinter->addError($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWarning0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\Warning::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->cliTestDoxPrinter->addWarning($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->cliTestDoxPrinter->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddIncompleteTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->cliTestDoxPrinter->addIncompleteTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRiskyTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->cliTestDoxPrinter->addRiskyTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddSkippedTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->cliTestDoxPrinter->addSkippedTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteProgress0()
{
    $progress = m::mock('UntypedParameter_progress_');

    // TODO: Your mock expectations here

    $actual = $this->cliTestDoxPrinter->writeProgress($progress);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->cliTestDoxPrinter->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrintResult0()
{
    $result = m::mock(\PHPUnit\Framework\TestResult::class);

    // TODO: Your mock expectations here

    $actual = $this->cliTestDoxPrinter->printResult($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
