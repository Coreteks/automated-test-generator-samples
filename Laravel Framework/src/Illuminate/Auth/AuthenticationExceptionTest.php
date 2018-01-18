<?php

namespace tests\Illuminate\Auth;

use Illuminate\Auth\AuthenticationException;
use Mockery as m;

class AuthenticationExceptionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var array
*/
protected $_guards = [];
/**
* @var \Illuminate\Auth\AuthenticationException
*/
protected $authenticationException;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_guards = [];
    $this->authenticationException = new \Illuminate\Auth\AuthenticationException($this->_message, $this->_guards);
}

public function testGuards0()
{
    // TODO: Your mock expectations here

    $actual = $this->authenticationException->guards();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
