<?php

namespace tests\Symfony\Bridge\Doctrine\Validator;

use Doctrine\Common\Persistence\ManagerRegistry;
use Mockery as m;
use Symfony\Bridge\Doctrine\Validator\DoctrineInitializer;

class DoctrineInitializerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_registry;
/**
* @var \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
*/
protected $doctrineInitializer;

public function setUp()
{
    parent::setUp();

    $this->_registry = m::mock(\Doctrine\Common\Persistence\ManagerRegistry::class);
    $this->doctrineInitializer = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->_registry);
}

public function testInitialize0()
{
    $object = m::mock('UntypedParameter_object_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $manager) == false (line 34)

    $actual = $this->doctrineInitializer->initialize($object);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize1()
{
    $object = m::mock('UntypedParameter_object_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $manager) == true (line 34)

    $actual = $this->doctrineInitializer->initialize($object);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
