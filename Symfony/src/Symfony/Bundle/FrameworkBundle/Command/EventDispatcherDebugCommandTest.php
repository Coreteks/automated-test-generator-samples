<?php

namespace tests\Symfony\Bundle\FrameworkBundle\Command;

use Mockery as m;
use Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class EventDispatcherDebugCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_dispatcher;
/**
* @var \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
*/
protected $eventDispatcherDebugCommand;

public function setUp()
{
    parent::setUp();

    $this->_dispatcher = m::mock(\Symfony\Component\EventDispatcher\EventDispatcherInterface::class);
    $this->eventDispatcherDebugCommand = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand($this->_dispatcher);
}
}
