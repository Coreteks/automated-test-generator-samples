<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Framework\TestSuiteIterator;

class TestSuiteIteratorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_testSuite;
/**
* @var \PHPUnit\Framework\TestSuiteIterator
*/
protected $testSuiteIterator;

public function setUp()
{
    parent::setUp();

    $this->_testSuite = m::mock(\PHPUnit\Framework\TestSuite::class);
    $this->testSuiteIterator = new \PHPUnit\Framework\TestSuiteIterator($this->_testSuite);
}

public function testRewind0()
{
    // TODO: Your mock expectations here

    $actual = $this->testSuiteIterator->rewind();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValid0()
{
    // TODO: Your mock expectations here

    $actual = $this->testSuiteIterator->valid();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->testSuiteIterator->key();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCurrent0()
{
    // TODO: Your mock expectations here

    $actual = $this->testSuiteIterator->current();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNext0()
{
    // TODO: Your mock expectations here

    $actual = $this->testSuiteIterator->next();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetChildren0()
{
    // TODO: Your mock expectations here

    $actual = $this->testSuiteIterator->getChildren();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasChildren0()
{
    // TODO: Your mock expectations here

    $actual = $this->testSuiteIterator->hasChildren();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
