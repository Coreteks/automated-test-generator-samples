<?php

namespace tests\Illuminate\Foundation\Bootstrap;

use Illuminate\Foundation\Bootstrap\LoadConfiguration;
use Mockery as m;

class LoadConfigurationTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Bootstrap\LoadConfiguration
*/
protected $loadConfiguration;

public function setUp()
{
    parent::setUp();

    $this->loadConfiguration = new \Illuminate\Foundation\Bootstrap\LoadConfiguration();
}

public function testBootstrap0()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($cached = $app->getCachedConfigPath())) == false (line 27)
    // if (!isset($loadedFromCache)) == false (line 38)

    $actual = $this->loadConfiguration->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap1()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($cached = $app->getCachedConfigPath())) == false (line 27)
    // if (!isset($loadedFromCache)) == true (line 38)

    $actual = $this->loadConfiguration->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap2()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($cached = $app->getCachedConfigPath())) == true (line 27)
    // if (!isset($loadedFromCache)) == false (line 38)

    $actual = $this->loadConfiguration->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap3()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($cached = $app->getCachedConfigPath())) == true (line 27)
    // if (!isset($loadedFromCache)) == true (line 38)

    $actual = $this->loadConfiguration->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
