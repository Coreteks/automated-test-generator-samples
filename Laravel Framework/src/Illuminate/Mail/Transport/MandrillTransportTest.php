<?php

namespace tests\Illuminate\Mail\Transport;

use GuzzleHttp\ClientInterface;
use Illuminate\Mail\Transport\MandrillTransport;
use Mockery as m;

class MandrillTransportTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_client;
/**
* @var mixed
*/
protected $_key = null;
/**
* @var \Illuminate\Mail\Transport\MandrillTransport
*/
protected $mandrillTransport;

public function setUp()
{
    parent::setUp();

    $this->_client = m::mock(\GuzzleHttp\ClientInterface::class);
    $this->_key = null;
    $this->mandrillTransport = new \Illuminate\Mail\Transport\MandrillTransport($this->_client, $this->_key);
}

public function testSend0()
{
    $message = m::mock(\Swift_Mime_SimpleMessage::class);
    $failedRecipients = m::mock('UntypedParameter_failedRecipients_');

    // TODO: Your mock expectations here

    $actual = $this->mandrillTransport->send($message, $failedRecipients);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->mandrillTransport->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetKey0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->mandrillTransport->setKey($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
