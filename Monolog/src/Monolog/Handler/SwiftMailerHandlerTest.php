<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\SwiftMailerHandler;
use Swift_Mailer;

class SwiftMailerHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_mailer;
/**
* @var mixed
*/
protected $_message = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\SwiftMailerHandler
*/
protected $swiftMailerHandler;

public function setUp()
{
    parent::setUp();

    $this->_mailer = m::mock(\Swift_Mailer::class);
    $this->_message = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->swiftMailerHandler = new \Monolog\Handler\SwiftMailerHandler($this->_mailer, $this->_message, $this->_level, $this->_bubble);
}
}
