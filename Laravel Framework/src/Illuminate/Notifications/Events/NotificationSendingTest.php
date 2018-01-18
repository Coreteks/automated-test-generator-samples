<?php

namespace tests\Illuminate\Notifications\Events;

use Illuminate\Notifications\Events\NotificationSending;
use Mockery as m;

class NotificationSendingTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_notifiable = null;
/**
* @var mixed
*/
protected $_notification = null;
/**
* @var mixed
*/
protected $_channel = null;
/**
* @var \Illuminate\Notifications\Events\NotificationSending
*/
protected $notificationSending;

public function setUp()
{
    parent::setUp();

    $this->_notifiable = null;
    $this->_notification = null;
    $this->_channel = null;
    $this->notificationSending = new \Illuminate\Notifications\Events\NotificationSending($this->_notifiable, $this->_notification, $this->_channel);
}
}
