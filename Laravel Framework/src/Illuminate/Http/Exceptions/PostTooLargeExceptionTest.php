<?php

namespace tests\Illuminate\Http\Exceptions;

use Exception;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Mockery as m;

class PostTooLargeExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var \Mockery\MockInterface
*/
protected $_previous;
/**
* @var array
*/
protected $_headers = [];
/**
* @var mixed
*/
protected $_code = null;
/**
* @var \Illuminate\Http\Exceptions\PostTooLargeException
*/
protected $postTooLargeException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_previous = m::mock(\Exception::class);
    $this->_headers = [];
    $this->_code = null;
    $this->postTooLargeException = new \Illuminate\Http\Exceptions\PostTooLargeException($this->_message, $this->_previous, $this->_headers, $this->_code);
}
}
