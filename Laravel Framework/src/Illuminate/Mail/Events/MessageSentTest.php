<?php

namespace tests\Illuminate\Mail\Events;

use Illuminate\Mail\Events\MessageSent;
use Mockery as m;

class MessageSentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var \Illuminate\Mail\Events\MessageSent
*/
protected $messageSent;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->messageSent = new \Illuminate\Mail\Events\MessageSent($this->_message);
}
}
