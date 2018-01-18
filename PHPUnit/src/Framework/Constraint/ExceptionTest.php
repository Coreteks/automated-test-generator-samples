<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_className = null;
/**
* @var \PHPUnit\Framework\Constraint\Exception
*/
protected $exception;

public function setUp()
{
    parent::setUp();

    $this->_className = null;
    $this->exception = new \PHPUnit\Framework\Constraint\Exception($this->_className);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->exception->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
