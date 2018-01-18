<?php

namespace tests\Symfony\Bundle\SecurityBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Compiler\AddSessionDomainConstraintPass;

class AddSessionDomainConstraintPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\SecurityBundle\DependencyInjection\Compiler\AddSessionDomainConstraintPass
*/
protected $addSessionDomainConstraintPass;

public function setUp()
{
    parent::setUp();

    $this->addSessionDomainConstraintPass = new \Symfony\Bundle\SecurityBundle\DependencyInjection\Compiler\AddSessionDomainConstraintPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter('session.storage.options') || !$container->has('security.http_utils')) == false (line 29)

    $actual = $this->addSessionDomainConstraintPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter('session.storage.options') || !$container->has('security.http_utils')) == true (line 29)

    $actual = $this->addSessionDomainConstraintPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
