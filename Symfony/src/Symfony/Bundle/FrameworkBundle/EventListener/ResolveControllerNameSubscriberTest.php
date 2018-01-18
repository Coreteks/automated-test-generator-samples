<?php

namespace tests\Symfony\Bundle\FrameworkBundle\EventListener;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser;
use Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber;

class ResolveControllerNameSubscriberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_parser;
/**
* @var \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
*/
protected $resolveControllerNameSubscriber;

public function setUp()
{
    parent::setUp();

    $this->_parser = m::mock(\Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser::class);
    $this->resolveControllerNameSubscriber = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber($this->_parser);
}

public function testOnKernelRequest0()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\GetResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($controller) && false === strpos($controller, '::') && 2 === substr_count($controller, ':')) == false (line 36)

    $actual = $this->resolveControllerNameSubscriber->onKernelRequest($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelRequest1()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\GetResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_string($controller) && false === strpos($controller, '::') && 2 === substr_count($controller, ':')) == true (line 36)

    $actual = $this->resolveControllerNameSubscriber->onKernelRequest($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSubscribedEvents0()
{
    // TODO: Your mock expectations here

    $actual = $this->resolveControllerNameSubscriber->getSubscribedEvents();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
