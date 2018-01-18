<?php

namespace tests\PHPUnit\TextUI;

use Mockery as m;
use PHPUnit\TextUI\ResultPrinter;

class ResultPrinterTest extends \PHPUnit_Framework_TestCase
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
* @var \PHPUnit\TextUI\ResultPrinter
*/
protected $resultPrinter;

public function setUp()
{
    parent::setUp();

    $this->_out = null;
    $this->_verbose = null;
    $this->_colors = null;
    $this->_debug = null;
    $this->_numberOfColumns = null;
    $this->_reverse = null;
    $this->resultPrinter = new \PHPUnit\TextUI\ResultPrinter($this->_out, $this->_verbose, $this->_colors, $this->_debug, $this->_numberOfColumns, $this->_reverse);
}

public function testPrintResult0()
{
    $result = m::mock(\PHPUnit\Framework\TestResult::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->verbose) == false (line 190)

    $actual = $this->resultPrinter->printResult($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrintResult1()
{
    $result = m::mock(\PHPUnit\Framework\TestResult::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->verbose) == true (line 190)

    $actual = $this->resultPrinter->printResult($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrintWaitPrompt0()
{
    // TODO: Your mock expectations here

    $actual = $this->resultPrinter->printWaitPrompt();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddError0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->resultPrinter->addError($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->resultPrinter->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWarning0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\Warning::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->resultPrinter->addWarning($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddIncompleteTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->resultPrinter->addIncompleteTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRiskyTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->resultPrinter->addRiskyTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddSkippedTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->resultPrinter->addSkippedTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite0()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->numTests == -1) == false (line 288)

    $actual = $this->resultPrinter->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite1()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->numTests == -1) == true (line 288)

    $actual = $this->resultPrinter->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTestSuite0()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    $actual = $this->resultPrinter->endTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 311)

    $actual = $this->resultPrinter->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest1()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 311)

    $actual = $this->resultPrinter->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 350)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest1()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == false (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest2()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == true (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest3()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 350)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest4()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == false (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest5()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == true (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest6()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 342)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 350)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest7()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 342)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == false (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest8()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 342)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == true (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest9()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 350)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest10()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == false (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest11()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == true (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest12()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 350)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest13()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == false (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest14()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == true (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest15()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 342)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 350)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest16()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 342)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == false (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest17()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 342)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == true (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest18()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 350)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest19()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == false (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest20()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == true (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest21()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 350)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest22()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == false (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest23()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == true (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest24()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 342)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 350)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest25()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 342)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == false (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest26()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == false (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 342)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == true (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest27()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 350)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest28()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == false (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest29()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == false (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == true (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest30()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 350)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest31()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == false (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest32()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 342)
    // if ($test instanceof \PHPUnit\Runner\PhptTestCase) == true (line 344)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == true (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest33()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 342)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 350)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest34()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 342)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == false (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest35()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 329)
    // if (!$this->lastTestFailed) == true (line 338)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 342)
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 350)
    // if (!$test->hasExpectationOnOutput()) == true (line 351)

    $actual = $this->resultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
