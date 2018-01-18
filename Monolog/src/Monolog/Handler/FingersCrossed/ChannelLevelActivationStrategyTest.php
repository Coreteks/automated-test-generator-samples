<?php

namespace tests\Monolog\Handler\FingersCrossed;

use Mockery as m;
use Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy;

class ChannelLevelActivationStrategyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_defaultActionLevel = null;
/**
* @var mixed
*/
protected $_channelToActionLevel = null;
/**
* @var \Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy
*/
protected $channelLevelActivationStrategy;

public function setUp()
{
    parent::setUp();

    $this->_defaultActionLevel = null;
    $this->_channelToActionLevel = null;
    $this->channelLevelActivationStrategy = new \Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy($this->_defaultActionLevel, $this->_channelToActionLevel);
}

public function testIsHandlerActivated0()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->channelToActionLevel[$record['channel']])) == false (line 53)

    $actual = $this->channelLevelActivationStrategy->isHandlerActivated($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsHandlerActivated1()
{
    $record = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->channelToActionLevel[$record['channel']])) == true (line 53)

    $actual = $this->channelLevelActivationStrategy->isHandlerActivated($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
