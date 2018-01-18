<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Command\CacheClearCommand\Fixture;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Tests\Command\CacheClearCommand\Fixture\TestAppKernel;

class TestAppKernelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Command\CacheClearCommand\Fixture\TestAppKernel
*/
protected $testAppKernel;

public function setUp()
{
    parent::setUp();

    $this->testAppKernel = new \Symfony\Bundle\FrameworkBundle\Tests\Command\CacheClearCommand\Fixture\TestAppKernel();
}

public function testRegisterBundles0()
{
    // TODO: Your mock expectations here

    $actual = $this->testAppKernel->registerBundles();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRootDir0()
{
    $rootDir = m::mock('UntypedParameter_rootDir_');

    // TODO: Your mock expectations here

    $actual = $this->testAppKernel->setRootDir($rootDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegisterContainerConfiguration0()
{
    $loader = m::mock(\Symfony\Component\Config\Loader\LoaderInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->testAppKernel->registerContainerConfiguration($loader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
