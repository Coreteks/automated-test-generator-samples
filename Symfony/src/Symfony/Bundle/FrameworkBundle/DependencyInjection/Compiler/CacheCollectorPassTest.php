<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\CacheCollectorPass;

class CacheCollectorPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\CacheCollectorPass
*/
protected $cacheCollectorPass;

public function setUp()
{
    parent::setUp();

    $this->cacheCollectorPass = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\CacheCollectorPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('data_collector.cache')) == false (line 34)

    $actual = $this->cacheCollectorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('data_collector.cache')) == false (line 34)
    // if ($definition->isAbstract()) == false (line 41)

    $actual = $this->cacheCollectorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('data_collector.cache')) == false (line 34)
    // if ($definition->isAbstract()) == true (line 41)

    $actual = $this->cacheCollectorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('data_collector.cache')) == true (line 34)

    $actual = $this->cacheCollectorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
