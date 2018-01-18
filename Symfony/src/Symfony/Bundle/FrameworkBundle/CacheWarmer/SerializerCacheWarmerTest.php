<?php

namespace tests\Symfony\Bundle\FrameworkBundle\CacheWarmer;

use Mockery as m;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer;

class SerializerCacheWarmerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_loaders = [];
/**
* @var mixed
*/
protected $_phpArrayFile = null;
/**
* @var \Mockery\MockInterface
*/
protected $_fallbackPool;
/**
* @var \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer
*/
protected $serializerCacheWarmer;

public function setUp()
{
    parent::setUp();

    $this->_loaders = [];
    $this->_phpArrayFile = null;
    $this->_fallbackPool = m::mock(\Psr\Cache\CacheItemPoolInterface::class);
    $this->serializerCacheWarmer = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer($this->_loaders, $this->_phpArrayFile, $this->_fallbackPool);
}
}
