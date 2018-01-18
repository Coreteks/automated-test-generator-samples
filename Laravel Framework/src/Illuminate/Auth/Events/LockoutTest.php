<?php

namespace tests\Illuminate\Auth\Events;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Http\Request;
use Mockery as m;

class LockoutTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_request;
/**
* @var \Illuminate\Auth\Events\Lockout
*/
protected $lockout;

public function setUp()
{
    parent::setUp();

    $this->_request = m::mock(\Illuminate\Http\Request::class);
    $this->lockout = new \Illuminate\Auth\Events\Lockout($this->_request);
}
}
