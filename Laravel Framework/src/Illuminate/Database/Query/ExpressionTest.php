<?php

namespace tests\Illuminate\Database\Query;

use Illuminate\Database\Query\Expression;
use Mockery as m;

class ExpressionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_value = null;
/**
* @var \Illuminate\Database\Query\Expression
*/
protected $expression;

public function setUp()
{
    parent::setUp();

    $this->_value = null;
    $this->expression = new \Illuminate\Database\Query\Expression($this->_value);
}

public function testGetValue0()
{
    // TODO: Your mock expectations here

    $actual = $this->expression->getValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->expression->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
