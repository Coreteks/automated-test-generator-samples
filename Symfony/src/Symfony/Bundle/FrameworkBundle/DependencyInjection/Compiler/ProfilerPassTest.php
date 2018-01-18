<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\ProfilerPass;

class ProfilerPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\ProfilerPass
*/
protected $profilerPass;

public function setUp()
{
    parent::setUp();

    $this->profilerPass = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\ProfilerPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $container->hasDefinition('profiler')) == false (line 28)

    $actual = $this->profilerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $container->hasDefinition('profiler')) == false (line 28)

    $actual = $this->profilerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $container->hasDefinition('profiler')) == false (line 28)
    // if (isset($attributes[0]['template'])) == false (line 40)

    $actual = $this->profilerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $container->hasDefinition('profiler')) == false (line 28)
    // if (isset($attributes[0]['template'])) == false (line 40)

    $actual = $this->profilerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess4()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $container->hasDefinition('profiler')) == false (line 28)
    // if (isset($attributes[0]['template'])) == true (line 40)
    // if (!isset($attributes[0]['id'])) == false (line 41)

    $actual = $this->profilerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess5()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $container->hasDefinition('profiler')) == false (line 28)
    // if (isset($attributes[0]['template'])) == true (line 40)
    // if (!isset($attributes[0]['id'])) == false (line 41)

    $actual = $this->profilerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\DependencyInjection\Exception\InvalidArgumentException
 */
public function testProcess6()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $container->hasDefinition('profiler')) == false (line 28)
    // if (isset($attributes[0]['template'])) == true (line 40)
    // if (!isset($attributes[0]['id'])) == true (line 41)
    // throw new \Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(sprintf('Data collector service "%s" must have an id attribute in order to specify a template', $id)) -> exception (line 42)

    $actual = $this->profilerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess7()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false === $container->hasDefinition('profiler')) == true (line 28)

    $actual = $this->profilerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
