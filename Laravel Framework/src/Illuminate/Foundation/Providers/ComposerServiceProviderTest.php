<?php

namespace tests\Illuminate\Foundation\Providers;

use Illuminate\Foundation\Providers\ComposerServiceProvider;
use Mockery as m;

class ComposerServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Providers\ComposerServiceProvider
*/
protected $composerServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->composerServiceProvider = new \Illuminate\Foundation\Providers\ComposerServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->composerServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->composerServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
