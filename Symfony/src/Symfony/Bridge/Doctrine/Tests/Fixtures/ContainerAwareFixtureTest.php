<?php

namespace tests\Symfony\Bridge\Doctrine\Tests\Fixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\Tests\Fixtures\ContainerAwareFixture;

class ContainerAwareFixtureTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Tests\Fixtures\ContainerAwareFixture
*/
protected $containerAwareFixture;

public function setUp()
{
    parent::setUp();

    $this->containerAwareFixture = new \Symfony\Bridge\Doctrine\Tests\Fixtures\ContainerAwareFixture();
}

public function testSetContainer0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->containerAwareFixture->setContainer($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad0()
{
    $manager = m::mock(\Doctrine\Common\Persistence\ObjectManager::class);

    // TODO: Your mock expectations here

    $actual = $this->containerAwareFixture->load($manager);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
