<?php

namespace tests\Illuminate\Notifications;

use Illuminate\Notifications\Action;
use Mockery as m;

class ActionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_text = null;
/**
* @var mixed
*/
protected $_url = null;
/**
* @var \Illuminate\Notifications\Action
*/
protected $action;

public function setUp()
{
    parent::setUp();

    $this->_text = null;
    $this->_url = null;
    $this->action = new \Illuminate\Notifications\Action($this->_text, $this->_url);
}
}
