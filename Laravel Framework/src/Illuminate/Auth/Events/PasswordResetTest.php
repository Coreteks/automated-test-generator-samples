<?php

namespace tests\Illuminate\Auth\Events;

use Illuminate\Auth\Events\PasswordReset;
use Mockery as m;

class PasswordResetTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_user = null;
/**
* @var \Illuminate\Auth\Events\PasswordReset
*/
protected $passwordReset;

public function setUp()
{
    parent::setUp();

    $this->_user = null;
    $this->passwordReset = new \Illuminate\Auth\Events\PasswordReset($this->_user);
}
}
