<?php

namespace tests\Illuminate\Notifications\Channels;

use GuzzleHttp\Client;
use Illuminate\Notifications\Channels\SlackWebhookChannel;
use Mockery as m;

class SlackWebhookChannelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_http;
/**
* @var \Illuminate\Notifications\Channels\SlackWebhookChannel
*/
protected $slackWebhookChannel;

public function setUp()
{
    parent::setUp();

    $this->_http = m::mock(\GuzzleHttp\Client::class);
    $this->slackWebhookChannel = new \Illuminate\Notifications\Channels\SlackWebhookChannel($this->_http);
}

public function testSend0()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock(\Illuminate\Notifications\Notification::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($url = $notifiable->routeNotificationFor('slack'))) == false (line 40)

    $actual = $this->slackWebhookChannel->send($notifiable, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend1()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock(\Illuminate\Notifications\Notification::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($url = $notifiable->routeNotificationFor('slack'))) == true (line 40)

    $actual = $this->slackWebhookChannel->send($notifiable, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
