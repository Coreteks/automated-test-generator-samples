<?php

namespace tests\PHPUnit\Util\Log;

use Mockery as m;
use PHPUnit\Util\Log\JUnit;

class JUnitTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_out = null;
/**
* @var mixed
*/
protected $_reportUselessTests = null;
/**
* @var \PHPUnit\Util\Log\JUnit
*/
protected $jUnit;

public function setUp()
{
    parent::setUp();

    $this->_out = null;
    $this->_reportUselessTests = null;
    $this->jUnit = new \PHPUnit\Util\Log\JUnit($this->_out, $this->_reportUselessTests);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->writeDocument === true) == false (line 127)

    $actual = $this->jUnit->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->writeDocument === true) == true (line 127)

    $actual = $this->jUnit->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddError0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->jUnit->addError($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWarning0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\Warning::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->jUnit->addWarning($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->jUnit->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddIncompleteTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->jUnit->addIncompleteTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRiskyTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->reportUselessTests || $this->currentTestCase === null) == false (line 200)

    $actual = $this->jUnit->addRiskyTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRiskyTest1()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->reportUselessTests || $this->currentTestCase === null) == true (line 200)

    $actual = $this->jUnit->addRiskyTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddSkippedTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->jUnit->addSkippedTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite0()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\class_exists($suite->getName(), false)) == false (line 241)
    // if ($this->testSuiteLevel > 0) == false (line 250)

    $actual = $this->jUnit->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite1()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\class_exists($suite->getName(), false)) == false (line 241)
    // if ($this->testSuiteLevel > 0) == true (line 250)

    $actual = $this->jUnit->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testStartTestSuite2()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\class_exists($suite->getName(), false)) == true (line 241)

    $actual = $this->jUnit->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite3()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\class_exists($suite->getName(), false)) == true (line 241)
    // if ($this->testSuiteLevel > 0) == false (line 250)

    $actual = $this->jUnit->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite4()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\class_exists($suite->getName(), false)) == true (line 241)
    // if ($this->testSuiteLevel > 0) == true (line 250)

    $actual = $this->jUnit->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testStartTestSuite5()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\class_exists($suite->getName(), false)) == true (line 241)

    $actual = $this->jUnit->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite6()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\class_exists($suite->getName(), false)) == true (line 241)
    // if ($this->testSuiteLevel > 0) == false (line 250)

    $actual = $this->jUnit->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite7()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\class_exists($suite->getName(), false)) == true (line 241)
    // if ($this->testSuiteLevel > 0) == true (line 250)

    $actual = $this->jUnit->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite8()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\class_exists($suite->getName(), false)) == true (line 241)
    // if ($this->testSuiteLevel > 0) == false (line 250)

    $actual = $this->jUnit->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite9()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\class_exists($suite->getName(), false)) == true (line 241)
    // if ($this->testSuiteLevel > 0) == true (line 250)

    $actual = $this->jUnit->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTestSuite0()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->testSuiteLevel > 1) == false (line 303)

    $actual = $this->jUnit->endTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTestSuite1()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->testSuiteLevel > 1) == true (line 303)

    $actual = $this->jUnit->endTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 328)

    $actual = $this->jUnit->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest1()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 328)
    // if ($class->hasMethod($methodName)) == false (line 332)

    $actual = $this->jUnit->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest2()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 328)
    // if ($class->hasMethod($methodName)) == true (line 332)

    $actual = $this->jUnit->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 353)
    // if (\method_exists($test, 'hasOutput') && $test->hasOutput()) == false (line 375)

    $actual = $this->jUnit->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest1()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 353)
    // if (\method_exists($test, 'hasOutput') && $test->hasOutput()) == true (line 375)

    $actual = $this->jUnit->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest2()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 353)
    // if (\method_exists($test, 'hasOutput') && $test->hasOutput()) == false (line 375)

    $actual = $this->jUnit->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest3()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 353)
    // if (\method_exists($test, 'hasOutput') && $test->hasOutput()) == true (line 375)

    $actual = $this->jUnit->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXML0()
{
    // TODO: Your mock expectations here

    $actual = $this->jUnit->getXML();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetWriteDocument0()
{
    $flag = m::mock('UntypedParameter_flag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_bool($flag)) == false (line 411)

    $actual = $this->jUnit->setWriteDocument($flag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetWriteDocument1()
{
    $flag = m::mock('UntypedParameter_flag_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_bool($flag)) == true (line 411)

    $actual = $this->jUnit->setWriteDocument($flag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
