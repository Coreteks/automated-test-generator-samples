<?php

namespace tests\PHPUnit\Framework;

use Exception;
use Mockery as m;
use PHPUnit\Framework\ExpectationFailedException;
use SebastianBergmann\Comparator\ComparisonFailure;

class ExpectationFailedExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var \Mockery\MockInterface
*/
protected $_comparisonFailure;
/**
* @var \Mockery\MockInterface
*/
protected $_previous;
/**
* @var \PHPUnit\Framework\ExpectationFailedException
*/
protected $expectationFailedException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_comparisonFailure = m::mock(\SebastianBergmann\Comparator\ComparisonFailure::class);
    $this->_previous = m::mock(\Exception::class);
    $this->expectationFailedException = new \PHPUnit\Framework\ExpectationFailedException($this->_message, $this->_comparisonFailure, $this->_previous);
}

public function testGetComparisonFailure0()
{
    // TODO: Your mock expectations here

    $actual = $this->expectationFailedException->getComparisonFailure();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
