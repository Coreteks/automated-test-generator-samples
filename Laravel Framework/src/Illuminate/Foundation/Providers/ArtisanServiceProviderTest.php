<?php

namespace tests\Illuminate\Foundation\Providers;

use Illuminate\Foundation\Providers\ArtisanServiceProvider;
use Mockery as m;

class ArtisanServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Providers\ArtisanServiceProvider
*/
protected $artisanServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->artisanServiceProvider = new \Illuminate\Foundation\Providers\ArtisanServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->artisanServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->artisanServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
