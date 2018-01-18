<?php

namespace tests\PHPUnit\Util\Log;

use Mockery as m;
use PHPUnit\Util\Log\TeamCity;

class TeamCityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\Log\TeamCity
*/
protected $teamCity;

public function setUp()
{
    parent::setUp();

    $this->teamCity = new \PHPUnit\Util\Log\TeamCity();
}

public function testPrintResult0()
{
    $result = m::mock(\PHPUnit\Framework\TestResult::class);

    // TODO: Your mock expectations here

    $actual = $this->teamCity->printResult($result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddError0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->teamCity->addError($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWarning0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\Warning::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->teamCity->addWarning($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException) == false (line 116)

    $actual = $this->teamCity->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure1()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException) == true (line 116)
    // if ($comparisonFailure instanceof \SebastianBergmann\Comparator\ComparisonFailure) == false (line 119)

    $actual = $this->teamCity->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure2()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException) == true (line 116)
    // if ($comparisonFailure instanceof \SebastianBergmann\Comparator\ComparisonFailure) == true (line 119)
    // if ($expectedString === null || empty($expectedString)) == false (line 122)
    // if ($actualString === null || empty($actualString)) == false (line 128)
    // if ($actualString !== null && $expectedString !== null) == false (line 132)

    $actual = $this->teamCity->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure3()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException) == true (line 116)
    // if ($comparisonFailure instanceof \SebastianBergmann\Comparator\ComparisonFailure) == true (line 119)
    // if ($expectedString === null || empty($expectedString)) == false (line 122)
    // if ($actualString === null || empty($actualString)) == false (line 128)
    // if ($actualString !== null && $expectedString !== null) == true (line 132)

    $actual = $this->teamCity->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure4()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException) == true (line 116)
    // if ($comparisonFailure instanceof \SebastianBergmann\Comparator\ComparisonFailure) == true (line 119)
    // if ($expectedString === null || empty($expectedString)) == false (line 122)
    // if ($actualString === null || empty($actualString)) == true (line 128)
    // if ($actualString !== null && $expectedString !== null) == false (line 132)

    $actual = $this->teamCity->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure5()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException) == true (line 116)
    // if ($comparisonFailure instanceof \SebastianBergmann\Comparator\ComparisonFailure) == true (line 119)
    // if ($expectedString === null || empty($expectedString)) == false (line 122)
    // if ($actualString === null || empty($actualString)) == true (line 128)
    // if ($actualString !== null && $expectedString !== null) == true (line 132)

    $actual = $this->teamCity->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure6()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException) == true (line 116)
    // if ($comparisonFailure instanceof \SebastianBergmann\Comparator\ComparisonFailure) == true (line 119)
    // if ($expectedString === null || empty($expectedString)) == true (line 122)
    // if ($actualString === null || empty($actualString)) == false (line 128)
    // if ($actualString !== null && $expectedString !== null) == false (line 132)

    $actual = $this->teamCity->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure7()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException) == true (line 116)
    // if ($comparisonFailure instanceof \SebastianBergmann\Comparator\ComparisonFailure) == true (line 119)
    // if ($expectedString === null || empty($expectedString)) == true (line 122)
    // if ($actualString === null || empty($actualString)) == false (line 128)
    // if ($actualString !== null && $expectedString !== null) == true (line 132)

    $actual = $this->teamCity->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure8()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException) == true (line 116)
    // if ($comparisonFailure instanceof \SebastianBergmann\Comparator\ComparisonFailure) == true (line 119)
    // if ($expectedString === null || empty($expectedString)) == true (line 122)
    // if ($actualString === null || empty($actualString)) == true (line 128)
    // if ($actualString !== null && $expectedString !== null) == false (line 132)

    $actual = $this->teamCity->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure9()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException) == true (line 116)
    // if ($comparisonFailure instanceof \SebastianBergmann\Comparator\ComparisonFailure) == true (line 119)
    // if ($expectedString === null || empty($expectedString)) == true (line 122)
    // if ($actualString === null || empty($actualString)) == true (line 128)
    // if ($actualString !== null && $expectedString !== null) == true (line 132)

    $actual = $this->teamCity->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddIncompleteTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->teamCity->addIncompleteTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRiskyTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->teamCity->addRiskyTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddSkippedTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->startedTestName !== $testName) == false (line 182)

    $actual = $this->teamCity->addSkippedTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddSkippedTest1()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->startedTestName !== $testName) == true (line 182)

    $actual = $this->teamCity->addSkippedTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrintIgnoredTest0()
{
    $testName = m::mock('UntypedParameter_testName_');
    $t = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    $actual = $this->teamCity->printIgnoredTest($testName, $t);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite0()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == false (line 212)
    // if (!$this->isSummaryTestCountPrinted) == false (line 218)
    // if (empty($suiteName)) == false (line 229)
    // if (\class_exists($suiteName, false)) == false (line 235)
    // if (\count($split) === 2 && \method_exists($split[0], $split[1])) == false (line 241)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite1()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == false (line 212)
    // if (!$this->isSummaryTestCountPrinted) == false (line 218)
    // if (empty($suiteName)) == false (line 229)
    // if (\class_exists($suiteName, false)) == false (line 235)
    // if (\count($split) === 2 && \method_exists($split[0], $split[1])) == true (line 241)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite2()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == false (line 212)
    // if (!$this->isSummaryTestCountPrinted) == false (line 218)
    // if (empty($suiteName)) == false (line 229)
    // if (\class_exists($suiteName, false)) == true (line 235)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite3()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == false (line 212)
    // if (!$this->isSummaryTestCountPrinted) == false (line 218)
    // if (empty($suiteName)) == true (line 229)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite4()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == false (line 212)
    // if (!$this->isSummaryTestCountPrinted) == true (line 218)
    // if (empty($suiteName)) == false (line 229)
    // if (\class_exists($suiteName, false)) == false (line 235)
    // if (\count($split) === 2 && \method_exists($split[0], $split[1])) == false (line 241)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite5()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == false (line 212)
    // if (!$this->isSummaryTestCountPrinted) == true (line 218)
    // if (empty($suiteName)) == false (line 229)
    // if (\class_exists($suiteName, false)) == false (line 235)
    // if (\count($split) === 2 && \method_exists($split[0], $split[1])) == true (line 241)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite6()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == false (line 212)
    // if (!$this->isSummaryTestCountPrinted) == true (line 218)
    // if (empty($suiteName)) == false (line 229)
    // if (\class_exists($suiteName, false)) == true (line 235)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite7()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == false (line 212)
    // if (!$this->isSummaryTestCountPrinted) == true (line 218)
    // if (empty($suiteName)) == true (line 229)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite8()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == true (line 212)
    // if (!$this->isSummaryTestCountPrinted) == false (line 218)
    // if (empty($suiteName)) == false (line 229)
    // if (\class_exists($suiteName, false)) == false (line 235)
    // if (\count($split) === 2 && \method_exists($split[0], $split[1])) == false (line 241)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite9()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == true (line 212)
    // if (!$this->isSummaryTestCountPrinted) == false (line 218)
    // if (empty($suiteName)) == false (line 229)
    // if (\class_exists($suiteName, false)) == false (line 235)
    // if (\count($split) === 2 && \method_exists($split[0], $split[1])) == true (line 241)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite10()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == true (line 212)
    // if (!$this->isSummaryTestCountPrinted) == false (line 218)
    // if (empty($suiteName)) == false (line 229)
    // if (\class_exists($suiteName, false)) == true (line 235)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite11()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == true (line 212)
    // if (!$this->isSummaryTestCountPrinted) == false (line 218)
    // if (empty($suiteName)) == true (line 229)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite12()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == true (line 212)
    // if (!$this->isSummaryTestCountPrinted) == true (line 218)
    // if (empty($suiteName)) == false (line 229)
    // if (\class_exists($suiteName, false)) == false (line 235)
    // if (\count($split) === 2 && \method_exists($split[0], $split[1])) == false (line 241)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite13()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == true (line 212)
    // if (!$this->isSummaryTestCountPrinted) == true (line 218)
    // if (empty($suiteName)) == false (line 229)
    // if (\class_exists($suiteName, false)) == false (line 235)
    // if (\count($split) === 2 && \method_exists($split[0], $split[1])) == true (line 241)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite14()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == true (line 212)
    // if (!$this->isSummaryTestCountPrinted) == true (line 218)
    // if (empty($suiteName)) == false (line 229)
    // if (\class_exists($suiteName, false)) == true (line 235)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite15()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\stripos(\ini_get('disable_functions'), 'getmypid') === false) == true (line 212)
    // if (!$this->isSummaryTestCountPrinted) == true (line 218)
    // if (empty($suiteName)) == true (line 229)

    $actual = $this->teamCity->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTestSuite0()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteName)) == false (line 260)
    // if (!\class_exists($suiteName, false)) == false (line 266)

    $actual = $this->teamCity->endTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTestSuite1()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteName)) == false (line 260)
    // if (!\class_exists($suiteName, false)) == true (line 266)
    // if (\count($split) === 2 && \method_exists($split[0], $split[1])) == false (line 269)

    $actual = $this->teamCity->endTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTestSuite2()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteName)) == false (line 260)
    // if (!\class_exists($suiteName, false)) == true (line 266)
    // if (\count($split) === 2 && \method_exists($split[0], $split[1])) == true (line 269)

    $actual = $this->teamCity->endTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTestSuite3()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($suiteName)) == true (line 260)

    $actual = $this->teamCity->endTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == false (line 290)

    $actual = $this->teamCity->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest1()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($test instanceof \PHPUnit\Framework\TestCase) == true (line 290)

    $actual = $this->teamCity->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->teamCity->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
