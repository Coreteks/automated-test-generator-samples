<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpKernel\CacheClearer\CacheClearerInterface;

class CacheClearCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_cacheClearer;
/**
* @var \Mockery\MockInterface
*/
protected $_filesystem;
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand
*/
protected $cacheClearCommand;

public function setUp()
{
    parent::setUp();

    $this->_cacheClearer = m::mock(\Symfony\Component\HttpKernel\CacheClearer\CacheClearerInterface::class);
    $this->_filesystem = m::mock(\Symfony\Component\Filesystem\Filesystem::class);
    $this->cacheClearCommand = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand($this->_cacheClearer, $this->_filesystem);
}
}
