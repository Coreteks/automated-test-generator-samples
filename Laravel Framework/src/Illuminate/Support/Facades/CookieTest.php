<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Cookie;
use Mockery as m;

class CookieTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Cookie
*/
protected $cookie;

public function setUp()
{
    parent::setUp();

    $this->cookie = new \Illuminate\Support\Facades\Cookie();
}

public function testHas0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->cookie->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->cookie->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
