<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand;
use Symfony\Component\Routing\RouterInterface;

class RouterDebugCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_router;
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand
*/
protected $routerDebugCommand;

public function setUp()
{
    parent::setUp();

    $this->_router = m::mock(\Symfony\Component\Routing\RouterInterface::class);
    $this->routerDebugCommand = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand($this->_router);
}
}
