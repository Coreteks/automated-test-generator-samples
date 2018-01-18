<?php

namespace tests\Illuminate\Auth\Passwords;

use Illuminate\Auth\Passwords\PasswordResetServiceProvider;
use Mockery as m;

class PasswordResetServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Auth\Passwords\PasswordResetServiceProvider
*/
protected $passwordResetServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->passwordResetServiceProvider = new \Illuminate\Auth\Passwords\PasswordResetServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->passwordResetServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->passwordResetServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
