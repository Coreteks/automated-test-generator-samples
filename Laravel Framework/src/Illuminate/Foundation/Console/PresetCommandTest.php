<?php

namespace tests\Illuminate\Foundation\Console;

use Illuminate\Foundation\Console\PresetCommand;
use Mockery as m;

class PresetCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Foundation\Console\PresetCommand
*/
protected $presetCommand;

public function setUp()
{
    parent::setUp();

    $this->presetCommand = new \Illuminate\Foundation\Console\PresetCommand();
}

public function testHandle0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($this->argument('type'))) == false (line 31)
    // if (!in_array($this->argument('type'), ['none', 'bootstrap', 'vue', 'react'])) == false (line 35)

    $actual = $this->presetCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testHandle1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($this->argument('type'))) == false (line 31)
    // if (!in_array($this->argument('type'), ['none', 'bootstrap', 'vue', 'react'])) == true (line 35)
    // throw new \InvalidArgumentException('Invalid preset.') -> exception (line 36)

    $actual = $this->presetCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::hasMacro($this->argument('type'))) == true (line 31)

    $actual = $this->presetCommand->handle();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
