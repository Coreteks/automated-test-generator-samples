<?php

namespace tests\Symfony\Bridge\Doctrine\Test;

use Mockery as m;
use Symfony\Bridge\Doctrine\Test\TestRepositoryFactory;

class TestRepositoryFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Test\TestRepositoryFactory
*/
protected $testRepositoryFactory;

public function setUp()
{
    parent::setUp();

    $this->testRepositoryFactory = new \Symfony\Bridge\Doctrine\Test\TestRepositoryFactory();
}

public function testGetRepository0()
{
    $entityManager = m::mock(\Doctrine\ORM\EntityManagerInterface::class);
    $entityName = m::mock('UntypedParameter_entityName_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->repositoryList[$repositoryHash])) == false (line 36)

    $actual = $this->testRepositoryFactory->getRepository($entityManager, $entityName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetRepository1()
{
    $entityManager = m::mock(\Doctrine\ORM\EntityManagerInterface::class);
    $entityName = m::mock('UntypedParameter_entityName_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->repositoryList[$repositoryHash])) == true (line 36)

    $actual = $this->testRepositoryFactory->getRepository($entityManager, $entityName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRepository0()
{
    $entityManager = m::mock(\Doctrine\ORM\EntityManagerInterface::class);
    $entityName = m::mock('UntypedParameter_entityName_');
    $repository = m::mock(\Doctrine\Common\Persistence\ObjectRepository::class);

    // TODO: Your mock expectations here

    $actual = $this->testRepositoryFactory->setRepository($entityManager, $entityName, $repository);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
