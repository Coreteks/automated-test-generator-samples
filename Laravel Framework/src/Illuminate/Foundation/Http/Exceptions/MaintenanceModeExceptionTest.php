<?php

namespace tests\Illuminate\Foundation\Http\Exceptions;

use Exception;
use Illuminate\Foundation\Http\Exceptions\MaintenanceModeException;
use Mockery as m;

class MaintenanceModeExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_time = null;
/**
* @var mixed
*/
protected $_retryAfter = null;
/**
* @var mixed
*/
protected $_message = null;
/**
* @var \Mockery\MockInterface
*/
protected $_previous;
/**
* @var mixed
*/
protected $_code = null;
/**
* @var \Illuminate\Foundation\Http\Exceptions\MaintenanceModeException
*/
protected $maintenanceModeException;

public function setUp()
{
    parent::setUp();

    $this->_time = null;
    $this->_retryAfter = null;
    $this->_message = null;
    $this->_previous = m::mock(\Exception::class);
    $this->_code = null;
    $this->maintenanceModeException = new \Illuminate\Foundation\Http\Exceptions\MaintenanceModeException($this->_time, $this->_retryAfter, $this->_message, $this->_previous, $this->_code);
}
}
