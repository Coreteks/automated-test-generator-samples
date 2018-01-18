<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\SendGridHandler;

class SendGridHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_apiUser = null;
/**
* @var mixed
*/
protected $_apiKey = null;
/**
* @var mixed
*/
protected $_from = null;
/**
* @var mixed
*/
protected $_to = null;
/**
* @var mixed
*/
protected $_subject = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var \Monolog\Handler\SendGridHandler
*/
protected $sendGridHandler;

public function setUp()
{
    parent::setUp();

    $this->_apiUser = null;
    $this->_apiKey = null;
    $this->_from = null;
    $this->_to = null;
    $this->_subject = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->sendGridHandler = new \Monolog\Handler\SendGridHandler($this->_apiUser, $this->_apiKey, $this->_from, $this->_to, $this->_subject, $this->_level, $this->_bubble);
}
}
