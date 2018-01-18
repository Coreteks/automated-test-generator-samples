<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\IncompleteTestCase;

class IncompleteTestCaseTest extends \PHPUnit_Framework_TestCase
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
* @var \PHPUnit\Framework\IncompleteTestCase
*/
protected $incompleteTestCase;

public function setUp()
{
    parent::setUp();

    $this->_className = null;
    $this->_methodName = null;
    $this->_message = null;
    $this->incompleteTestCase = new \PHPUnit\Framework\IncompleteTestCase($this->_className, $this->_methodName, $this->_message);
}

public function testGetMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->incompleteTestCase->getMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->incompleteTestCase->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
