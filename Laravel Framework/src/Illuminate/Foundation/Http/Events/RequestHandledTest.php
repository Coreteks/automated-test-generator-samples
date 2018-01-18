<?php

namespace tests\Illuminate\Foundation\Http\Events;

use Illuminate\Foundation\Http\Events\RequestHandled;
use Mockery as m;

class RequestHandledTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_request = null;
/**
* @var mixed
*/
protected $_response = null;
/**
* @var \Illuminate\Foundation\Http\Events\RequestHandled
*/
protected $requestHandled;

public function setUp()
{
    parent::setUp();

    $this->_request = null;
    $this->_response = null;
    $this->requestHandled = new \Illuminate\Foundation\Http\Events\RequestHandled($this->_request, $this->_response);
}
}
