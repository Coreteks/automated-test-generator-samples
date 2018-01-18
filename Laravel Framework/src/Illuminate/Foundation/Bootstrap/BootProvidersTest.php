<?php

namespace tests\Illuminate\Foundation\Bootstrap;

use Illuminate\Foundation\Bootstrap\BootProviders;
use Mockery as m;

class BootProvidersTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Bootstrap\BootProviders
*/
protected $bootProviders;

public function setUp()
{
    parent::setUp();

    $this->bootProviders = new \Illuminate\Foundation\Bootstrap\BootProviders();
}

public function testBootstrap0()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    $actual = $this->bootProviders->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
