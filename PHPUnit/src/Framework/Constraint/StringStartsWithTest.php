<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\StringStartsWith;

class StringStartsWithTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_prefix = null;
/**
* @var \PHPUnit\Framework\Constraint\StringStartsWith
*/
protected $stringStartsWith;

public function setUp()
{
    parent::setUp();

    $this->_prefix = null;
    $this->stringStartsWith = new \PHPUnit\Framework\Constraint\StringStartsWith($this->_prefix);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->stringStartsWith->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
