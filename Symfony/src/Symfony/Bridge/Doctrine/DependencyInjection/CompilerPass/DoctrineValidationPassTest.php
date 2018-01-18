<?php

namespace tests\Symfony\Bridge\Doctrine\DependencyInjection\CompilerPass;

use Mockery as m;
use Symfony\Bridge\Doctrine\DependencyInjection\CompilerPass\DoctrineValidationPass;

class DoctrineValidationPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_managerType = null;
/**
* @var \Symfony\Bridge\Doctrine\DependencyInjection\CompilerPass\DoctrineValidationPass
*/
protected $doctrineValidationPass;

public function setUp()
{
    parent::setUp();

    $this->_managerType = null;
    $this->doctrineValidationPass = new \Symfony\Bridge\Doctrine\DependencyInjection\CompilerPass\DoctrineValidationPass($this->_managerType);
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    $actual = $this->doctrineValidationPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
