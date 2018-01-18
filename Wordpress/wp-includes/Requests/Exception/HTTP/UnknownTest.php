<?php

namespace tests;

use Mockery as m;
use Requests_Exception_HTTP_Unknown;

class Requests_Exception_HTTP_UnknownTest extends \PHPUnit_Framework_TestCase
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
* @var \Requests_Exception_HTTP_Unknown
*/
protected $requests_Exception_HTTP_Unknown;

public function setUp()
{
    parent::setUp();

    $this->_reason = null;
    $this->_data = null;
    $this->requests_Exception_HTTP_Unknown = new \Requests_Exception_HTTP_Unknown($this->_reason, $this->_data);
}
}
