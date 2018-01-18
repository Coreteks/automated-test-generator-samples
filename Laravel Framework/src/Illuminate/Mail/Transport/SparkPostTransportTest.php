<?php

namespace tests\Illuminate\Mail\Transport;

use GuzzleHttp\ClientInterface;
use Illuminate\Mail\Transport\SparkPostTransport;
use Mockery as m;

class SparkPostTransportTest extends \PHPUnit_Framework_TestCase
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
protected $_options = null;
/**
* @var \Illuminate\Mail\Transport\SparkPostTransport
*/
protected $sparkPostTransport;

public function setUp()
{
    parent::setUp();

    $this->_client = m::mock(\GuzzleHttp\ClientInterface::class);
    $this->_key = null;
    $this->_options = null;
    $this->sparkPostTransport = new \Illuminate\Mail\Transport\SparkPostTransport($this->_client, $this->_key, $this->_options);
}

public function testSend0()
{
    $message = m::mock(\Swift_Mime_SimpleMessage::class);
    $failedRecipients = m::mock('UntypedParameter_failedRecipients_');

    // TODO: Your mock expectations here

    $actual = $this->sparkPostTransport->send($message, $failedRecipients);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetKey0()
{
    // TODO: Your mock expectations here

    $actual = $this->sparkPostTransport->getKey();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetKey0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->sparkPostTransport->setKey($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOptions0()
{
    // TODO: Your mock expectations here

    $actual = $this->sparkPostTransport->getOptions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetOptions0()
{
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->sparkPostTransport->setOptions($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
