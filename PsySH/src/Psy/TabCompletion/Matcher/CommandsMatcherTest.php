<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\CommandsMatcher;

class CommandsMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_commands = [];
/**
* @var \Psy\TabCompletion\Matcher\CommandsMatcher
*/
protected $commandsMatcher;

public function setUp()
{
    parent::setUp();

    $this->_commands = [];
    $this->commandsMatcher = new \Psy\TabCompletion\Matcher\CommandsMatcher($this->_commands);
}

public function testSetCommands0()
{
    $commands = [];

    // TODO: Your mock expectations here

    $actual = $this->commandsMatcher->setCommands($commands);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetCommands1()
{
    $commands = [];

    // TODO: Your mock expectations here

    $actual = $this->commandsMatcher->setCommands($commands);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches0()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    $actual = $this->commandsMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 104)
    // Case self::tokenIs($command, self::T_STRING) && !$this->isCommand($command[1]) && $this->matchCommand($command[1]) && empty($tokens) == false (line 105)

    $actual = $this->commandsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 104)
    // Case self::tokenIs($command, self::T_STRING) && !$this->isCommand($command[1]) && $this->matchCommand($command[1]) && empty($tokens) == true (line 105)

    $actual = $this->commandsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
