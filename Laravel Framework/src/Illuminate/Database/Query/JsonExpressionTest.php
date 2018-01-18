<?php

namespace tests\Illuminate\Database\Query;

use Illuminate\Database\Query\JsonExpression;
use Mockery as m;

class JsonExpressionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_value = null;
/**
* @var \Illuminate\Database\Query\JsonExpression
*/
protected $jsonExpression;

public function setUp()
{
    parent::setUp();

    $this->_value = null;
    $this->jsonExpression = new \Illuminate\Database\Query\JsonExpression($this->_value);
}

public function testGetValue0()
{
    // TODO: Your mock expectations here

    $actual = $this->jsonExpression->getValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->jsonExpression->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
