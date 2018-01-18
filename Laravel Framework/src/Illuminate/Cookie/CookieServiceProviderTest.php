<?php

namespace tests\Illuminate\Cookie;

use Illuminate\Cookie\CookieServiceProvider;
use Mockery as m;

class CookieServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Cookie\CookieServiceProvider
*/
protected $cookieServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->cookieServiceProvider = new \Illuminate\Cookie\CookieServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->cookieServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
