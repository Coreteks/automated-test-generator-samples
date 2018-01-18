<?php

namespace tests\Symfony\Bridge\Doctrine\DependencyInjection\CompilerPass;

use Mockery as m;
use Symfony\Bridge\Doctrine\DependencyInjection\CompilerPass\RegisterEventListenersAndSubscribersPass;

class RegisterEventListenersAndSubscribersPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_connections = null;
/**
* @var mixed
*/
protected $_managerTemplate = null;
/**
* @var mixed
*/
protected $_tagPrefix = null;
/**
* @var \Symfony\Bridge\Doctrine\DependencyInjection\CompilerPass\RegisterEventListenersAndSubscribersPass
*/
protected $registerEventListenersAndSubscribersPass;

public function setUp()
{
    parent::setUp();

    $this->_connections = null;
    $this->_managerTemplate = null;
    $this->_tagPrefix = null;
    $this->registerEventListenersAndSubscribersPass = new \Symfony\Bridge\Doctrine\DependencyInjection\CompilerPass\RegisterEventListenersAndSubscribersPass($this->_connections, $this->_managerTemplate, $this->_tagPrefix);
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == false (line 72)
    // if (!empty($taggedListeners)) == false (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == false (line 72)
    // if (!empty($taggedListeners)) == true (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == false (line 72)
    // if (!empty($taggedListeners)) == true (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == false (line 72)
    // if (!empty($taggedListeners)) == true (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess4()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == true (line 72)
    // if (!empty($taggedListeners)) == false (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess5()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == true (line 72)
    // if (!empty($taggedListeners)) == true (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess6()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == true (line 72)
    // if (!empty($taggedListeners)) == true (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess7()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == true (line 72)
    // if (!empty($taggedListeners)) == true (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess8()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == true (line 72)
    // if (!empty($taggedListeners)) == false (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess9()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == true (line 72)
    // if (!empty($taggedListeners)) == true (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess10()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == true (line 72)
    // if (!empty($taggedListeners)) == true (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess11()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == true (line 72)
    // if (!empty($taggedListeners)) == true (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess12()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == true (line 72)
    // if (!empty($taggedListeners)) == false (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess13()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == true (line 72)
    // if (!empty($taggedListeners)) == true (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess14()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == true (line 72)
    // if (!empty($taggedListeners)) == true (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess15()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == false (line 59)
    // if (!empty($taggedSubscribers)) == true (line 72)
    // if (!empty($taggedListeners)) == true (line 84)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess16()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == false (line 52)
    // if (empty($taggedSubscribers) && empty($taggedListeners)) == true (line 59)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess17()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter($this->connections)) == true (line 52)

    $actual = $this->registerEventListenersAndSubscribersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
