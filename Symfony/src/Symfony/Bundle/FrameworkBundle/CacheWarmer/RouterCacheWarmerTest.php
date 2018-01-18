<?php

namespace tests\Symfony\Bundle\FrameworkBundle\CacheWarmer;

use Mockery as m;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer;

class RouterCacheWarmerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_container;
/**
* @var \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer
*/
protected $routerCacheWarmer;

public function setUp()
{
    parent::setUp();

    $this->_container = m::mock(\Psr\Container\ContainerInterface::class);
    $this->routerCacheWarmer = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->_container);
}

public function testWarmUp0()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($router instanceof \Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface) == false (line 46)

    $actual = $this->routerCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarmUp1()
{
    $cacheDir = m::mock('UntypedParameter_cacheDir_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($router instanceof \Symfony\Component\HttpKernel\CacheWarmer\WarmableInterface) == true (line 46)

    $actual = $this->routerCacheWarmer->warmUp($cacheDir);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsOptional0()
{
    // TODO: Your mock expectations here

    $actual = $this->routerCacheWarmer->isOptional();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSubscribedServices0()
{
    // TODO: Your mock expectations here

    $actual = $this->routerCacheWarmer->getSubscribedServices();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
