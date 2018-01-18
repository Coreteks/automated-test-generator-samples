<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Bus;
use Mockery as m;

class BusTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Bus
*/
protected $bus;

public function setUp()
{
    parent::setUp();

    $this->bus = new \Illuminate\Support\Facades\Bus();
}

public function testFake0()
{
    // TODO: Your mock expectations here

    $actual = $this->bus->fake();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
