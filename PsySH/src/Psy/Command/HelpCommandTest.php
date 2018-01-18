<?php

namespace tests\Psy\Command;

use Mockery as m;
use Psy\Command\HelpCommand;

class HelpCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Command\HelpCommand
*/
protected $helpCommand;

public function setUp()
{
    parent::setUp();

    $this->helpCommand = new \Psy\Command\HelpCommand();
}

public function testSetCommand0()
{
    $command = m::mock('UntypedParameter_command_');

    // TODO: Your mock expectations here

    $actual = $this->helpCommand->setCommand($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
