<?php

namespace tests\Symfony\Bridge\Monolog\Processor;

use Mockery as m;
use Symfony\Bridge\Monolog\Processor\WebProcessor;

class WebProcessorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_extraFields = [];
/**
* @var \Symfony\Bridge\Monolog\Processor\WebProcessor
*/
protected $webProcessor;

public function setUp()
{
    parent::setUp();

    $this->_extraFields = [];
    $this->webProcessor = new \Symfony\Bridge\Monolog\Processor\WebProcessor($this->_extraFields);
}

public function testOnKernelRequest0()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\GetResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($event->isMasterRequest()) == false (line 32)

    $actual = $this->webProcessor->onKernelRequest($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOnKernelRequest1()
{
    $event = m::mock(\Symfony\Component\HttpKernel\Event\GetResponseEvent::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($event->isMasterRequest()) == true (line 32)

    $actual = $this->webProcessor->onKernelRequest($event);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
