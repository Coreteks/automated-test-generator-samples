<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\TemplatingPass;

class TemplatingPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\TemplatingPass
*/
protected $templatingPass;

public function setUp()
{
    parent::setUp();

    $this->templatingPass = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\TemplatingPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == false (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == false (line 34)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == false (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (count($helpers) > 0) == false (line 44)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == false (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (count($helpers) > 0) == true (line 44)
    // if ($container->hasDefinition('templating.engine.php.helpers_locator')) == false (line 48)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == false (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (count($helpers) > 0) == true (line 44)
    // if ($container->hasDefinition('templating.engine.php.helpers_locator')) == true (line 48)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess4()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == false (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (isset($attributes[0]['alias'])) == false (line 38)
    // if (count($helpers) > 0) == false (line 44)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess5()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == false (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (isset($attributes[0]['alias'])) == false (line 38)
    // if (count($helpers) > 0) == true (line 44)
    // if ($container->hasDefinition('templating.engine.php.helpers_locator')) == false (line 48)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess6()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == false (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (isset($attributes[0]['alias'])) == false (line 38)
    // if (count($helpers) > 0) == true (line 44)
    // if ($container->hasDefinition('templating.engine.php.helpers_locator')) == true (line 48)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess7()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == false (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (isset($attributes[0]['alias'])) == true (line 38)
    // if (count($helpers) > 0) == false (line 44)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess8()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == false (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (isset($attributes[0]['alias'])) == true (line 38)
    // if (count($helpers) > 0) == true (line 44)
    // if ($container->hasDefinition('templating.engine.php.helpers_locator')) == false (line 48)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess9()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == false (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (isset($attributes[0]['alias'])) == true (line 38)
    // if (count($helpers) > 0) == true (line 44)
    // if ($container->hasDefinition('templating.engine.php.helpers_locator')) == true (line 48)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess10()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == true (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == false (line 34)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess11()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == true (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (count($helpers) > 0) == false (line 44)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess12()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == true (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (count($helpers) > 0) == true (line 44)
    // if ($container->hasDefinition('templating.engine.php.helpers_locator')) == false (line 48)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess13()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == true (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (count($helpers) > 0) == true (line 44)
    // if ($container->hasDefinition('templating.engine.php.helpers_locator')) == true (line 48)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess14()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == true (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (isset($attributes[0]['alias'])) == false (line 38)
    // if (count($helpers) > 0) == false (line 44)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess15()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == true (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (isset($attributes[0]['alias'])) == false (line 38)
    // if (count($helpers) > 0) == true (line 44)
    // if ($container->hasDefinition('templating.engine.php.helpers_locator')) == false (line 48)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess16()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == true (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (isset($attributes[0]['alias'])) == false (line 38)
    // if (count($helpers) > 0) == true (line 44)
    // if ($container->hasDefinition('templating.engine.php.helpers_locator')) == true (line 48)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess17()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == true (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (isset($attributes[0]['alias'])) == true (line 38)
    // if (count($helpers) > 0) == false (line 44)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess18()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == true (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (isset($attributes[0]['alias'])) == true (line 38)
    // if (count($helpers) > 0) == true (line 44)
    // if ($container->hasDefinition('templating.engine.php.helpers_locator')) == false (line 48)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess19()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == false (line 25)
    // if ($container->hasAlias('templating')) == true (line 29)
    // if ($container->hasDefinition('templating.engine.php')) == true (line 34)
    // if (isset($attributes[0]['alias'])) == true (line 38)
    // if (count($helpers) > 0) == true (line 44)
    // if ($container->hasDefinition('templating.engine.php.helpers_locator')) == true (line 48)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess20()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->hasDefinition('templating')) == true (line 25)

    $actual = $this->templatingPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
