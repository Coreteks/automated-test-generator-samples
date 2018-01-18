<?php

namespace tests\PHPUnit\Util\TestDox;

use Mockery as m;
use PHPUnit\Util\TestDox\XmlResultPrinter;

class XmlResultPrinterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_out = null;
/**
* @var \PHPUnit\Util\TestDox\XmlResultPrinter
*/
protected $xmlResultPrinter;

public function setUp()
{
    parent::setUp();

    $this->_out = null;
    $this->xmlResultPrinter = new \PHPUnit\Util\TestDox\XmlResultPrinter($this->_out);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->xmlResultPrinter->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddError0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->xmlResultPrinter->addError($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddWarning0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\Warning::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->xmlResultPrinter->addWarning($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFailure0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $e = m::mock(\PHPUnit\Framework\AssertionFailedError::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->xmlResultPrinter->addFailure($test, $e, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddIncompleteTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->xmlResultPrinter->addIncompleteTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddRiskyTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->xmlResultPrinter->addRiskyTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddSkippedTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $t = m::mock(\Throwable::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    $actual = $this->xmlResultPrinter->addSkippedTest($test, $t, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTestSuite0()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    $actual = $this->xmlResultPrinter->startTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTestSuite0()
{
    $suite = m::mock(\PHPUnit\Framework\TestSuite::class);

    // TODO: Your mock expectations here

    $actual = $this->xmlResultPrinter->endTestSuite($suite);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);

    // TODO: Your mock expectations here

    $actual = $this->xmlResultPrinter->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest0()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == false (line 207)
    // if ($this->exception !== null) == false (line 216)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest1()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == false (line 207)
    // if ($this->exception !== null) == true (line 216)
    // if ($this->exception instanceof \PHPUnit\Framework\Exception) == false (line 217)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest2()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == false (line 207)
    // if ($this->exception !== null) == true (line 216)
    // if ($this->exception instanceof \PHPUnit\Framework\Exception) == false (line 217)
    // if (isset($step['file']) && $step['file'] === $file) == false (line 227)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest3()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == false (line 207)
    // if ($this->exception !== null) == true (line 216)
    // if ($this->exception instanceof \PHPUnit\Framework\Exception) == false (line 217)
    // if (isset($step['file']) && $step['file'] === $file) == true (line 227)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest4()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == false (line 207)
    // if ($this->exception !== null) == true (line 216)
    // if ($this->exception instanceof \PHPUnit\Framework\Exception) == true (line 217)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest5()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == false (line 207)
    // if ($this->exception !== null) == true (line 216)
    // if ($this->exception instanceof \PHPUnit\Framework\Exception) == true (line 217)
    // if (isset($step['file']) && $step['file'] === $file) == false (line 227)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest6()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == false (line 207)
    // if ($this->exception !== null) == true (line 216)
    // if ($this->exception instanceof \PHPUnit\Framework\Exception) == true (line 217)
    // if (isset($step['file']) && $step['file'] === $file) == true (line 227)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest7()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == true (line 207)
    // if ($this->exception !== null) == false (line 216)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest8()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == true (line 207)
    // if ($this->exception !== null) == true (line 216)
    // if ($this->exception instanceof \PHPUnit\Framework\Exception) == false (line 217)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest9()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == true (line 207)
    // if ($this->exception !== null) == true (line 216)
    // if ($this->exception instanceof \PHPUnit\Framework\Exception) == false (line 217)
    // if (isset($step['file']) && $step['file'] === $file) == false (line 227)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest10()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == true (line 207)
    // if ($this->exception !== null) == true (line 216)
    // if ($this->exception instanceof \PHPUnit\Framework\Exception) == false (line 217)
    // if (isset($step['file']) && $step['file'] === $file) == true (line 227)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest11()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == true (line 207)
    // if ($this->exception !== null) == true (line 216)
    // if ($this->exception instanceof \PHPUnit\Framework\Exception) == true (line 217)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest12()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == true (line 207)
    // if ($this->exception !== null) == true (line 216)
    // if ($this->exception instanceof \PHPUnit\Framework\Exception) == true (line 217)
    // if (isset($step['file']) && $step['file'] === $file) == false (line 227)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest13()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 181)
    // if (isset($inlineAnnotations['given']) && isset($inlineAnnotations['when']) && isset($inlineAnnotations['then'])) == true (line 207)
    // if ($this->exception !== null) == true (line 216)
    // if ($this->exception instanceof \PHPUnit\Framework\Exception) == true (line 217)
    // if (isset($step['file']) && $step['file'] === $file) == true (line 227)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndTest14()
{
    $test = m::mock(\PHPUnit\Framework\Test::class);
    $time = m::mock('UntypedParameter_time_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == true (line 181)

    $actual = $this->xmlResultPrinter->endTest($test, $time);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
