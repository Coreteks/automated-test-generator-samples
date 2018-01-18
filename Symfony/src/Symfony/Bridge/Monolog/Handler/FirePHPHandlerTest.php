<?php

namespace tests\Symfony\Bridge\Monolog\Handler;

use Mockery as m;
use Symfony\Bridge\Monolog\Handler\FirePHPHandler;

class FirePHPHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Monolog\Handler\FirePHPHandler
*/
protected $firePHPHandler;

public function setUp()
{
    parent::setUp();

    $this->firePHPHandler = new \Symfony\Bridge\Monolog\Handler\FirePHPHandler();
}

public function testOnKernelResponse0()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FilterResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->isMasterRequest()) == false (line 37)
    // if (!preg_match('{\\bFirePHP/\\d+\\.\\d+\\b}', $event->getRequest()->headers->get('User-Agent')) && !$event->getRequest()->headers->has('X-FirePHP-Version')) == false (line 41)

    $actual = $this->firePHPHandler->onKernelResponse($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelResponse1()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FilterResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->isMasterRequest()) == false (line 37)
    // if (!preg_match('{\\bFirePHP/\\d+\\.\\d+\\b}', $event->getRequest()->headers->get('User-Agent')) && !$event->getRequest()->headers->has('X-FirePHP-Version')) == false (line 41)

    $actual = $this->firePHPHandler->onKernelResponse($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelResponse2()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FilterResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->isMasterRequest()) == false (line 37)
    // if (!preg_match('{\\bFirePHP/\\d+\\.\\d+\\b}', $event->getRequest()->headers->get('User-Agent')) && !$event->getRequest()->headers->has('X-FirePHP-Version')) == true (line 41)

    $actual = $this->firePHPHandler->onKernelResponse($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelResponse3()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FilterResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->isMasterRequest()) == true (line 37)

    $actual = $this->firePHPHandler->onKernelResponse($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
