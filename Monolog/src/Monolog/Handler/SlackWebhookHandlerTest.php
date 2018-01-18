<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\SlackWebhookHandler;

class SlackWebhookHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_webhookUrl = null;
/**
* @var mixed
*/
protected $_channel = null;
/**
* @var mixed
*/
protected $_username = null;
/**
* @var mixed
*/
protected $_useAttachment = null;
/**
* @var mixed
*/
protected $_iconEmoji = null;
/**
* @var mixed
*/
protected $_useShortAttachment = null;
/**
* @var mixed
*/
protected $_includeContextAndExtra = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var array
*/
protected $_excludeFields = [];
/**
* @var \Monolog\Handler\SlackWebhookHandler
*/
protected $slackWebhookHandler;

public function setUp()
{
    parent::setUp();

    $this->_webhookUrl = null;
    $this->_channel = null;
    $this->_username = null;
    $this->_useAttachment = null;
    $this->_iconEmoji = null;
    $this->_useShortAttachment = null;
    $this->_includeContextAndExtra = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_excludeFields = [];
    $this->slackWebhookHandler = new \Monolog\Handler\SlackWebhookHandler($this->_webhookUrl, $this->_channel, $this->_username, $this->_useAttachment, $this->_iconEmoji, $this->_useShortAttachment, $this->_includeContextAndExtra, $this->_level, $this->_bubble, $this->_excludeFields);
}

public function testGetSlackRecord0()
{
    // TODO: Your mock expectations here

    $actual = $this->slackWebhookHandler->getSlackRecord();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFormatter0()
{
    $formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->slackWebhookHandler->setFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatter0()
{
    // TODO: Your mock expectations here

    $actual = $this->slackWebhookHandler->getFormatter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
