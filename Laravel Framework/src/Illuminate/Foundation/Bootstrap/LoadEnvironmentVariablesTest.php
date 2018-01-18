<?php

namespace tests\Illuminate\Foundation\Bootstrap;

use Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables;
use Mockery as m;

class LoadEnvironmentVariablesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables
*/
protected $loadEnvironmentVariables;

public function setUp()
{
    parent::setUp();

    $this->loadEnvironmentVariables = new \Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables();
}

/**
 * @expectedException \Exception
 */
public function testBootstrap0()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($app->configurationIsCached()) == false (line 20)

    $actual = $this->loadEnvironmentVariables->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap1()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($app->configurationIsCached()) == false (line 20)

    $actual = $this->loadEnvironmentVariables->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap2()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($app->configurationIsCached()) == false (line 20)

    $actual = $this->loadEnvironmentVariables->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBootstrap3()
{
    $app = m::mock(\Illuminate\Contracts\Foundation\Application::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($app->configurationIsCached()) == true (line 20)

    $actual = $this->loadEnvironmentVariables->bootstrap($app);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
