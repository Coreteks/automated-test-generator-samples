<?php

namespace tests\Illuminate\Mail\Events;

use Illuminate\Mail\Events\MessageSending;
use Mockery as m;

class MessageSendingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var \Illuminate\Mail\Events\MessageSending
*/
protected $messageSending;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->messageSending = new \Illuminate\Mail\Events\MessageSending($this->_message);
}
}
