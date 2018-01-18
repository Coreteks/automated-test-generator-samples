<?php

namespace tests\Symfony\Bundle\FrameworkBundle\CacheWarmer;

use Mockery as m;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer;
use Symfony\Component\Validator\ValidatorBuilderInterface;

class ValidatorCacheWarmerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_validatorBuilder;
/**
* @var mixed
*/
protected $_phpArrayFile = null;
/**
* @var \Mockery\MockInterface
*/
protected $_fallbackPool;
/**
* @var \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer
*/
protected $validatorCacheWarmer;

public function setUp()
{
    parent::setUp();

    $this->_validatorBuilder = m::mock(\Symfony\Component\Validator\ValidatorBuilderInterface::class);
    $this->_phpArrayFile = null;
    $this->_fallbackPool = m::mock(\Psr\Cache\CacheItemPoolInterface::class);
    $this->validatorCacheWarmer = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer($this->_validatorBuilder, $this->_phpArrayFile, $this->_fallbackPool);
}
}
