<?php

namespace tests\Illuminate\Validation\Rules;

use Illuminate\Validation\Rules\NotIn;
use Mockery as m;

class NotInTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_values = [];
/**
* @var \Illuminate\Validation\Rules\NotIn
*/
protected $notIn;

public function setUp()
{
    parent::setUp();

    $this->_values = [];
    $this->notIn = new \Illuminate\Validation\Rules\NotIn($this->_values);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->notIn->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
