<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\ExceptionCode;

class ExceptionCodeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_expected = null;
/**
* @var \PHPUnit\Framework\Constraint\ExceptionCode
*/
protected $exceptionCode;

public function setUp()
{
    parent::setUp();

    $this->_expected = null;
    $this->exceptionCode = new \PHPUnit\Framework\Constraint\ExceptionCode($this->_expected);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->exceptionCode->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
