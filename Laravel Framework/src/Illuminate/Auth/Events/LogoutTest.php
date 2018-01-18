<?php

namespace tests\Illuminate\Auth\Events;

use Illuminate\Auth\Events\Logout;
use Mockery as m;

class LogoutTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_user = null;
/**
* @var \Illuminate\Auth\Events\Logout
*/
protected $logout;

public function setUp()
{
    parent::setUp();

    $this->_user = null;
    $this->logout = new \Illuminate\Auth\Events\Logout($this->_user);
}
}
