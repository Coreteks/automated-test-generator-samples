<?php

namespace tests\Symfony\Bundle\SecurityBundle\DependencyInjection;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\DependencyInjection\SecurityExtension;

class SecurityExtensionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\SecurityBundle\DependencyInjection\SecurityExtension
*/
protected $securityExtension;

public function setUp()
{
    parent::setUp();

    $this->securityExtension = new \Symfony\Bundle\SecurityBundle\DependencyInjection\SecurityExtension();
}

public function testLoad0()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad3()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad4()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad5()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad6()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad7()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad8()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad9()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad10()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad11()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad12()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad13()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad14()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad15()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad16()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad17()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad18()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad19()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad20()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad21()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad22()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad23()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad24()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad25()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad26()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad27()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad28()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad29()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad30()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad31()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == false (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad32()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad33()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad34()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad35()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad36()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad37()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad38()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad39()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad40()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad41()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad42()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad43()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad44()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad45()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad46()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad47()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == false (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad48()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad49()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad50()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad51()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad52()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad53()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad54()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad55()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == false (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad56()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad57()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad58()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad59()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == false (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad60()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad61()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == false (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad62()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == false (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad63()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == false (line 59)
    // if ($container->hasParameter('kernel.debug') && $container->getParameter('kernel.debug')) == true (line 77)
    // if (!class_exists('Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage')) == true (line 81)
    // if (isset($config['access_decision_manager']['service'])) == true (line 91)
    // if ($config['encoders']) == true (line 108)
    // if (class_exists(\Symfony\Component\Console\Application::class)) == true (line 112)
    // if (!class_exists(\Symfony\Component\Security\Http\Controller\UserValueResolver::class)) == true (line 117)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad64()
{
    $configs = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!array_filter($configs)) == true (line 59)

    $actual = $this->securityExtension->load($configs, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddSecurityListenerFactory0()
{
    $factory = m::mock(\Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\SecurityFactoryInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->securityExtension->addSecurityListenerFactory($factory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddUserProviderFactory0()
{
    $factory = m::mock(\Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider\UserProviderFactoryInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->securityExtension->addUserProviderFactory($factory);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetXsdValidationBasePath0()
{
    // TODO: Your mock expectations here

    $actual = $this->securityExtension->getXsdValidationBasePath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespace0()
{
    // TODO: Your mock expectations here

    $actual = $this->securityExtension->getNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConfiguration0()
{
    $config = [];
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    $actual = $this->securityExtension->getConfiguration($config, $container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
