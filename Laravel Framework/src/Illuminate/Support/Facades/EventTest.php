<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Event;
use Mockery as m;

class EventTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Event
*/
protected $event;

public function setUp()
{
    parent::setUp();

    $this->event = new \Illuminate\Support\Facades\Event();
}

public function testFake0()
{
    $eventsToFake = m::mock('UntypedParameter_eventsToFake_');

    // TODO: Your mock expectations here

    $actual = $this->event->fake($eventsToFake);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
