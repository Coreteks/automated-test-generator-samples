<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\TestBundle;

class TestBundleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\TestBundle
*/
protected $testBundle;

public function setUp()
{
    parent::setUp();

    $this->testBundle = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\TestBundle();
}

public function testBuild0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    $actual = $this->testBundle->build($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
