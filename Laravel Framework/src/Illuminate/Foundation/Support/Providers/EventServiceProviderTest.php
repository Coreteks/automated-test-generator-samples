<?php

namespace tests\Illuminate\Foundation\Support\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider;
use Mockery as m;

class EventServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Support\Providers\EventServiceProvider
*/
protected $eventServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->eventServiceProvider = new \Illuminate\Foundation\Support\Providers\EventServiceProvider();
}

public function testBoot0()
{
    // TODO: Your mock expectations here

    $actual = $this->eventServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot1()
{
    // TODO: Your mock expectations here

    $actual = $this->eventServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot2()
{
    // TODO: Your mock expectations here

    $actual = $this->eventServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot3()
{
    // TODO: Your mock expectations here

    $actual = $this->eventServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot4()
{
    // TODO: Your mock expectations here

    $actual = $this->eventServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBoot5()
{
    // TODO: Your mock expectations here

    $actual = $this->eventServiceProvider->boot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->eventServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListens0()
{
    // TODO: Your mock expectations here

    $actual = $this->eventServiceProvider->listens();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
