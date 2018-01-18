<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand;
use Symfony\Component\Filesystem\Filesystem;

class AssetsInstallCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_filesystem;
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand
*/
protected $assetsInstallCommand;

public function setUp()
{
    parent::setUp();

    $this->_filesystem = m::mock(\Symfony\Component\Filesystem\Filesystem::class);
    $this->assetsInstallCommand = new \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand($this->_filesystem);
}
}
