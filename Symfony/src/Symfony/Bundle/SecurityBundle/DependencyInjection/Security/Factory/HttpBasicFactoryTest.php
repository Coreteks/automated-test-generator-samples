<?php

namespace tests\Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\HttpBasicFactory;

class HttpBasicFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\HttpBasicFactory
*/
protected $httpBasicFactory;

public function setUp()
{
    parent::setUp();

    $this->httpBasicFactory = new \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\HttpBasicFactory();
}

public function testCreate0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');
    $userProvider = m::mock('UntypedParameter_userProvider_');
    $defaultEntryPoint = m::mock('UntypedParameter_defaultEntryPoint_');

    // TODO: Your mock expectations here

    $actual = $this->httpBasicFactory->create($container, $id, $config, $userProvider, $defaultEntryPoint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPosition0()
{
    // TODO: Your mock expectations here

    $actual = $this->httpBasicFactory->getPosition();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->httpBasicFactory->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConfiguration0()
{
    $node = m::mock(\Symfony\Component\Config\Definition\Builder\NodeDefinition::class);

    // TODO: Your mock expectations here

    $actual = $this->httpBasicFactory->addConfiguration($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
