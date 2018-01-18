<?php

namespace tests\Symfony\Bundle\SecurityBundle\Security;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\Security\FirewallConfig;
use Symfony\Bundle\SecurityBundle\Security\FirewallContext;
use Symfony\Component\Security\Http\Firewall\ExceptionListener;

class FirewallContextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_listeners = null;
/**
* @var \Mockery\MockInterface
*/
protected $_exceptionListener;
/**
* @var \Mockery\MockInterface
*/
protected $_config;
/**
* @var \Symfony\Bundle\SecurityBundle\Security\FirewallContext
*/
protected $firewallContext;

public function setUp()
{
    parent::setUp();

    $this->_listeners = null;
    $this->_exceptionListener = m::mock(\Symfony\Component\Security\Http\Firewall\ExceptionListener::class);
    $this->_config = m::mock(\Symfony\Bundle\SecurityBundle\Security\FirewallConfig::class);
    $this->firewallContext = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext($this->_listeners, $this->_exceptionListener, $this->_config);
}

public function testGetConfig0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallContext->getConfig();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetListeners0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallContext->getListeners();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExceptionListener0()
{
    // TODO: Your mock expectations here

    $actual = $this->firewallContext->getExceptionListener();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
