<?php

namespace tests\Illuminate\Mail\Transport;

use Illuminate\Mail\Transport\ArrayTransport;
use Mockery as m;

class ArrayTransportTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Mail\Transport\ArrayTransport
*/
protected $arrayTransport;

public function setUp()
{
    parent::setUp();

    $this->arrayTransport = new \Illuminate\Mail\Transport\ArrayTransport();
}

public function testSend0()
{
    $message = m::mock(\Swift_Mime_SimpleMessage::class);
    $failedRecipients = m::mock('UntypedParameter_failedRecipients_');

    // TODO: Your mock expectations here

    $actual = $this->arrayTransport->send($message, $failedRecipients);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMessages0()
{
    // TODO: Your mock expectations here

    $actual = $this->arrayTransport->messages();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->arrayTransport->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
