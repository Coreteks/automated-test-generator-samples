<?php

namespace tests\Psy;

use Mockery as m;
use Psy\ConsoleColorFactory;

class ConsoleColorFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_colorMode = null;
/**
* @var \Psy\ConsoleColorFactory
*/
protected $consoleColorFactory;

public function setUp()
{
    parent::setUp();

    $this->_colorMode = null;
    $this->consoleColorFactory = new \Psy\ConsoleColorFactory($this->_colorMode);
}

public function testGetConsoleColor0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->colorMode === \Psy\Configuration::COLOR_MODE_AUTO) == false (line 40)
    // if ($this->colorMode === \Psy\Configuration::COLOR_MODE_FORCED) == false (line 42)
    // if ($this->colorMode === \Psy\Configuration::COLOR_MODE_DISABLED) == false (line 44)

    $actual = $this->consoleColorFactory->getConsoleColor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConsoleColor1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->colorMode === \Psy\Configuration::COLOR_MODE_AUTO) == false (line 40)
    // if ($this->colorMode === \Psy\Configuration::COLOR_MODE_FORCED) == false (line 42)
    // if ($this->colorMode === \Psy\Configuration::COLOR_MODE_DISABLED) == true (line 44)

    $actual = $this->consoleColorFactory->getConsoleColor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConsoleColor2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->colorMode === \Psy\Configuration::COLOR_MODE_AUTO) == false (line 40)
    // if ($this->colorMode === \Psy\Configuration::COLOR_MODE_FORCED) == true (line 42)

    $actual = $this->consoleColorFactory->getConsoleColor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetConsoleColor3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->colorMode === \Psy\Configuration::COLOR_MODE_AUTO) == true (line 40)

    $actual = $this->consoleColorFactory->getConsoleColor();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
