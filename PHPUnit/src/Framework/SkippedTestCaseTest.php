<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\SkippedTestCase;

class SkippedTestCaseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_className = null;
/**
* @var mixed
*/
protected $_methodName = null;
/**
* @var mixed
*/
protected $_message = null;
/**
* @var \PHPUnit\Framework\SkippedTestCase
*/
protected $skippedTestCase;

public function setUp()
{
    parent::setUp();

    $this->_className = null;
    $this->_methodName = null;
    $this->_message = null;
    $this->skippedTestCase = new \PHPUnit\Framework\SkippedTestCase($this->_className, $this->_methodName, $this->_message);
}

public function testGetMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->skippedTestCase->getMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->skippedTestCase->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
