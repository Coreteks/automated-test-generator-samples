<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DataCollector;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector;

class RequestDataCollectorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
*/
protected $requestDataCollector;

public function setUp()
{
    parent::setUp();

    $this->requestDataCollector = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
}

public function testCollect0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $response = m::mock(\Symfony\Component\HttpFoundation\Response::class);
    $exception = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parentRequestAttributes = $request->attributes->get('_forwarded')) == false (line 35)
    // if ($request->attributes->has('_forward_controller')) == false (line 40)

    $actual = $this->requestDataCollector->collect($request, $response, $exception);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollect1()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $response = m::mock(\Symfony\Component\HttpFoundation\Response::class);
    $exception = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parentRequestAttributes = $request->attributes->get('_forwarded')) == false (line 35)
    // if ($request->attributes->has('_forward_controller')) == true (line 40)

    $actual = $this->requestDataCollector->collect($request, $response, $exception);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollect2()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $response = m::mock(\Symfony\Component\HttpFoundation\Response::class);
    $exception = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parentRequestAttributes = $request->attributes->get('_forwarded')) == true (line 35)
    // if ($parentRequestAttributes instanceof \Symfony\Component\HttpFoundation\ParameterBag) == false (line 36)
    // if ($request->attributes->has('_forward_controller')) == false (line 40)

    $actual = $this->requestDataCollector->collect($request, $response, $exception);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollect3()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $response = m::mock(\Symfony\Component\HttpFoundation\Response::class);
    $exception = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parentRequestAttributes = $request->attributes->get('_forwarded')) == true (line 35)
    // if ($parentRequestAttributes instanceof \Symfony\Component\HttpFoundation\ParameterBag) == false (line 36)
    // if ($request->attributes->has('_forward_controller')) == true (line 40)

    $actual = $this->requestDataCollector->collect($request, $response, $exception);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollect4()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $response = m::mock(\Symfony\Component\HttpFoundation\Response::class);
    $exception = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parentRequestAttributes = $request->attributes->get('_forwarded')) == true (line 35)
    // if ($parentRequestAttributes instanceof \Symfony\Component\HttpFoundation\ParameterBag) == true (line 36)
    // if ($request->attributes->has('_forward_controller')) == false (line 40)

    $actual = $this->requestDataCollector->collect($request, $response, $exception);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCollect5()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);
    $response = m::mock(\Symfony\Component\HttpFoundation\Response::class);
    $exception = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parentRequestAttributes = $request->attributes->get('_forwarded')) == true (line 35)
    // if ($parentRequestAttributes instanceof \Symfony\Component\HttpFoundation\ParameterBag) == true (line 36)
    // if ($request->attributes->has('_forward_controller')) == true (line 40)

    $actual = $this->requestDataCollector->collect($request, $response, $exception);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetForward0()
{
    // TODO: Your mock expectations here

    $actual = $this->requestDataCollector->getForward();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelController0()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FilterControllerEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parentRequestAttributes = $event->getRequest()->attributes->get('_forwarded')) == false (line 63)

    $actual = $this->requestDataCollector->onKernelController($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelController1()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FilterControllerEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parentRequestAttributes = $event->getRequest()->attributes->get('_forwarded')) == true (line 63)
    // if ($parentRequestAttributes instanceof \Symfony\Component\HttpFoundation\ParameterBag) == false (line 64)

    $actual = $this->requestDataCollector->onKernelController($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelController2()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FilterControllerEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($parentRequestAttributes = $event->getRequest()->attributes->get('_forwarded')) == true (line 63)
    // if ($parentRequestAttributes instanceof \Symfony\Component\HttpFoundation\ParameterBag) == true (line 64)

    $actual = $this->requestDataCollector->onKernelController($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->requestDataCollector->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
