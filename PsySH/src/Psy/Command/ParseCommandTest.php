<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\ParseCommand;

class ParseCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Psy\Command\ParseCommand
*/
protected $parseCommand;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->parseCommand = new \Psy\Command\ParseCommand($this->_name);
}

public function testSetPresenter0()
{
    $presenter = m::mock(\Psy\VarDumper\Presenter::class);

    // TODO: Your mock expectations here

    $actual = $this->parseCommand->setPresenter($presenter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
