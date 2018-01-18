<?php

namespace tests\Symfony\Bridge\PhpUnit\Legacy;

use Mockery as m;
use Symfony\Bridge\PhpUnit\Legacy\CoverageListenerTrait;

class CoverageListenerTraitTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_sutFqcnResolver = null;
/**
* @var mixed
*/
protected $_warningOnSutNotFound = null;
/**
* @var \Symfony\Bridge\PhpUnit\Legacy\CoverageListenerTrait
*/
protected $coverageListenerTrait;

public function setUp()
{
    parent::setUp();

    $this->_sutFqcnResolver = null;
    $this->_warningOnSutNotFound = null;
    $this->coverageListenerTrait = new \Symfony\Bridge\PhpUnit\Legacy\CoverageListenerTrait($this->_sutFqcnResolver, $this->_warningOnSutNotFound);
}

public function testStartTest0()
{
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if (!$sutFqcn) == false (line 55)
    // if (!class_exists($testClass, false)) == false (line 70)

    $actual = $this->coverageListenerTrait->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest1()
{
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if (!$sutFqcn) == false (line 55)
    // if (!class_exists($testClass, false)) == true (line 70)

    $actual = $this->coverageListenerTrait->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest2()
{
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if (!$sutFqcn) == true (line 55)
    // if ($this->warningOnSutNotFound) == false (line 56)

    $actual = $this->coverageListenerTrait->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest3()
{
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if (!$sutFqcn) == true (line 55)
    // if ($this->warningOnSutNotFound) == true (line 56)
    // if (method_exists($test->getTestResultObject(), 'addWarning') && class_exists(\PHPUnit\Framework\Warning::class)) == false (line 59)

    $actual = $this->coverageListenerTrait->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest4()
{
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if (!$sutFqcn) == true (line 55)
    // if ($this->warningOnSutNotFound) == true (line 56)
    // if (method_exists($test->getTestResultObject(), 'addWarning') && class_exists(\PHPUnit\Framework\Warning::class)) == true (line 59)

    $actual = $this->coverageListenerTrait->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest5()
{
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if (isset($annotations['class'][$annotation]) || isset($annotations['method'][$annotation])) == false (line 49)
    // if (!$sutFqcn) == false (line 55)
    // if (!class_exists($testClass, false)) == false (line 70)

    $actual = $this->coverageListenerTrait->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest6()
{
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if (isset($annotations['class'][$annotation]) || isset($annotations['method'][$annotation])) == false (line 49)
    // if (!$sutFqcn) == false (line 55)
    // if (!class_exists($testClass, false)) == true (line 70)

    $actual = $this->coverageListenerTrait->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest7()
{
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if (isset($annotations['class'][$annotation]) || isset($annotations['method'][$annotation])) == false (line 49)
    // if (!$sutFqcn) == true (line 55)
    // if ($this->warningOnSutNotFound) == false (line 56)

    $actual = $this->coverageListenerTrait->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest8()
{
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if (isset($annotations['class'][$annotation]) || isset($annotations['method'][$annotation])) == false (line 49)
    // if (!$sutFqcn) == true (line 55)
    // if ($this->warningOnSutNotFound) == true (line 56)
    // if (method_exists($test->getTestResultObject(), 'addWarning') && class_exists(\PHPUnit\Framework\Warning::class)) == false (line 59)

    $actual = $this->coverageListenerTrait->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest9()
{
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if (isset($annotations['class'][$annotation]) || isset($annotations['method'][$annotation])) == false (line 49)
    // if (!$sutFqcn) == true (line 55)
    // if ($this->warningOnSutNotFound) == true (line 56)
    // if (method_exists($test->getTestResultObject(), 'addWarning') && class_exists(\PHPUnit\Framework\Warning::class)) == true (line 59)

    $actual = $this->coverageListenerTrait->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest10()
{
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == false (line 40)
    // if (isset($annotations['class'][$annotation]) || isset($annotations['method'][$annotation])) == true (line 49)

    $actual = $this->coverageListenerTrait->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTest11()
{
    $test = m::mock('UntypedParameter_test_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$test instanceof \PHPUnit\Framework\TestCase) == true (line 40)

    $actual = $this->coverageListenerTrait->startTest($test);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->warnings) == false (line 108)

    $actual = $this->coverageListenerTrait->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->warnings) == false (line 108)

    $actual = $this->coverageListenerTrait->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->warnings) == true (line 108)

    $actual = $this->coverageListenerTrait->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
