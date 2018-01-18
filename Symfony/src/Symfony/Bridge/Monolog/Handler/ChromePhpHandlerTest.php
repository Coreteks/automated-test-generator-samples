<?php

namespace tests\Symfony\Bridge\Monolog\Handler;

use Mockery as m;
use Symfony\Bridge\Monolog\Handler\ChromePhpHandler;

class ChromePhpHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Monolog\Handler\ChromePhpHandler
*/
protected $chromePhpHandler;

public function setUp()
{
    parent::setUp();

    $this->chromePhpHandler = new \Symfony\Bridge\Monolog\Handler\ChromePhpHandler();
}

public function testOnKernelResponse0()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FilterResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->isMasterRequest()) == false (line 37)
    // if (!preg_match(static::USER_AGENT_REGEX, $event->getRequest()->headers->get('User-Agent'))) == false (line 41)

    $actual = $this->chromePhpHandler->onKernelResponse($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelResponse1()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FilterResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->isMasterRequest()) == false (line 37)
    // if (!preg_match(static::USER_AGENT_REGEX, $event->getRequest()->headers->get('User-Agent'))) == false (line 41)

    $actual = $this->chromePhpHandler->onKernelResponse($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelResponse2()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FilterResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->isMasterRequest()) == false (line 37)
    // if (!preg_match(static::USER_AGENT_REGEX, $event->getRequest()->headers->get('User-Agent'))) == true (line 41)

    $actual = $this->chromePhpHandler->onKernelResponse($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelResponse3()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FilterResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->isMasterRequest()) == true (line 37)

    $actual = $this->chromePhpHandler->onKernelResponse($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
