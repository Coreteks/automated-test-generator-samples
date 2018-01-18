<?php

namespace tests\Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\FormLoginLdapFactory;

class FormLoginLdapFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\FormLoginLdapFactory
*/
protected $formLoginLdapFactory;

public function setUp()
{
    parent::setUp();

    $this->formLoginLdapFactory = new \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\FormLoginLdapFactory();
}

public function testAddConfiguration0()
{
    $node = m::mock(\Symfony\Component\Config\Definition\Builder\NodeDefinition::class);

    // TODO: Your mock expectations here

    $actual = $this->formLoginLdapFactory->addConfiguration($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->formLoginLdapFactory->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
