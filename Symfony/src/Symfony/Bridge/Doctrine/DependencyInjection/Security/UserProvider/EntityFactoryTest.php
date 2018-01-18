<?php

namespace tests\Symfony\Bridge\Doctrine\DependencyInjection\Security\UserProvider;

use Mockery as m;
use Symfony\Bridge\Doctrine\DependencyInjection\Security\UserProvider\EntityFactory;

class EntityFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_key = null;
/**
* @var mixed
*/
protected $_providerId = null;
/**
* @var \Symfony\Bridge\Doctrine\DependencyInjection\Security\UserProvider\EntityFactory
*/
protected $entityFactory;

public function setUp()
{
    parent::setUp();

    $this->_key = null;
    $this->_providerId = null;
    $this->entityFactory = new \Symfony\Bridge\Doctrine\DependencyInjection\Security\UserProvider\EntityFactory($this->_key, $this->_providerId);
}

public function testCreate0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    $actual = $this->entityFactory->create($container, $id, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->entityFactory->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConfiguration0()
{
    $node = m::mock(\Symfony\Component\Config\Definition\Builder\NodeDefinition::class);

    // TODO: Your mock expectations here

    $actual = $this->entityFactory->addConfiguration($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
