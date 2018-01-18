<?php

namespace tests\Symfony\Bridge\Doctrine\Form\Type;

use Mockery as m;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EntityTypeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Form\Type\EntityType
*/
protected $entityType;

public function setUp()
{
    parent::setUp();

    $this->entityType = new \Symfony\Bridge\Doctrine\Form\Type\EntityType();
}

public function testConfigureOptions0()
{
    $resolver = m::mock(\Symfony\Component\OptionsResolver\OptionsResolver::class);

    // TODO: Your mock expectations here

    $actual = $this->entityType->configureOptions($resolver);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLoader0()
{
    $manager = m::mock(\Doctrine\Common\Persistence\ObjectManager::class);
    $queryBuilder = m::mock('UntypedParameter_queryBuilder_');
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->entityType->getLoader($manager, $queryBuilder, $class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBlockPrefix0()
{
    // TODO: Your mock expectations here

    $actual = $this->entityType->getBlockPrefix();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetQueryBuilderPartsForCachingHash0()
{
    $queryBuilder = m::mock('UntypedParameter_queryBuilder_');

    // TODO: Your mock expectations here

    $actual = $this->entityType->getQueryBuilderPartsForCachingHash($queryBuilder);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
