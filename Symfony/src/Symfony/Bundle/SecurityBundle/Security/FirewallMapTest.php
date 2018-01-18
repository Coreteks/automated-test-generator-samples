<?php

namespace tests\Symfony\Bundle\SecurityBundle\Security;

use Mockery as m;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\SecurityBundle\Security\FirewallMap;

class FirewallMapTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var mixed
*/
protected $_map = null;
/**
* @var \Symfony\Bundle\SecurityBundle\Security\FirewallMap
*/
protected $firewallMap;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Psr\Container\ContainerInterface::class);
    $this->_map = null;
    $this->firewallMap = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this->_container, $this->_map);
}

public function testGetListeners0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $context) == false (line 42)

    $actual = $this->firewallMap->getListeners($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetListeners1()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $context) == true (line 42)

    $actual = $this->firewallMap->getListeners($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFirewallConfig0()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $context) == false (line 56)

    $actual = $this->firewallMap->getFirewallConfig($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFirewallConfig1()
{
    $request = m::mock(\Symfony\Component\HttpFoundation\Request::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $context) == true (line 56)

    $actual = $this->firewallMap->getFirewallConfig($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
