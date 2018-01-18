<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand;

class CachePoolPruneCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_pools = null;
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand
*/
protected $cachePoolPruneCommand;

public function setUp()
{
    parent::setUp();

    $this->_pools = null;
    $this->cachePoolPruneCommand = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand($this->_pools);
}
}
