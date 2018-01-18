<?php

namespace tests\Illuminate\Pipeline;

use Illuminate\Contracts\Container\Container;
use Illuminate\Pipeline\Hub;
use Mockery as m;

class HubTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Illuminate\Pipeline\Hub
*/
protected $hub;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Illuminate\Contracts\Container\Container::class);
    $this->hub = new \Illuminate\Pipeline\Hub($this->_container);
}

public function testDefaults0()
{
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->hub->defaults($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPipeline0()
{
    $name = m::mock('UntypedParameter_name_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->hub->pipeline($name, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPipe0()
{
    $object = m::mock('UntypedParameter_object_');
    $pipeline = m::mock('UntypedParameter_pipeline_');

    // TODO: Your mock expectations here

    $actual = $this->hub->pipe($object, $pipeline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
