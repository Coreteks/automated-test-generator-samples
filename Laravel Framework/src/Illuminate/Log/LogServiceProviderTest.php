<?php

namespace tests\Illuminate\Log;

use Illuminate\Log\LogServiceProvider;
use Mockery as m;

class LogServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Log\LogServiceProvider
*/
protected $logServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->logServiceProvider = new \Illuminate\Log\LogServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->logServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateLogger0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->hasMonologConfigurator()) == false (line 33)

    $actual = $this->logServiceProvider->createLogger();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateLogger1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->app->hasMonologConfigurator()) == true (line 33)

    $actual = $this->logServiceProvider->createLogger();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
