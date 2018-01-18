<?php

namespace tests\Illuminate\Session;

use Illuminate\Session\SessionServiceProvider;
use Mockery as m;

class SessionServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Session\SessionServiceProvider
*/
protected $sessionServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->sessionServiceProvider = new \Illuminate\Session\SessionServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->sessionServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
