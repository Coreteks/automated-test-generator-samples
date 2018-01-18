<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\EditCommand;

class EditCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_runtimeDir = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Psy\Command\EditCommand
*/
protected $editCommand;

public function setUp()
{
    parent::setUp();

    $this->_runtimeDir = null;
    $this->_name = null;
    $this->editCommand = new \Psy\Command\EditCommand($this->_runtimeDir, $this->_name);
}

public function testSetContext0()
{
    $context = m::mock(\Psy\Context::class);

    // TODO: Your mock expectations here

    $actual = $this->editCommand->setContext($context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
