<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass;

class AddDebugLogProcessorPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass
*/
protected $addDebugLogProcessorPass;

public function setUp()
{
    parent::setUp();

    $this->addDebugLogProcessorPass = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('profiler')) == false (line 22)
    // if (!$container->hasDefinition('monolog.logger_prototype')) == false (line 25)
    // if (!$container->hasDefinition('debug.log_processor')) == false (line 28)

    $actual = $this->addDebugLogProcessorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('profiler')) == false (line 22)
    // if (!$container->hasDefinition('monolog.logger_prototype')) == false (line 25)
    // if (!$container->hasDefinition('debug.log_processor')) == true (line 28)

    $actual = $this->addDebugLogProcessorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('profiler')) == false (line 22)
    // if (!$container->hasDefinition('monolog.logger_prototype')) == true (line 25)

    $actual = $this->addDebugLogProcessorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('profiler')) == true (line 22)

    $actual = $this->addDebugLogProcessorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
