<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\AutowiringTypes;

use Doctrine\Common\Annotations\Reader;
use Mockery as m;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\AutowiringTypes\AutowiredServices;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Templating\EngineInterface;

class AutowiredServicesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_annotationReader;
/**
* @var \Mockery\MockInterface
*/
protected $_frameworkBundleEngine;
/**
* @var \Mockery\MockInterface
*/
protected $_engine;
/**
* @var \Mockery\MockInterface
*/
protected $_dispatcher;
/**
* @var \Mockery\MockInterface
*/
protected $_cachePool;
/**
* @var \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\AutowiringTypes\AutowiredServices
*/
protected $autowiredServices;

public function setUp()
{
    parent::setUp();

    $this->_annotationReader = m::mock(\Doctrine\Common\Annotations\Reader::class);
    $this->_frameworkBundleEngine = m::mock(\Symfony\Bundle\FrameworkBundle\Templating\EngineInterface::class);
    $this->_engine = m::mock(\Symfony\Component\Templating\EngineInterface::class);
    $this->_dispatcher = m::mock(\Symfony\Component\EventDispatcher\EventDispatcherInterface::class);
    $this->_cachePool = m::mock(\Psr\Cache\CacheItemPoolInterface::class);
    $this->autowiredServices = new \Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\AutowiringTypes\AutowiredServices($this->_annotationReader, $this->_frameworkBundleEngine, $this->_engine, $this->_dispatcher, $this->_cachePool);
}

public function testGetAnnotationReader0()
{
    // TODO: Your mock expectations here

    $actual = $this->autowiredServices->getAnnotationReader();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFrameworkBundleEngine0()
{
    // TODO: Your mock expectations here

    $actual = $this->autowiredServices->getFrameworkBundleEngine();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEngine0()
{
    // TODO: Your mock expectations here

    $actual = $this->autowiredServices->getEngine();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDispatcher0()
{
    // TODO: Your mock expectations here

    $actual = $this->autowiredServices->getDispatcher();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCachePool0()
{
    // TODO: Your mock expectations here

    $actual = $this->autowiredServices->getCachePool();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
