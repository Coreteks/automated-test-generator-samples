<?php

namespace tests\Illuminate\Events;

use Illuminate\Events\EventServiceProvider;
use Mockery as m;

class EventServiceProviderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Events\EventServiceProvider
*/
protected $eventServiceProvider;

public function setUp()
{
    parent::setUp();

    $this->eventServiceProvider = new \Illuminate\Events\EventServiceProvider();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->eventServiceProvider->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
