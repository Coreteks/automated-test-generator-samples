<?php

namespace tests\Symfony\Bundle\FrameworkBundle\CacheWarmer;

use Doctrine\Common\Annotations\Reader;
use Mockery as m;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer;

class AnnotationsCacheWarmerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_annotationReader;
/**
* @var mixed
*/
protected $_phpArrayFile = null;
/**
* @var \Mockery\MockInterface
*/
protected $_fallbackPool;
/**
* @var mixed
*/
protected $_excludeRegexp = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer
*/
protected $annotationsCacheWarmer;

public function setUp()
{
    parent::setUp();

    $this->_annotationReader = m::mock(\Doctrine\Common\Annotations\Reader::class);
    $this->_phpArrayFile = null;
    $this->_fallbackPool = m::mock(\Psr\Cache\CacheItemPoolInterface::class);
    $this->_excludeRegexp = null;
    $this->annotationsCacheWarmer = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer($this->_annotationReader, $this->_phpArrayFile, $this->_fallbackPool, $this->_excludeRegexp);
}
}
