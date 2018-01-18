<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestFailure;

class TestFailureTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_failedTest;
/**
* @var mixed
*/
protected $_t = null;
/**
* @var \PHPUnit\Framework\TestFailure
*/
protected $testFailure;

public function setUp()
{
    parent::setUp();

    $this->_failedTest = m::mock(\PHPUnit\Framework\Test::class);
    $this->_t = null;
    $this->testFailure = new \PHPUnit\Framework\TestFailure($this->_failedTest, $this->_t);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->testFailure->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExceptionAsString0()
{
    // TODO: Your mock expectations here

    $actual = $this->testFailure->getExceptionAsString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExceptionToString0()
{
    $e = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\SelfDescribing) == false (line 92)
    // if ($e instanceof \PHPUnit\Framework\Error\Error) == false (line 106)
    // if ($e instanceof \PHPUnit\Framework\ExceptionWrapper) == false (line 110)

    $actual = $this->testFailure->exceptionToString($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExceptionToString1()
{
    $e = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\SelfDescribing) == false (line 92)
    // if ($e instanceof \PHPUnit\Framework\Error\Error) == false (line 106)
    // if ($e instanceof \PHPUnit\Framework\ExceptionWrapper) == true (line 110)

    $actual = $this->testFailure->exceptionToString($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExceptionToString2()
{
    $e = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\SelfDescribing) == false (line 92)
    // if ($e instanceof \PHPUnit\Framework\Error\Error) == true (line 106)

    $actual = $this->testFailure->exceptionToString($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExceptionToString3()
{
    $e = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\SelfDescribing) == true (line 92)
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException && $e->getComparisonFailure()) == false (line 95)
    // if (!empty($buffer)) == false (line 99)

    $actual = $this->testFailure->exceptionToString($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExceptionToString4()
{
    $e = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\SelfDescribing) == true (line 92)
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException && $e->getComparisonFailure()) == false (line 95)
    // if (!empty($buffer)) == true (line 99)

    $actual = $this->testFailure->exceptionToString($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExceptionToString5()
{
    $e = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\SelfDescribing) == true (line 92)
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException && $e->getComparisonFailure()) == true (line 95)
    // if (!empty($buffer)) == false (line 99)

    $actual = $this->testFailure->exceptionToString($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExceptionToString6()
{
    $e = m::mock(\Throwable::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($e instanceof \PHPUnit\Framework\SelfDescribing) == true (line 92)
    // if ($e instanceof \PHPUnit\Framework\ExpectationFailedException && $e->getComparisonFailure()) == true (line 95)
    // if (!empty($buffer)) == true (line 99)

    $actual = $this->testFailure->exceptionToString($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTestName0()
{
    // TODO: Your mock expectations here

    $actual = $this->testFailure->getTestName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFailedTest0()
{
    // TODO: Your mock expectations here

    $actual = $this->testFailure->failedTest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testThrownException0()
{
    // TODO: Your mock expectations here

    $actual = $this->testFailure->thrownException();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExceptionMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->testFailure->exceptionMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFailure0()
{
    // TODO: Your mock expectations here

    $actual = $this->testFailure->isFailure();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
