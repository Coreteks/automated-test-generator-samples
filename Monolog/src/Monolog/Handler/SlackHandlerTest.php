<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\SlackHandler;

class SlackHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_token = null;
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
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var mixed
*/
protected $_useShortAttachment = null;
/**
* @var mixed
*/
protected $_includeContextAndExtra = null;
/**
* @var array
*/
protected $_excludeFields = [];
/**
* @var \Monolog\Handler\SlackHandler
*/
protected $slackHandler;

public function setUp()
{
    parent::setUp();

    $this->_token = null;
    $this->_channel = null;
    $this->_username = null;
    $this->_useAttachment = null;
    $this->_iconEmoji = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_useShortAttachment = null;
    $this->_includeContextAndExtra = null;
    $this->_excludeFields = [];
    $this->slackHandler = new \Monolog\Handler\SlackHandler($this->_token, $this->_channel, $this->_username, $this->_useAttachment, $this->_iconEmoji, $this->_level, $this->_bubble, $this->_useShortAttachment, $this->_includeContextAndExtra, $this->_excludeFields);
}

public function testGetSlackRecord0()
{
    // TODO: Your mock expectations here

    $actual = $this->slackHandler->getSlackRecord();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFormatter0()
{
    $formatter = m::mock(\Monolog\Formatter\FormatterInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->slackHandler->setFormatter($formatter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFormatter0()
{
    // TODO: Your mock expectations here

    $actual = $this->slackHandler->getFormatter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
