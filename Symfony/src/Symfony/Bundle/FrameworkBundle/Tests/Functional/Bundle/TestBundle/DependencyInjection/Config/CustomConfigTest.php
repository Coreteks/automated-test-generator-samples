<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\Config;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\Config\CustomConfig;

class CustomConfigTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\Config\CustomConfig
*/
protected $customConfig;

public function setUp()
{
    parent::setUp();

    $this->customConfig = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\Config\CustomConfig();
}

public function testAddConfiguration0()
{
    $rootNode = m::mock('UntypedParameter_rootNode_');

    // TODO: Your mock expectations here

    $actual = $this->customConfig->addConfiguration($rootNode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
