<?php

namespace tests\Symfony\Bridge\Doctrine\DataFixtures;

use Mockery as m;
use Symfony\Bridge\Doctrine\DataFixtures\ContainerAwareLoader;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ContainerAwareLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Symfony\Bridge\Doctrine\DataFixtures\ContainerAwareLoader
*/
protected $containerAwareLoader;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Symfony\Component\DependencyInjection\ContainerInterface::class);
    $this->containerAwareLoader = new \Symfony\Bridge\Doctrine\DataFixtures\ContainerAwareLoader($this->_container);
}

public function testAddFixture0()
{
    $fixture = m::mock(\Doctrine\Common\DataFixtures\FixtureInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($fixture instanceof \Symfony\Component\DependencyInjection\ContainerAwareInterface) == false (line 40)

    $actual = $this->containerAwareLoader->addFixture($fixture);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddFixture1()
{
    $fixture = m::mock(\Doctrine\Common\DataFixtures\FixtureInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($fixture instanceof \Symfony\Component\DependencyInjection\ContainerAwareInterface) == true (line 40)

    $actual = $this->containerAwareLoader->addFixture($fixture);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
