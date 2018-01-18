<?php

namespace tests\Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory;

use Mockery as m;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\JsonLoginFactory;

class JsonLoginFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\JsonLoginFactory
*/
protected $jsonLoginFactory;

public function setUp()
{
    parent::setUp();

    $this->jsonLoginFactory = new \Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\JsonLoginFactory();
}

public function testGetPosition0()
{
    // TODO: Your mock expectations here

    $actual = $this->jsonLoginFactory->getPosition();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->jsonLoginFactory->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
