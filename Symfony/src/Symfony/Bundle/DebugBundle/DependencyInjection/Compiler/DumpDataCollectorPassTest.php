<?php

namespace tests\Symfony\Bundle\DebugBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\DebugBundle\DependencyInjection\Compiler\DumpDataCollectorPass;

class DumpDataCollectorPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\DebugBundle\DependencyInjection\Compiler\DumpDataCollectorPass
*/
protected $dumpDataCollectorPass;

public function setUp()
{
    parent::setUp();

    $this->dumpDataCollectorPass = new \Symfony\Bundle\DebugBundle\DependencyInjection\Compiler\DumpDataCollectorPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('data_collector.dump')) == false (line 30)
    // if (!$container->hasParameter('web_profiler.debug_toolbar.mode') || \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener::DISABLED === $container->getParameter('web_profiler.debug_toolbar.mode')) == false (line 36)

    $actual = $this->dumpDataCollectorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('data_collector.dump')) == false (line 30)
    // if (!$container->hasParameter('web_profiler.debug_toolbar.mode') || \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener::DISABLED === $container->getParameter('web_profiler.debug_toolbar.mode')) == true (line 36)

    $actual = $this->dumpDataCollectorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('data_collector.dump')) == true (line 30)

    $actual = $this->dumpDataCollectorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
