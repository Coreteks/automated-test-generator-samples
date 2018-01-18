<?php

namespace tests\Illuminate\Notifications\Messages;

use Illuminate\Notifications\Messages\BroadcastMessage;
use Mockery as m;

class BroadcastMessageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_data = [];
/**
* @var \Illuminate\Notifications\Messages\BroadcastMessage
*/
protected $broadcastMessage;

public function setUp()
{
    parent::setUp();

    $this->_data = [];
    $this->broadcastMessage = new \Illuminate\Notifications\Messages\BroadcastMessage($this->_data);
}

public function testData0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->broadcastMessage->data($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
