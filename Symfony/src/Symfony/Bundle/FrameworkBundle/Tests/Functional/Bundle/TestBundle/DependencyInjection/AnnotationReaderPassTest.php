<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\AnnotationReaderPass;

class AnnotationReaderPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\AnnotationReaderPass
*/
protected $annotationReaderPass;

public function setUp()
{
    parent::setUp();

    $this->annotationReaderPass = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\AnnotationReaderPass();
}

public function testProcess0()
{
    $container = m::mock(\Symfony\Component\DependencyInjection\ContainerBuilder::class);

    // TODO: Your mock expectations here

    $actual = $this->annotationReaderPass->process($container);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
