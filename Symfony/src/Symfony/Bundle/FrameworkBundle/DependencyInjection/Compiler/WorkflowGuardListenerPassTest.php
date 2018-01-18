<?php

namespace tests\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\WorkflowGuardListenerPass;

class WorkflowGuardListenerPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\WorkflowGuardListenerPass
*/
protected $workflowGuardListenerPass;

public function setUp()
{
    parent::setUp();

    $this->workflowGuardListenerPass = new \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\WorkflowGuardListenerPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter('workflow.has_guard_listeners')) == false (line 29)

    $actual = $this->workflowGuardListenerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter('workflow.has_guard_listeners')) == false (line 29)
    // if (!$container->has($service)) == false (line 43)

    $actual = $this->workflowGuardListenerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\DependencyInjection\Exception\LogicException
 */
public function testProcess2()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter('workflow.has_guard_listeners')) == false (line 29)
    // if (!$container->has($service)) == true (line 43)
    // throw new \Symfony\Component\DependencyInjection\Exception\LogicException(sprintf('The "%s" service is needed to be able to use the workflow guard listener.', $service)) -> exception (line 44)

    $actual = $this->workflowGuardListenerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasParameter('workflow.has_guard_listeners')) == true (line 29)

    $actual = $this->workflowGuardListenerPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
