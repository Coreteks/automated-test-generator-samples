<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\ExceptionMessage;

class ExceptionMessageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_expected = null;
/**
* @var \PHPUnit\Framework\Constraint\ExceptionMessage
*/
protected $exceptionMessage;

public function setUp()
{
    parent::setUp();

    $this->_expected = null;
    $this->exceptionMessage = new \PHPUnit\Framework\Constraint\ExceptionMessage($this->_expected);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->expectedMessage === '') == false (line 34)

    $actual = $this->exceptionMessage->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->expectedMessage === '') == true (line 34)

    $actual = $this->exceptionMessage->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
