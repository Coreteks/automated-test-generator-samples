<?php

namespace tests\Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider\LdapFactory;

class LdapFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider\LdapFactory
*/
protected $ldapFactory;

public function setUp()
{
    parent::setUp();

    $this->ldapFactory = new \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\UserProvider\LdapFactory();
}

public function testCreate0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);
    $id = m::mock('UntypedParameter_id_');
    $config = m::mock('UntypedParameter_config_');

    // TODO: Your mock expectations here

    $actual = $this->ldapFactory->create($container, $id, $config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->ldapFactory->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddConfiguration0()
{
    $node = m::mock(\Symfony\Component\Config\Definition\Builder\NodeDefinition::class);

    // TODO: Your mock expectations here

    $actual = $this->ldapFactory->addConfiguration($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
