<?php

namespace tests\Symfony\Bundle\SecurityBundle\Debug;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\Debug\WrappedListener;
use Symfony\Component\Security\Http\Firewall\ListenerInterface;

class WrappedListenerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_listener;
/**
* @var \Symfony\Bundle\SecurityBundle\Debug\WrappedListener
*/
protected $wrappedListener;

public function setUp()
{
    parent::setUp();

    $this->_listener = m::mock(\Symfony\Component\Security\Http\Firewall\ListenerInterface::class);
    $this->wrappedListener = new \Symfony\Bundle\SecurityBundle\Debug\WrappedListener($this->_listener);
}

public function testHandle0()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\GetResponseEvent::class);

    // TODO: Your mock expectations here

    $actual = $this->wrappedListener->handle($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    $actual = $this->wrappedListener->__call($method, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetWrappedListener0()
{
    // TODO: Your mock expectations here

    $actual = $this->wrappedListener->getWrappedListener();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInfo0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->stub) == false (line 66)

    $actual = $this->wrappedListener->getInfo();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInfo1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->stub) == true (line 66)

    $actual = $this->wrappedListener->getInfo();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
