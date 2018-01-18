<?php

namespace tests\Illuminate\Notifications\Messages;

use Illuminate\Notifications\Messages\NexmoMessage;
use Mockery as m;

class NexmoMessageTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_content = null;
/**
* @var \Illuminate\Notifications\Messages\NexmoMessage
*/
protected $nexmoMessage;

public function setUp()
{
    parent::setUp();

    $this->_content = null;
    $this->nexmoMessage = new \Illuminate\Notifications\Messages\NexmoMessage($this->_content);
}

public function testContent0()
{
    $content = m::mock('UntypedParameter_content_');

    // TODO: Your mock expectations here

    $actual = $this->nexmoMessage->content($content);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFrom0()
{
    $from = m::mock('UntypedParameter_from_');

    // TODO: Your mock expectations here

    $actual = $this->nexmoMessage->from($from);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnicode0()
{
    // TODO: Your mock expectations here

    $actual = $this->nexmoMessage->unicode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
