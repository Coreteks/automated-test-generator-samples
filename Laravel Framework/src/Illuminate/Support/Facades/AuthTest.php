<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Auth;
use Mockery as m;

class AuthTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Auth
*/
protected $auth;

public function setUp()
{
    parent::setUp();

    $this->auth = new \Illuminate\Support\Facades\Auth();
}

public function testRoutes0()
{
    // TODO: Your mock expectations here

    $actual = $this->auth->routes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
