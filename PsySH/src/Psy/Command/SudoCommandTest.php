<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\SudoCommand;

class SudoCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Psy\Command\SudoCommand
*/
protected $sudoCommand;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->sudoCommand = new \Psy\Command\SudoCommand($this->_name);
}

public function testSetReadline0()
{
    $readline = m::mock(\Psy\Readline\Readline::class);

    // TODO: Your mock expectations here

    $actual = $this->sudoCommand->setReadline($readline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
