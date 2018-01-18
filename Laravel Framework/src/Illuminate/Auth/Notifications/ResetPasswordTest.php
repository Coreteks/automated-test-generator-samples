<?php

namespace tests\Illuminate\Auth\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Mockery as m;

class ResetPasswordTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_token = null;
/**
* @var \Illuminate\Auth\Notifications\ResetPassword
*/
protected $resetPassword;

public function setUp()
{
    parent::setUp();

    $this->_token = null;
    $this->resetPassword = new \Illuminate\Auth\Notifications\ResetPassword($this->_token);
}

public function testVia0()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');

    // TODO: Your mock expectations here

    $actual = $this->resetPassword->via($notifiable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToMail0()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');

    // TODO: Your mock expectations here

    $actual = $this->resetPassword->toMail($notifiable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
