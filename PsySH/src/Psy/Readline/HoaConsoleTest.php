<?php

namespace tests\Psy\Readline;

use Mockery as m;
use Psy\Readline\HoaConsole;

class HoaConsoleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Readline\HoaConsole
*/
protected $hoaConsole;

public function setUp()
{
    parent::setUp();

    $this->hoaConsole = new \Psy\Readline\HoaConsole();
}

public function testIsSupported0()
{
    // TODO: Your mock expectations here

    $actual = $this->hoaConsole->isSupported();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHistory0()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    $actual = $this->hoaConsole->addHistory($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClearHistory0()
{
    // TODO: Your mock expectations here

    $actual = $this->hoaConsole->clearHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListHistory0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (($item = $this->hoaReadline->getHistory($i++)) !== null) == false (line 65)

    $actual = $this->hoaConsole->listHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testListHistory1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (($item = $this->hoaReadline->getHistory($i++)) !== null) == true (line 65)
    // while (($item = $this->hoaReadline->getHistory($i++)) !== null) == false (line 65)

    $actual = $this->hoaConsole->listHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadHistory0()
{
    // TODO: Your mock expectations here

    $actual = $this->hoaConsole->readHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReadline0()
{
    $prompt = m::mock('UntypedParameter_prompt_');

    // TODO: Your mock expectations here

    $actual = $this->hoaConsole->readline($prompt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRedisplay0()
{
    // TODO: Your mock expectations here

    $actual = $this->hoaConsole->redisplay();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteHistory0()
{
    // TODO: Your mock expectations here

    $actual = $this->hoaConsole->writeHistory();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
