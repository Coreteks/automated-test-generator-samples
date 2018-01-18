<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\HistoryCommand;

class HistoryCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Psy\Command\HistoryCommand
*/
protected $historyCommand;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->historyCommand = new \Psy\Command\HistoryCommand($this->_name);
}

public function testSetReadline0()
{
    $readline = m::mock(\Psy\Readline\Readline::class);

    // TODO: Your mock expectations here

    $actual = $this->historyCommand->setReadline($readline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscape0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->historyCommand->escape($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
