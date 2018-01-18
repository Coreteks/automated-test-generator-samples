<?php

namespace tests\Illuminate\Notifications\Events;

use Illuminate\Notifications\Events\NotificationFailed;
use Mockery as m;

class NotificationFailedTest extends \PHPUnit_Framework_TestCase
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
* @var mixed
*/
protected $_data = null;
/**
* @var \Illuminate\Notifications\Events\NotificationFailed
*/
protected $notificationFailed;

public function setUp()
{
    parent::setUp();

    $this->_notifiable = null;
    $this->_notification = null;
    $this->_channel = null;
    $this->_data = null;
    $this->notificationFailed = new \Illuminate\Notifications\Events\NotificationFailed($this->_notifiable, $this->_notification, $this->_channel, $this->_data);
}
}
