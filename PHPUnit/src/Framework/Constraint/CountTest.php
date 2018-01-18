<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\Count;

class CountTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_expected = null;
/**
* @var \PHPUnit\Framework\Constraint\Count
*/
protected $count;

public function setUp()
{
    parent::setUp();

    $this->_expected = null;
    $this->count = new \PHPUnit\Framework\Constraint\Count($this->_expected);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->count->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
