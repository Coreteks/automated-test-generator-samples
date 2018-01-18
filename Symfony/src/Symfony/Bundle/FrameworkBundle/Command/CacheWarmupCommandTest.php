<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand;
use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate;

class CacheWarmupCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cacheWarmer;
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand
*/
protected $cacheWarmupCommand;

public function setUp()
{
    parent::setUp();

    $this->_cacheWarmer = m::mock(\Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate::class);
    $this->cacheWarmupCommand = new \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand($this->_cacheWarmer);
}
}
