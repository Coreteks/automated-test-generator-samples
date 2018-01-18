<?php

namespace tests\Illuminate\Broadcasting;

use Illuminate\Broadcasting\PresenceChannel;
use Mockery as m;

class PresenceChannelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Illuminate\Broadcasting\PresenceChannel
*/
protected $presenceChannel;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->presenceChannel = new \Illuminate\Broadcasting\PresenceChannel($this->_name);
}
}
