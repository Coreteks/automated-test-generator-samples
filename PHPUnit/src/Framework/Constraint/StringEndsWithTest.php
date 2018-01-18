<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\StringEndsWith;

class StringEndsWithTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_suffix = null;
/**
* @var \PHPUnit\Framework\Constraint\StringEndsWith
*/
protected $stringEndsWith;

public function setUp()
{
    parent::setUp();

    $this->_suffix = null;
    $this->stringEndsWith = new \PHPUnit\Framework\Constraint\StringEndsWith($this->_suffix);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->stringEndsWith->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
