<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\MandrillHandler;

class MandrillHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_apiKey = null;
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
* @var \Monolog\Handler\MandrillHandler
*/
protected $mandrillHandler;

public function setUp()
{
    parent::setUp();

    $this->_apiKey = null;
    $this->_message = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->mandrillHandler = new \Monolog\Handler\MandrillHandler($this->_apiKey, $this->_message, $this->_level, $this->_bubble);
}
}
