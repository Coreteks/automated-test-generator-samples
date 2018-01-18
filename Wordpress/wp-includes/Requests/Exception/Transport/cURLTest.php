<?php

namespace tests;

use Mockery as m;
use Requests_Exception_Transport_cURL;

class Requests_Exception_Transport_cURLTest extends \PHPUnit_Framework_TestCase
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
* @var \Requests_Exception_Transport_cURL
*/
protected $requests_Exception_Transport_cURL;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_type = null;
    $this->_data = null;
    $this->_code = null;
    $this->requests_Exception_Transport_cURL = new \Requests_Exception_Transport_cURL($this->_message, $this->_type, $this->_data, $this->_code);
}

public function testGetReason0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Exception_Transport_cURL->getReason();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
