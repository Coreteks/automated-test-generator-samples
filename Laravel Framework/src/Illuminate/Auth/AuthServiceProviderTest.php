<?php

namespace tests\Illuminate\Auth;

use Illuminate\Auth\AuthServiceProvider;
use Mockery as m;

class AuthServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Auth\AuthServiceProvider
*/
protected $authServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->authServiceProvider = new \Illuminate\Auth\AuthServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->authServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
