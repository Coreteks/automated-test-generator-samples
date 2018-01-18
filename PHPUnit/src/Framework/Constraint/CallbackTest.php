<?php

namespace tests\PHPUnit\Framework\Constraint;

use Mockery as m;
use PHPUnit\Framework\Constraint\Callback;

class CallbackTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_callback = null;
/**
* @var \PHPUnit\Framework\Constraint\Callback
*/
protected $callback;

public function setUp()
{
    parent::setUp();

    $this->_callback = null;
    $this->callback = new \PHPUnit\Framework\Constraint\Callback($this->_callback);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->callback->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
