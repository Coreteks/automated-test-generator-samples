<?php

namespace tests\Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider\InMemoryFactory;

class InMemoryFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider\InMemoryFactory
*/
protected $inMemoryFactory;

public function setUp()
{
    parent::setUp();

    $this->inMemoryFactory = new \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider\InMemoryFactory();
}

public function testCreate0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    $actual = $this->inMemoryFactory->create($container, $id, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    $actual = $this->inMemoryFactory->create($container, $id, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->inMemoryFactory->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConfiguration0()
{
    $node = m::mock(\Symfony\Component\Config\Definition\Builder\NodeDefinition::class);

    // TODO: Your mock expectations here

    $actual = $this->inMemoryFactory->addConfiguration($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
