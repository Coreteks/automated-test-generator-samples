<?php

namespace tests\Symfony\Bundle\SecurityBundle\EventListener;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\EventListener\FirewallListener;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Http\FirewallMapInterface;
use Symfony\Component\Security\Http\Logout\LogoutUrlGenerator;

class FirewallListenerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_map;
/**
* @var \Mockery\MockInterface
*/
protected $_dispatcher;
/**
* @var \Mockery\MockInterface
*/
protected $_logoutUrlGenerator;
/**
* @var \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
*/
protected $firewallListener;

public function setUp()
{
    parent::setUp();

    $this->_map = m::mock(\Symfony\Component\Security\Http\FirewallMapInterface::class);
    $this->_dispatcher = m::mock(\Symfony\Component\EventDispatcher\EventDispatcherInterface::class);
    $this->_logoutUrlGenerator = m::mock(\Symfony\Component\Security\Http\Logout\LogoutUrlGenerator::class);
    $this->firewallListener = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener($this->_map, $this->_dispatcher, $this->_logoutUrlGenerator);
}

public function testOnKernelRequest0()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\GetResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->isMasterRequest()) == false (line 40)
    // if ($this->map instanceof \Symfony\Bundle\SecurityBundle\Security\FirewallMap && ($config = $this->map->getFirewallConfig($event->getRequest()))) == false (line 44)

    $actual = $this->firewallListener->onKernelRequest($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelRequest1()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\GetResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->isMasterRequest()) == false (line 40)
    // if ($this->map instanceof \Symfony\Bundle\SecurityBundle\Security\FirewallMap && ($config = $this->map->getFirewallConfig($event->getRequest()))) == true (line 44)

    $actual = $this->firewallListener->onKernelRequest($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelRequest2()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\GetResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$event->isMasterRequest()) == true (line 40)

    $actual = $this->firewallListener->onKernelRequest($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelFinishRequest0()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FinishRequestEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($event->isMasterRequest()) == false (line 53)

    $actual = $this->firewallListener->onKernelFinishRequest($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelFinishRequest1()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\FinishRequestEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($event->isMasterRequest()) == true (line 53)

    $actual = $this->firewallListener->onKernelFinishRequest($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
