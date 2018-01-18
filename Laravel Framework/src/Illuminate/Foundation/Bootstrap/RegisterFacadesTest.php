<?php

namespace tests\Illuminate\Foundation\Bootstrap;

use Illuminate\Foundation\Bootstrap\RegisterFacades;
use Mockery as m;

class RegisterFacadesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Bootstrap\RegisterFacades
*/
protected $registerFacades;

public function setUp()
{
    parent::setUp();

    $this->registerFacades = new \Illuminate\Foundation\Bootstrap\RegisterFacades();
}

public function testBootstrap0()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    $actual = $this->registerFacades->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
