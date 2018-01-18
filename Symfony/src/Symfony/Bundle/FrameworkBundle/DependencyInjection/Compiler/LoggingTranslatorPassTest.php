<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\LoggingTranslatorPass;

class LoggingTranslatorPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\LoggingTranslatorPass
*/
protected $loggingTranslatorPass;

public function setUp()
{
    parent::setUp();

    $this->loggingTranslatorPass = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\LoggingTranslatorPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasAlias('logger') || !$container->hasAlias('translator')) == false (line 27)
    // if ($container->hasParameter('translator.logging') && $container->getParameter('translator.logging')) == false (line 31)

    $actual = $this->loggingTranslatorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasAlias('logger') || !$container->hasAlias('translator')) == false (line 27)
    // if ($container->hasParameter('translator.logging') && $container->getParameter('translator.logging')) == true (line 31)
    // if (!($r = $container->getReflectionClass($class))) == false (line 36)
    // if ($r->isSubclassOf(\Symfony\Component\Translation\TranslatorInterface::class) && $r->isSubclassOf(\Symfony\Component\Translation\TranslatorBagInterface::class)) == false (line 39)

    $actual = $this->loggingTranslatorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasAlias('logger') || !$container->hasAlias('translator')) == false (line 27)
    // if ($container->hasParameter('translator.logging') && $container->getParameter('translator.logging')) == true (line 31)
    // if (!($r = $container->getReflectionClass($class))) == false (line 36)
    // if ($r->isSubclassOf(\Symfony\Component\Translation\TranslatorInterface::class) && $r->isSubclassOf(\Symfony\Component\Translation\TranslatorBagInterface::class)) == true (line 39)

    $actual = $this->loggingTranslatorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasAlias('logger') || !$container->hasAlias('translator')) == false (line 27)
    // if ($container->hasParameter('translator.logging') && $container->getParameter('translator.logging')) == true (line 31)
    // if (!($r = $container->getReflectionClass($class))) == false (line 36)
    // if ($r->isSubclassOf(\Symfony\Component\Translation\TranslatorInterface::class) && $r->isSubclassOf(\Symfony\Component\Translation\TranslatorBagInterface::class)) == true (line 39)
    // if ((!isset($v['id']) || 'translator' !== $v['id']) && (!isset($v['key']) || 'translator' !== $v['key'])) == false (line 46)

    $actual = $this->loggingTranslatorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess4()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasAlias('logger') || !$container->hasAlias('translator')) == false (line 27)
    // if ($container->hasParameter('translator.logging') && $container->getParameter('translator.logging')) == true (line 31)
    // if (!($r = $container->getReflectionClass($class))) == false (line 36)
    // if ($r->isSubclassOf(\Symfony\Component\Translation\TranslatorInterface::class) && $r->isSubclassOf(\Symfony\Component\Translation\TranslatorBagInterface::class)) == true (line 39)
    // if ((!isset($v['id']) || 'translator' !== $v['id']) && (!isset($v['key']) || 'translator' !== $v['key'])) == true (line 46)

    $actual = $this->loggingTranslatorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\DependencyInjection\Exception\InvalidArgumentException
 */
public function testProcess5()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasAlias('logger') || !$container->hasAlias('translator')) == false (line 27)
    // if ($container->hasParameter('translator.logging') && $container->getParameter('translator.logging')) == true (line 31)
    // if (!($r = $container->getReflectionClass($class))) == true (line 36)
    // throw new \Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(sprintf('Class "%s" used for service "%s" cannot be found.', $class, $translatorAlias)) -> exception (line 37)

    $actual = $this->loggingTranslatorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess6()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasAlias('logger') || !$container->hasAlias('translator')) == true (line 27)

    $actual = $this->loggingTranslatorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
