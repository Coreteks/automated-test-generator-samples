<?php

namespace tests\Illuminate\Support\Facades;

use Illuminate\Support\Facades\Queue;
use Mockery as m;

class QueueTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Facades\Queue
*/
protected $queue;

public function setUp()
{
    parent::setUp();

    $this->queue = new \Illuminate\Support\Facades\Queue();
}

public function testFake0()
{
    // TODO: Your mock expectations here

    $actual = $this->queue->fake();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
