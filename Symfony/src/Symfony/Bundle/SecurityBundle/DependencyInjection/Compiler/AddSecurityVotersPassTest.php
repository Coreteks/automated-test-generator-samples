<?php

namespace tests\Symfony\Bundle\SecurityBundle\DependencyInjection\Compiler;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Compiler\AddSecurityVotersPass;

class AddSecurityVotersPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\SecurityBundle\DependencyInjection\Compiler\AddSecurityVotersPass
*/
protected $addSecurityVotersPass;

public function setUp()
{
    parent::setUp();

    $this->addSecurityVotersPass = new \Symfony\Bundle\SecurityBundle\DependencyInjection\Compiler\AddSecurityVotersPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('security.access.decision_manager')) == false (line 35)
    // if (!$voters) == false (line 40)

    $actual = $this->addSecurityVotersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess1()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('security.access.decision_manager')) == false (line 35)
    // if (!$voters) == false (line 40)
    // if (!is_a($class, \Symfony\Component\Security\Core\Authorization\Voter\VoterInterface::class, true)) == false (line 48)

    $actual = $this->addSecurityVotersPass->process($container);
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
    // if (!$container->hasDefinition('security.access.decision_manager')) == false (line 35)
    // if (!$voters) == false (line 40)
    // if (!is_a($class, \Symfony\Component\Security\Core\Authorization\Voter\VoterInterface::class, true)) == true (line 48)
    // throw new \Symfony\Component\DependencyInjection\Exception\LogicException(sprintf('%s must implement the %s when used as a voter.', $class, \Symfony\Component\Security\Core\Authorization\Voter\VoterInterface::class)) -> exception (line 49)

    $actual = $this->addSecurityVotersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\DependencyInjection\Exception\LogicException
 */
public function testProcess3()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('security.access.decision_manager')) == false (line 35)
    // if (!$voters) == true (line 40)
    // throw new \Symfony\Component\DependencyInjection\Exception\LogicException('No security voters found. You need to tag at least one with "security.voter".') -> exception (line 41)

    $actual = $this->addSecurityVotersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcess4()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$container->hasDefinition('security.access.decision_manager')) == true (line 35)

    $actual = $this->addSecurityVotersPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
