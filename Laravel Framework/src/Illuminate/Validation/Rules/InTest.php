<?php

namespace tests\Illuminate\Validation\Rules;

use Illuminate\Validation\Rules\In;
use Mockery as m;

class InTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_values = [];
/**
* @var \Illuminate\Validation\Rules\In
*/
protected $in;

public function setUp()
{
    parent::setUp();

    $this->_values = [];
    $this->in = new \Illuminate\Validation\Rules\In($this->_values);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->in->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
