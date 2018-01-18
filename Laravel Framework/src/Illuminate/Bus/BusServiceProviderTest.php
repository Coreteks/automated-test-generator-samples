<?php

namespace tests\Illuminate\Bus;

use Illuminate\Bus\BusServiceProvider;
use Mockery as m;

class BusServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Bus\BusServiceProvider
*/
protected $busServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->busServiceProvider = new \Illuminate\Bus\BusServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->busServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->busServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
