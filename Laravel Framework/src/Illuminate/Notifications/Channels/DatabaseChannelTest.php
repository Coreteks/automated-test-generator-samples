<?php

namespace tests\Illuminate\Notifications\Channels;

use Illuminate\Notifications\Channels\DatabaseChannel;
use Mockery as m;

class DatabaseChannelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Notifications\Channels\DatabaseChannel
*/
protected $databaseChannel;

public function setUp()
{
    parent::setUp();

    $this->databaseChannel = new \Illuminate\Notifications\Channels\DatabaseChannel();
}

public function testSend0()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock(\Illuminate\Notifications\Notification::class);

    // TODO: Your mock expectations here

    $actual = $this->databaseChannel->send($notifiable, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
