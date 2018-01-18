<?php

namespace tests\Symfony\Bridge\ProxyManager\LazyProxy\Instantiator;

use Mockery as m;
use Symfony\Bridge\ProxyManager\LazyProxy\Instantiator\RuntimeInstantiator;

class RuntimeInstantiatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\ProxyManager\LazyProxy\Instantiator\RuntimeInstantiator
*/
protected $runtimeInstantiator;

public function setUp()
{
    parent::setUp();

    $this->runtimeInstantiator = new \Symfony\Bridge\ProxyManager\LazyProxy\Instantiator\RuntimeInstantiator();
}

public function testInstantiateProxy0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerInterface::class);
    $definition = m::mock(\Symfony\Component\DependencyInjection\Definition::class);
    $id = m::mock('UntypedParameter_id_');
    $realInstantiator = m::mock('UntypedParameter_realInstantiator_');

    // TODO: Your mock expectations here

    $actual = $this->runtimeInstantiator->instantiateProxy($container, $definition, $id, $realInstantiator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
