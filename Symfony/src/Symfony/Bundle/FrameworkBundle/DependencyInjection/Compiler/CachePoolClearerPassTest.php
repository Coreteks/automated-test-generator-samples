<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\CachePoolClearerPass;

class CachePoolClearerPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\CachePoolClearerPass
*/
protected $cachePoolClearerPass;

public function setUp()
{
    parent::setUp();

    $this->cachePoolClearerPass = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\CachePoolClearerPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == false (line 50)
    // if ($container->has('cache.system')) == false (line 52)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == false (line 50)
    // if ($container->has('cache.system')) == true (line 52)
    // if ($factory === $systemPool->getFactory() && 5 <= count($systemArgs = $systemPool->getArguments())) == false (line 54)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == false (line 50)
    // if ($container->has('cache.system')) == true (line 52)
    // if ($factory === $systemPool->getFactory() && 5 <= count($systemArgs = $systemPool->getArguments())) == true (line 54)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == true (line 50)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess4()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == true (line 47)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess5()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('cache.annotations')) == true (line 42)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess6()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == false (line 50)
    // if ($container->has('cache.system')) == false (line 52)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess7()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == false (line 50)
    // if ($container->has('cache.system')) == true (line 52)
    // if ($factory === $systemPool->getFactory() && 5 <= count($systemArgs = $systemPool->getArguments())) == false (line 54)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess8()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == false (line 50)
    // if ($container->has('cache.system')) == true (line 52)
    // if ($factory === $systemPool->getFactory() && 5 <= count($systemArgs = $systemPool->getArguments())) == true (line 54)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess9()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == true (line 50)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess10()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == true (line 47)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess11()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('cache.annotations')) == true (line 42)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess12()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition($id)) == false (line 35)
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == false (line 50)
    // if ($container->has('cache.system')) == false (line 52)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess13()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition($id)) == false (line 35)
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == false (line 50)
    // if ($container->has('cache.system')) == true (line 52)
    // if ($factory === $systemPool->getFactory() && 5 <= count($systemArgs = $systemPool->getArguments())) == false (line 54)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess14()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition($id)) == false (line 35)
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == false (line 50)
    // if ($container->has('cache.system')) == true (line 52)
    // if ($factory === $systemPool->getFactory() && 5 <= count($systemArgs = $systemPool->getArguments())) == true (line 54)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess15()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition($id)) == false (line 35)
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == true (line 50)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess16()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition($id)) == false (line 35)
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == true (line 47)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess17()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition($id)) == false (line 35)
    // if (!$container->has('cache.annotations')) == true (line 42)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess18()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition($id)) == true (line 35)
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == false (line 50)
    // if ($container->has('cache.system')) == false (line 52)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess19()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition($id)) == true (line 35)
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == false (line 50)
    // if ($container->has('cache.system')) == true (line 52)
    // if ($factory === $systemPool->getFactory() && 5 <= count($systemArgs = $systemPool->getArguments())) == false (line 54)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess20()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition($id)) == true (line 35)
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == false (line 50)
    // if ($container->has('cache.system')) == true (line 52)
    // if ($factory === $systemPool->getFactory() && 5 <= count($systemArgs = $systemPool->getArguments())) == true (line 54)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess21()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition($id)) == true (line 35)
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == false (line 47)
    // if ($container->has('monolog.logger.cache')) == true (line 50)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess22()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition($id)) == true (line 35)
    // if (!$container->has('cache.annotations')) == false (line 42)
    // if ($factory !== $annotationsPool->getFactory() || 4 !== count($annotationsPool->getArguments())) == true (line 47)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess23()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition($id)) == true (line 35)
    // if (!$container->has('cache.annotations')) == true (line 42)

    $actual = $this->cachePoolClearerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
