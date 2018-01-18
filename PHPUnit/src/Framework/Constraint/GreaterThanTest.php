<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\GreaterThan;

class GreaterThanTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_value = null;
/**
* @var \PHPUnit\Framework\Constraint\GreaterThan
*/
protected $greaterThan;

public function setUp()
{
    parent::setUp();

    $this->_value = null;
    $this->greaterThan = new \PHPUnit\Framework\Constraint\GreaterThan($this->_value);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->greaterThan->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
