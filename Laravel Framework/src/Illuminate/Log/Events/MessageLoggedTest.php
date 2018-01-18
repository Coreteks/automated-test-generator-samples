<?php

namespace tests\Illuminate\Log\Events;

use Illuminate\Log\Events\MessageLogged;
use Mockery as m;

class MessageLoggedTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_message = null;
/**
* @var array
*/
protected $_context = [];
/**
* @var \Illuminate\Log\Events\MessageLogged
*/
protected $messageLogged;

public function setUp()
{
    parent::setUp();

    $this->_level = null;
    $this->_message = null;
    $this->_context = [];
    $this->messageLogged = new \Illuminate\Log\Events\MessageLogged($this->_level, $this->_message, $this->_context);
}
}
