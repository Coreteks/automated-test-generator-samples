<?php

namespace tests\Illuminate\Broadcasting;

use Illuminate\Broadcasting\Channel;
use Mockery as m;

class ChannelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Illuminate\Broadcasting\Channel
*/
protected $channel;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->channel = new \Illuminate\Broadcasting\Channel($this->_name);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->channel->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
