<?php

namespace tests;

use Mockery as m;
use Requests_Exception;

class Requests_ExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var mixed
*/
protected $_type = null;
/**
* @var mixed
*/
protected $_data = null;
/**
* @var mixed
*/
protected $_code = null;
/**
* @var \Requests_Exception
*/
protected $requests_Exception;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_type = null;
    $this->_data = null;
    $this->_code = null;
    $this->requests_Exception = new \Requests_Exception($this->_message, $this->_type, $this->_data, $this->_code);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Exception->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetData0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Exception->getData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
