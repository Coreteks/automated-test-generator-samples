<?php

namespace tests\Illuminate\Notifications\Events;

use Illuminate\Notifications\Events\NotificationSent;
use Mockery as m;

class NotificationSentTest extends \PHPUnit_Framework_TestCase
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
protected $_response = null;
/**
* @var \Illuminate\Notifications\Events\NotificationSent
*/
protected $notificationSent;

public function setUp()
{
    parent::setUp();

    $this->_notifiable = null;
    $this->_notification = null;
    $this->_channel = null;
    $this->_response = null;
    $this->notificationSent = new \Illuminate\Notifications\Events\NotificationSent($this->_notifiable, $this->_notification, $this->_channel, $this->_response);
}
}
