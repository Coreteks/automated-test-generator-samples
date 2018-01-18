<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\ExceptionMessageRegularExpression;

class ExceptionMessageRegularExpressionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_expected = null;
/**
* @var \PHPUnit\Framework\Constraint\ExceptionMessageRegularExpression
*/
protected $exceptionMessageRegularExpression;

public function setUp()
{
    parent::setUp();

    $this->_expected = null;
    $this->exceptionMessageRegularExpression = new \PHPUnit\Framework\Constraint\ExceptionMessageRegularExpression($this->_expected);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->exceptionMessageRegularExpression->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
