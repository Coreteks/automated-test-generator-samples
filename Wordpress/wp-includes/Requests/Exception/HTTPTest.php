<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP;

class Requests_Exception_HTTPTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_reason = null;
/**
* @var mixed
*/
protected $_data = null;
/**
* @var \Requests_Exception_HTTP
*/
protected $requests_Exception_HTTP;

public function setUp()
{
    parent::setUp();

    $this->_reason = null;
    $this->_data = null;
    $this->requests_Exception_HTTP = new \Requests_Exception_HTTP($this->_reason, $this->_data);
}

public function testGetReason0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Exception_HTTP->getReason();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_class0()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$code) == false (line 60)
    // if (\class_exists($class)) == false (line 65)

    $actual = $this->requests_Exception_HTTP->get_class($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_class1()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$code) == false (line 60)
    // if (\class_exists($class)) == true (line 65)

    $actual = $this->requests_Exception_HTTP->get_class($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_class2()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$code) == true (line 60)

    $actual = $this->requests_Exception_HTTP->get_class($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
