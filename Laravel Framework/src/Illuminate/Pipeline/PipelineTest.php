<?php

namespace tests\Illuminate\Pipeline;

use Illuminate\Contracts\Container\Container;
use Illuminate\Pipeline\Pipeline;
use Mockery as m;

class PipelineTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Illuminate\Pipeline\Pipeline
*/
protected $pipeline;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Contracts\Container\Container::class);
    $this->pipeline = new \Illuminate\Pipeline\Pipeline($this->_container);
}

public function testSend0()
{
    $passable = m::mock('UntypedParameter_passable_');

    // TODO: Your mock expectations here

    $actual = $this->pipeline->send($passable);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testThrough0()
{
    $pipes = m::mock('UntypedParameter_pipes_');

    // TODO: Your mock expectations here

    $actual = $this->pipeline->through($pipes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVia0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->pipeline->via($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testThen0()
{
    $destination = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->pipeline->then($destination);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
