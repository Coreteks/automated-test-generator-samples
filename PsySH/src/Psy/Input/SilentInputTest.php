<?php

namespace tests\Psy\Input;

use Mockery as m;
use Psy\Input\SilentInput;

class SilentInputTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_inputString = null;
/**
* @var \Psy\Input\SilentInput
*/
protected $silentInput;

public function setUp()
{
    parent::setUp();

    $this->_inputString = null;
    $this->silentInput = new \Psy\Input\SilentInput($this->_inputString);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->silentInput->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
