<?php

namespace tests\Illuminate\Mail\Transport;

use Illuminate\Mail\Transport\LogTransport;
use Mockery as m;
use Psr\Log\LoggerInterface;

class LogTransportTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_logger;
/**
* @var \Illuminate\Mail\Transport\LogTransport
*/
protected $logTransport;

public function setUp()
{
    parent::setUp();

    $this->_logger = m::mock(\Psr\Log\LoggerInterface::class);
    $this->logTransport = new \Illuminate\Mail\Transport\LogTransport($this->_logger);
}

public function testSend0()
{
    $message = m::mock(\Swift_Mime_SimpleMessage::class);
    $failedRecipients = m::mock('UntypedParameter_failedRecipients_');

    // TODO: Your mock expectations here

    $actual = $this->logTransport->send($message, $failedRecipients);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
