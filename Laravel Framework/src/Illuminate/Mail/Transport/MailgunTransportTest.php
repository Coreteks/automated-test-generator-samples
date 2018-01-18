<?php

namespace tests\Illuminate\Mail\Transport;

use GuzzleHttp\ClientInterface;
use Illuminate\Mail\Transport\MailgunTransport;
use Mockery as m;

class MailgunTransportTest extends \PHPUnit_Framework_TestCase
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
* @var mixed
*/
protected $_domain = null;
/**
* @var \Illuminate\Mail\Transport\MailgunTransport
*/
protected $mailgunTransport;

public function setUp()
{
    parent::setUp();

    $this->_client = m::mock(\GuzzleHttp\ClientInterface::class);
    $this->_key = null;
    $this->_domain = null;
    $this->mailgunTransport = new \Illuminate\Mail\Transport\MailgunTransport($this->_client, $this->_key, $this->_domain);
}

public function testSend0()
{
    $message = m::mock(\Swift_Mime_SimpleMessage::class);
    $failedRecipients = m::mock('UntypedParameter_failedRecipients_');

    // TODO: Your mock expectations here

    $actual = $this->mailgunTransport->send($message, $failedRecipients);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailgunTransport->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetKey0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->mailgunTransport->setKey($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDomain0()
{
    // TODO: Your mock expectations here

    $actual = $this->mailgunTransport->getDomain();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDomain0()
{
    $domain = m::mock('UntypedParameter_domain_');

    // TODO: Your mock expectations here

    $actual = $this->mailgunTransport->setDomain($domain);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
