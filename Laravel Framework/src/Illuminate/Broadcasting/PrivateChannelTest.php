<?php

namespace tests\Illuminate\Broadcasting;

use Illuminate\Broadcasting\PrivateChannel;
use Mockery as m;

class PrivateChannelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Illuminate\Broadcasting\PrivateChannel
*/
protected $privateChannel;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->privateChannel = new \Illuminate\Broadcasting\PrivateChannel($this->_name);
}
}
