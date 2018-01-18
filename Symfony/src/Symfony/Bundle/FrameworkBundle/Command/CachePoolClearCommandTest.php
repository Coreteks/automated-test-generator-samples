<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand;
use Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer;

class CachePoolClearCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_poolClearer;
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand
*/
protected $cachePoolClearCommand;

public function setUp()
{
    parent::setUp();

    $this->_poolClearer = m::mock(\Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer::class);
    $this->cachePoolClearCommand = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand($this->_poolClearer);
}
}
