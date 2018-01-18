<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand;
use Symfony\Component\Routing\RouterInterface;

class RouterMatchCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_router;
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand
*/
protected $routerMatchCommand;

public function setUp()
{
    parent::setUp();

    $this->_router = m::mock(\Symfony\Component\Routing\RouterInterface::class);
    $this->routerMatchCommand = new \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand($this->_router);
}
}
