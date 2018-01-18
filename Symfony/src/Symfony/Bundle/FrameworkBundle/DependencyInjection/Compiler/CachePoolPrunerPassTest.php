<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\CachePoolPrunerPass;

class CachePoolPrunerPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_cacheCommandServiceId = null;
/**
* @var mixed
*/
protected $_cachePoolTag = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\CachePoolPrunerPass
*/
protected $cachePoolPrunerPass;

public function setUp()
{
    parent::setUp();

    $this->_cacheCommandServiceId = null;
    $this->_cachePoolTag = null;
    $this->cachePoolPrunerPass = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\CachePoolPrunerPass($this->_cacheCommandServiceId, $this->_cachePoolTag);
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition($this->cacheCommandServiceId)) == false (line 41)

    $actual = $this->cachePoolPrunerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition($this->cacheCommandServiceId)) == false (line 41)
    // if (!($reflection = $container->getReflectionClass($class))) == false (line 50)
    // if ($reflection->implementsInterface(\Symfony\Component\Cache\PruneableInterface::class)) == false (line 54)

    $actual = $this->cachePoolPrunerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition($this->cacheCommandServiceId)) == false (line 41)
    // if (!($reflection = $container->getReflectionClass($class))) == false (line 50)
    // if ($reflection->implementsInterface(\Symfony\Component\Cache\PruneableInterface::class)) == true (line 54)

    $actual = $this->cachePoolPrunerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\DependencyInjection\Exception\InvalidArgumentException
 */
public function testProcess3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition($this->cacheCommandServiceId)) == false (line 41)
    // if (!($reflection = $container->getReflectionClass($class))) == true (line 50)
    // throw new \Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(sprintf('Class "%s" used for service "%s" cannot be found.', $class, $id)) -> exception (line 51)

    $actual = $this->cachePoolPrunerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess4()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition($this->cacheCommandServiceId)) == true (line 41)

    $actual = $this->cachePoolPrunerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
