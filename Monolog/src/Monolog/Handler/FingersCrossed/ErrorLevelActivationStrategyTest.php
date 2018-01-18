<?php

namespace tests\Monolog\Handler\FingersCrossed;

use Mockery as m;
use Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy;

class ErrorLevelActivationStrategyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_actionLevel = null;
/**
* @var \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy
*/
protected $errorLevelActivationStrategy;

public function setUp()
{
    parent::setUp();

    $this->_actionLevel = null;
    $this->errorLevelActivationStrategy = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy($this->_actionLevel);
}

public function testIsHandlerActivated0()
{
    $record = [];

    // TODO: Your mock expectations here

    $actual = $this->errorLevelActivationStrategy->isHandlerActivated($record);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
