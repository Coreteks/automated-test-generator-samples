<?php

namespace tests\Symfony\Bridge\Monolog\Handler;

use Mockery as m;
use Symfony\Bridge\Monolog\Handler\SwiftMailerHandler;

class SwiftMailerHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Monolog\Handler\SwiftMailerHandler
*/
protected $swiftMailerHandler;

public function setUp()
{
    parent::setUp();

    $this->swiftMailerHandler = new \Symfony\Bridge\Monolog\Handler\SwiftMailerHandler();
}

public function testSetTransport0()
{
    $transport = m::mock(\Swift_Transport::class);

    // TODO: Your mock expectations here

    $actual = $this->swiftMailerHandler->setTransport($transport);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelTerminate0()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\PostResponseEvent::class);

    // TODO: Your mock expectations here

    $actual = $this->swiftMailerHandler->onKernelTerminate($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnCliTerminate0()
{
    $event = m::mock(\Symfony\Component\Console\Event\ConsoleTerminateEvent::class);

    // TODO: Your mock expectations here

    $actual = $this->swiftMailerHandler->onCliTerminate($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
