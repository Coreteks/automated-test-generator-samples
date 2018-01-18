<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\RegularExpression;

class RegularExpressionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_pattern = null;
/**
* @var \PHPUnit\Framework\Constraint\RegularExpression
*/
protected $regularExpression;

public function setUp()
{
    parent::setUp();

    $this->_pattern = null;
    $this->regularExpression = new \PHPUnit\Framework\Constraint\RegularExpression($this->_pattern);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->regularExpression->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
