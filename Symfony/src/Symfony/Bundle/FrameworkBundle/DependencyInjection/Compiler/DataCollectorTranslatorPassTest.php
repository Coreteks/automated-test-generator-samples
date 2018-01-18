<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\DataCollectorTranslatorPass;

class DataCollectorTranslatorPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\DataCollectorTranslatorPass
*/
protected $dataCollectorTranslatorPass;

public function setUp()
{
    parent::setUp();

    $this->dataCollectorTranslatorPass = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\DataCollectorTranslatorPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('translator')) == false (line 24)
    // if (!is_subclass_of($translatorClass, 'Symfony\\Component\\Translation\\TranslatorBagInterface')) == false (line 30)

    $actual = $this->dataCollectorTranslatorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('translator')) == false (line 24)
    // if (!is_subclass_of($translatorClass, 'Symfony\\Component\\Translation\\TranslatorBagInterface')) == true (line 30)

    $actual = $this->dataCollectorTranslatorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->has('translator')) == true (line 24)

    $actual = $this->dataCollectorTranslatorPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
