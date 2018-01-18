<?php

namespace tests\PHPUnit\Framework;

use Mockery as m;
use PHPUnit\Framework\ExceptionWrapper;
use Throwable;

class ExceptionWrapperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_t;
/**
* @var \PHPUnit\Framework\ExceptionWrapper
*/
protected $exceptionWrapper;

public function setUp()
{
    parent::setUp();

    $this->_t = m::mock(\Throwable::class);
    $this->exceptionWrapper = new \PHPUnit\Framework\ExceptionWrapper($this->_t);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($trace = \PHPUnit\Util\Filter::getFilteredStacktrace($this)) == false (line 69)
    // if ($this->previous) == false (line 73)

    $actual = $this->exceptionWrapper->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($trace = \PHPUnit\Util\Filter::getFilteredStacktrace($this)) == false (line 69)
    // if ($this->previous) == true (line 73)

    $actual = $this->exceptionWrapper->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($trace = \PHPUnit\Util\Filter::getFilteredStacktrace($this)) == true (line 69)
    // if ($this->previous) == false (line 73)

    $actual = $this->exceptionWrapper->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($trace = \PHPUnit\Util\Filter::getFilteredStacktrace($this)) == true (line 69)
    // if ($this->previous) == true (line 73)

    $actual = $this->exceptionWrapper->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetClassName0()
{
    // TODO: Your mock expectations here

    $actual = $this->exceptionWrapper->getClassName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPreviousWrapped0()
{
    // TODO: Your mock expectations here

    $actual = $this->exceptionWrapper->getPreviousWrapped();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
