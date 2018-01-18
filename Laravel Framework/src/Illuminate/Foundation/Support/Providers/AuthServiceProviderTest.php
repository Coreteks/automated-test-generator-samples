<?php

namespace tests\Illuminate\Foundation\Support\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider;
use Mockery as m;

class AuthServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Support\Providers\AuthServiceProvider
*/
protected $authServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->authServiceProvider = new \Illuminate\Foundation\Support\Providers\AuthServiceProvider();
}

public function testRegisterPolicies0()
{
    // TODO: Your mock expectations here

    $actual = $this->authServiceProvider->registerPolicies();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterPolicies1()
{
    // TODO: Your mock expectations here

    $actual = $this->authServiceProvider->registerPolicies();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->authServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
