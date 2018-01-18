<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\AggregateServiceProvider;
use Mockery as m;

class AggregateServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\AggregateServiceProvider
*/
protected $aggregateServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->aggregateServiceProvider = new \Illuminate\Support\AggregateServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->aggregateServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    // TODO: Your mock expectations here

    $actual = $this->aggregateServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides0()
{
    // TODO: Your mock expectations here

    $actual = $this->aggregateServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProvides1()
{
    // TODO: Your mock expectations here

    $actual = $this->aggregateServiceProvider->provides();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
