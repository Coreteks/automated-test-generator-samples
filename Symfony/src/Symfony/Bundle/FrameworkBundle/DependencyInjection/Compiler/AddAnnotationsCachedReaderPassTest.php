<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddAnnotationsCachedReaderPass;

class AddAnnotationsCachedReaderPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddAnnotationsCachedReaderPass
*/
protected $addAnnotationsCachedReaderPass;

public function setUp()
{
    parent::setUp();

    $this->addAnnotationsCachedReaderPass = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddAnnotationsCachedReaderPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('annotations.cached_reader')) == false (line 29)

    $actual = $this->addAnnotationsCachedReaderPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('annotations.cached_reader')) == true (line 29)
    // if (isset($properties['cacheProviderBackup'])) == false (line 33)

    $actual = $this->addAnnotationsCachedReaderPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('annotations.cached_reader')) == true (line 29)
    // if (isset($properties['cacheProviderBackup'])) == true (line 33)

    $actual = $this->addAnnotationsCachedReaderPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
