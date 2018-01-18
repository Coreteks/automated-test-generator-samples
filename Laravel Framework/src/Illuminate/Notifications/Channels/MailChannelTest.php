<?php

namespace tests\Illuminate\Notifications\Channels;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Mail\Markdown;
use Illuminate\Notifications\Channels\MailChannel;
use Mockery as m;

class MailChannelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_mailer;
/**
* @var \Mockery\MockInterface
*/
protected $_markdown;
/**
* @var \Illuminate\Notifications\Channels\MailChannel
*/
protected $mailChannel;

public function setUp()
{
    parent::setUp();

    $this->_mailer = m::mock(\Illuminate\Contracts\Mail\Mailer::class);
    $this->_markdown = m::mock(\Illuminate\Mail\Markdown::class);
    $this->mailChannel = new \Illuminate\Notifications\Channels\MailChannel($this->_mailer, $this->_markdown);
}

public function testSend0()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock(\Illuminate\Notifications\Notification::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$notifiable->routeNotificationFor('mail') && !$message instanceof \Illuminate\Contracts\Mail\Mailable) == false (line 52)
    // if ($message instanceof \Illuminate\Contracts\Mail\Mailable) == false (line 57)

    $actual = $this->mailChannel->send($notifiable, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend1()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock(\Illuminate\Notifications\Notification::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$notifiable->routeNotificationFor('mail') && !$message instanceof \Illuminate\Contracts\Mail\Mailable) == false (line 52)
    // if ($message instanceof \Illuminate\Contracts\Mail\Mailable) == true (line 57)

    $actual = $this->mailChannel->send($notifiable, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend2()
{
    $notifiable = m::mock('UntypedParameter_notifiable_');
    $notification = m::mock(\Illuminate\Notifications\Notification::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$notifiable->routeNotificationFor('mail') && !$message instanceof \Illuminate\Contracts\Mail\Mailable) == true (line 52)

    $actual = $this->mailChannel->send($notifiable, $notification);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
