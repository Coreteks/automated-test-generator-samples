<?php

namespace tests\Illuminate\Foundation\Bootstrap;

use Illuminate\Foundation\Bootstrap\RegisterProviders;
use Mockery as m;

class RegisterProvidersTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Bootstrap\RegisterProviders
*/
protected $registerProviders;

public function setUp()
{
    parent::setUp();

    $this->registerProviders = new \Illuminate\Foundation\Bootstrap\RegisterProviders();
}

public function testBootstrap0()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    $actual = $this->registerProviders->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
