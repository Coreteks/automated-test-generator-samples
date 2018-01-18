<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\ProcessUtils;
use Mockery as m;

class ProcessUtilsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\ProcessUtils
*/
protected $processUtils;

public function setUp()
{
    parent::setUp();

    $this->processUtils = new \Illuminate\Support\ProcessUtils();
}

public function testEscapeArgument0()
{
    $argument = m::mock('UntypedParameter_argument_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('\\' === DIRECTORY_SEPARATOR) == false (line 24)

    $actual = $this->processUtils->escapeArgument($argument);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscapeArgument1()
{
    $argument = m::mock('UntypedParameter_argument_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('\\' === DIRECTORY_SEPARATOR) == true (line 24)
    // if ('' === $argument) == false (line 25)
    // if ($quote) == false (line 48)

    $actual = $this->processUtils->escapeArgument($argument);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscapeArgument2()
{
    $argument = m::mock('UntypedParameter_argument_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('\\' === DIRECTORY_SEPARATOR) == true (line 24)
    // if ('' === $argument) == false (line 25)
    // if ($quote) == true (line 48)

    $actual = $this->processUtils->escapeArgument($argument);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscapeArgument3()
{
    $argument = m::mock('UntypedParameter_argument_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('\\' === DIRECTORY_SEPARATOR) == true (line 24)
    // if ('' === $argument) == false (line 25)
    // if ('"' === $part) == false (line 33)
    // if (self::isSurroundedBy($part, '%')) == false (line 35)
    // if ('\\' === substr($part, -1)) == false (line 40)
    // if ($quote) == false (line 48)

    $actual = $this->processUtils->escapeArgument($argument);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscapeArgument4()
{
    $argument = m::mock('UntypedParameter_argument_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('\\' === DIRECTORY_SEPARATOR) == true (line 24)
    // if ('' === $argument) == false (line 25)
    // if ('"' === $part) == false (line 33)
    // if (self::isSurroundedBy($part, '%')) == false (line 35)
    // if ('\\' === substr($part, -1)) == false (line 40)
    // if ($quote) == true (line 48)

    $actual = $this->processUtils->escapeArgument($argument);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscapeArgument5()
{
    $argument = m::mock('UntypedParameter_argument_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('\\' === DIRECTORY_SEPARATOR) == true (line 24)
    // if ('' === $argument) == false (line 25)
    // if ('"' === $part) == false (line 33)
    // if (self::isSurroundedBy($part, '%')) == false (line 35)
    // if ('\\' === substr($part, -1)) == true (line 40)
    // if ($quote) == false (line 48)

    $actual = $this->processUtils->escapeArgument($argument);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscapeArgument6()
{
    $argument = m::mock('UntypedParameter_argument_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('\\' === DIRECTORY_SEPARATOR) == true (line 24)
    // if ('' === $argument) == false (line 25)
    // if ('"' === $part) == false (line 33)
    // if (self::isSurroundedBy($part, '%')) == false (line 35)
    // if ('\\' === substr($part, -1)) == true (line 40)
    // if ($quote) == true (line 48)

    $actual = $this->processUtils->escapeArgument($argument);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscapeArgument7()
{
    $argument = m::mock('UntypedParameter_argument_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('\\' === DIRECTORY_SEPARATOR) == true (line 24)
    // if ('' === $argument) == false (line 25)
    // if ('"' === $part) == false (line 33)
    // if (self::isSurroundedBy($part, '%')) == true (line 35)
    // if ($quote) == false (line 48)

    $actual = $this->processUtils->escapeArgument($argument);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscapeArgument8()
{
    $argument = m::mock('UntypedParameter_argument_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('\\' === DIRECTORY_SEPARATOR) == true (line 24)
    // if ('' === $argument) == false (line 25)
    // if ('"' === $part) == false (line 33)
    // if (self::isSurroundedBy($part, '%')) == true (line 35)
    // if ($quote) == true (line 48)

    $actual = $this->processUtils->escapeArgument($argument);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscapeArgument9()
{
    $argument = m::mock('UntypedParameter_argument_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('\\' === DIRECTORY_SEPARATOR) == true (line 24)
    // if ('' === $argument) == false (line 25)
    // if ('"' === $part) == true (line 33)
    // if ($quote) == false (line 48)

    $actual = $this->processUtils->escapeArgument($argument);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscapeArgument10()
{
    $argument = m::mock('UntypedParameter_argument_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('\\' === DIRECTORY_SEPARATOR) == true (line 24)
    // if ('' === $argument) == false (line 25)
    // if ('"' === $part) == true (line 33)
    // if ($quote) == true (line 48)

    $actual = $this->processUtils->escapeArgument($argument);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEscapeArgument11()
{
    $argument = m::mock('UntypedParameter_argument_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('\\' === DIRECTORY_SEPARATOR) == true (line 24)
    // if ('' === $argument) == true (line 25)

    $actual = $this->processUtils->escapeArgument($argument);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
