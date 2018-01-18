<?php

namespace tests\Illuminate\Auth\Events;

use Illuminate\Auth\Events\Login;
use Mockery as m;

class LoginTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_user = null;
/**
* @var mixed
*/
protected $_remember = null;
/**
* @var \Illuminate\Auth\Events\Login
*/
protected $login;

public function setUp()
{
    parent::setUp();

    $this->_user = null;
    $this->_remember = null;
    $this->login = new \Illuminate\Auth\Events\Login($this->_user, $this->_remember);
}
}
