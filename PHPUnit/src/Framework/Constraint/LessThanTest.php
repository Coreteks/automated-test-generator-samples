<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\LessThan;

class LessThanTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_value = null;
/**
* @var \PHPUnit\Framework\Constraint\LessThan
*/
protected $lessThan;

public function setUp()
{
    parent::setUp();

    $this->_value = null;
    $this->lessThan = new \PHPUnit\Framework\Constraint\LessThan($this->_value);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->lessThan->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
