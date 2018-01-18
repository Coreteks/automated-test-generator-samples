<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\SlackbotHandler;

class SlackbotHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_slackTeam = null;
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
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\SlackbotHandler
*/
protected $slackbotHandler;

public function setUp()
{
    parent::setUp();

    $this->_slackTeam = null;
    $this->_token = null;
    $this->_channel = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->slackbotHandler = new \Monolog\Handler\SlackbotHandler($this->_slackTeam, $this->_token, $this->_channel, $this->_level, $this->_bubble);
}
}
