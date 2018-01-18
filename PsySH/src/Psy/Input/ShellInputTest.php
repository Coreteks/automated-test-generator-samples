<?php

namespace tests\Psy\Input;

use Mockery as m;
use Psy\Input\ShellInput;

class ShellInputTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_input = null;
/**
* @var \Psy\Input\ShellInput
*/
protected $shellInput;

public function setUp()
{
    parent::setUp();

    $this->_input = null;
    $this->shellInput = new \Psy\Input\ShellInput($this->_input);
}

public function testBind0()
{
    $definition = m::mock(\Symfony\Component\Console\Input\InputDefinition::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($definition->getArgumentCount() > 0) == false (line 52)

    $actual = $this->shellInput->bind($definition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind1()
{
    $definition = m::mock(\Symfony\Component\Console\Input\InputDefinition::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($definition->getArgumentCount() > 0) == true (line 52)
    // if ($lastArg instanceof \Psy\Input\CodeArgument) == false (line 62)

    $actual = $this->shellInput->bind($definition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind2()
{
    $definition = m::mock(\Symfony\Component\Console\Input\InputDefinition::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($definition->getArgumentCount() > 0) == true (line 52)
    // if ($lastArg instanceof \Psy\Input\CodeArgument) == true (line 62)

    $actual = $this->shellInput->bind($definition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind3()
{
    $definition = m::mock(\Symfony\Component\Console\Input\InputDefinition::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($definition->getArgumentCount() > 0) == true (line 52)
    // if ($arg instanceof \Psy\Input\CodeArgument) == false (line 56)
    // if ($lastArg instanceof \Psy\Input\CodeArgument) == false (line 62)

    $actual = $this->shellInput->bind($definition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBind4()
{
    $definition = m::mock(\Symfony\Component\Console\Input\InputDefinition::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($definition->getArgumentCount() > 0) == true (line 52)
    // if ($arg instanceof \Psy\Input\CodeArgument) == false (line 56)
    // if ($lastArg instanceof \Psy\Input\CodeArgument) == true (line 62)

    $actual = $this->shellInput->bind($definition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testBind5()
{
    $definition = m::mock(\Symfony\Component\Console\Input\InputDefinition::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($definition->getArgumentCount() > 0) == true (line 52)
    // if ($arg instanceof \Psy\Input\CodeArgument) == true (line 56)
    // throw new \InvalidArgumentException($msg) -> exception (line 58)

    $actual = $this->shellInput->bind($definition);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
