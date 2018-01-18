<?php

namespace tests\PHPUnit\TextUI;

use Mockery as m;
use PHPUnit\TextUI\Command;

class CommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\TextUI\Command
*/
protected $command;

public function setUp()
{
    parent::setUp();

    $this->command = new \PHPUnit\TextUI\Command();
}

public function testMain0()
{
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    $actual = $this->command->main($exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRun0()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun1()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == false (line 214)
    // if ($exit) == false (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun2()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == false (line 214)
    // if ($exit) == true (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun3()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == true (line 214)
    // if ($exit) == false (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun4()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == true (line 214)
    // if ($exit) == true (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun5()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == true (line 212)
    // if ($exit) == false (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun6()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == true (line 212)
    // if ($exit) == true (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun7()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == false (line 214)
    // if ($exit) == false (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun8()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == false (line 214)
    // if ($exit) == true (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun9()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == true (line 214)
    // if ($exit) == false (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun10()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == true (line 214)
    // if ($exit) == true (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun11()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == true (line 212)
    // if ($exit) == false (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun12()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == true (line 212)
    // if ($exit) == true (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun13()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == true (line 195)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun14()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == true (line 191)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun15()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == true (line 187)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun16()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == false (line 173)
    // if ($this->arguments['listGroups']) == true (line 183)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRun17()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun18()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == false (line 214)
    // if ($exit) == false (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun19()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == false (line 214)
    // if ($exit) == true (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun20()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == true (line 214)
    // if ($exit) == false (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun21()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == true (line 214)
    // if ($exit) == true (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun22()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == true (line 212)
    // if ($exit) == false (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun23()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == true (line 212)
    // if ($exit) == true (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun24()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == false (line 214)
    // if ($exit) == false (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun25()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == false (line 214)
    // if ($exit) == true (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun26()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == true (line 214)
    // if ($exit) == false (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun27()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == false (line 212)
    // if (!isset($result) || $result->errorCount() > 0) == true (line 214)
    // if ($exit) == true (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun28()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == true (line 212)
    // if ($exit) == false (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun29()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == false (line 195)
    // if (isset($result) && $result->wasSuccessful()) == true (line 212)
    // if ($exit) == true (line 218)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun30()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == false (line 191)
    // if ($this->arguments['listTestsXml']) == true (line 195)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun31()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == false (line 187)
    // if ($this->arguments['listTests']) == true (line 191)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun32()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == false (line 183)
    // if ($this->arguments['listSuites']) == true (line 187)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun33()
{
    $argv = [];
    $exit = m::mock('UntypedParameter_exit_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->arguments['test'] instanceof \PHPUnit\Framework\Test) == true (line 173)
    // if ($this->arguments['listGroups']) == true (line 183)

    $actual = $this->command->run($argv, $exit);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
