<?php

namespace tests\Illuminate\Auth\Events;

use Illuminate\Auth\Events\Registered;
use Mockery as m;

class RegisteredTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_user = null;
/**
* @var \Illuminate\Auth\Events\Registered
*/
protected $registered;

public function setUp()
{
    parent::setUp();

    $this->_user = null;
    $this->registered = new \Illuminate\Auth\Events\Registered($this->_user);
}
}
