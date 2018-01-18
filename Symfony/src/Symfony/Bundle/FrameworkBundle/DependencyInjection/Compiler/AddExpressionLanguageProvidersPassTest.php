<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddExpressionLanguageProvidersPass;

class AddExpressionLanguageProvidersPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddExpressionLanguageProvidersPass
*/
protected $addExpressionLanguageProvidersPass;

public function setUp()
{
    parent::setUp();

    $this->addExpressionLanguageProvidersPass = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddExpressionLanguageProvidersPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->has('router')) == false (line 31)
    // if ($container->has('security.access.expression_voter')) == false (line 39)

    $actual = $this->addExpressionLanguageProvidersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->has('router')) == false (line 31)
    // if ($container->has('security.access.expression_voter')) == true (line 39)

    $actual = $this->addExpressionLanguageProvidersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->has('router')) == false (line 31)
    // if ($container->has('security.access.expression_voter')) == true (line 39)

    $actual = $this->addExpressionLanguageProvidersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->has('router')) == true (line 31)
    // if ($container->has('security.access.expression_voter')) == false (line 39)

    $actual = $this->addExpressionLanguageProvidersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess4()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->has('router')) == true (line 31)
    // if ($container->has('security.access.expression_voter')) == true (line 39)

    $actual = $this->addExpressionLanguageProvidersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess5()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->has('router')) == true (line 31)
    // if ($container->has('security.access.expression_voter')) == true (line 39)

    $actual = $this->addExpressionLanguageProvidersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess6()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->has('router')) == true (line 31)
    // if ($container->has('security.access.expression_voter')) == false (line 39)

    $actual = $this->addExpressionLanguageProvidersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess7()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->has('router')) == true (line 31)
    // if ($container->has('security.access.expression_voter')) == true (line 39)

    $actual = $this->addExpressionLanguageProvidersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess8()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($container->has('router')) == true (line 31)
    // if ($container->has('security.access.expression_voter')) == true (line 39)

    $actual = $this->addExpressionLanguageProvidersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
