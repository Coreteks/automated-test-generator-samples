<?php

namespace tests\PHPUnit\Framework\Error;

use Exception;
use Mockery as m;
use PHPUnit\Framework\Error\Error;

class ErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var mixed
*/
protected $_code = null;
/**
* @var mixed
*/
protected $_file = null;
/**
* @var mixed
*/
protected $_line = null;
/**
* @var \Mockery\MockInterface
*/
protected $_previous;
/**
* @var \PHPUnit\Framework\Error\Error
*/
protected $error;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_code = null;
    $this->_file = null;
    $this->_line = null;
    $this->_previous = m::mock(\Exception::class);
    $this->error = new \PHPUnit\Framework\Error\Error($this->_message, $this->_code, $this->_file, $this->_line, $this->_previous);
}
}
