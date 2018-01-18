<?php

namespace tests\Illuminate\Mail\Transport;

use Aws\Ses\SesClient;
use Illuminate\Mail\Transport\SesTransport;
use Mockery as m;

class SesTransportTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_ses;
/**
* @var \Illuminate\Mail\Transport\SesTransport
*/
protected $sesTransport;

public function setUp()
{
    parent::setUp();

    $this->_ses = m::mock(\Aws\Ses\SesClient::class);
    $this->sesTransport = new \Illuminate\Mail\Transport\SesTransport($this->_ses);
}

public function testSend0()
{
    $message = m::mock(\Swift_Mime_SimpleMessage::class);
    $failedRecipients = m::mock('UntypedParameter_failedRecipients_');

    // TODO: Your mock expectations here

    $actual = $this->sesTransport->send($message, $failedRecipients);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
