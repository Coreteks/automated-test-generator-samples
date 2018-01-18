<?php

namespace tests\Psy;

use Mockery as m;
use Psy\Configuration;
use Psy\Shell;

class ShellTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_config;
/**
* @var \Psy\Shell
*/
protected $shell;

public function setUp()
{
    parent::setUp();

    $this->_config = m::mock(\Psy\Configuration::class);
    $this->shell = new \Psy\Shell($this->_config);
}

public function testIsIncluded0()
{
    $trace = [];

    // TODO: Your mock expectations here

    $actual = $this->shell->isIncluded($trace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDebug0()
{
    $vars = [];
    $boundObject = m::mock('UntypedParameter_boundObject_');

    // TODO: Your mock expectations here

    $actual = $this->shell->debug($vars, $boundObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $command = m::mock(\Symfony\Component\Console\Command\Command::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret = parent::add($command)) == false (line 134)

    $actual = $this->shell->add($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd1()
{
    $command = m::mock(\Symfony\Component\Console\Command\Command::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret = parent::add($command)) == true (line 134)
    // if ($ret instanceof \Psy\ContextAware) == false (line 135)
    // if ($ret instanceof \Psy\VarDumper\PresenterAware) == false (line 139)

    $actual = $this->shell->add($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd2()
{
    $command = m::mock(\Symfony\Component\Console\Command\Command::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret = parent::add($command)) == true (line 134)
    // if ($ret instanceof \Psy\ContextAware) == false (line 135)
    // if ($ret instanceof \Psy\VarDumper\PresenterAware) == true (line 139)

    $actual = $this->shell->add($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd3()
{
    $command = m::mock(\Symfony\Component\Console\Command\Command::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret = parent::add($command)) == true (line 134)
    // if ($ret instanceof \Psy\ContextAware) == true (line 135)
    // if ($ret instanceof \Psy\VarDumper\PresenterAware) == false (line 139)

    $actual = $this->shell->add($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd4()
{
    $command = m::mock(\Symfony\Component\Console\Command\Command::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret = parent::add($command)) == true (line 134)
    // if ($ret instanceof \Psy\ContextAware) == true (line 135)
    // if ($ret instanceof \Psy\VarDumper\PresenterAware) == true (line 139)

    $actual = $this->shell->add($command);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddTabCompletionMatchers0()
{
    $matchers = [];

    // TODO: Your mock expectations here

    $actual = $this->shell->addTabCompletionMatchers($matchers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetOutput0()
{
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->shell->setOutput($output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRun0()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === null && !isset($_SERVER['argv'])) == false (line 249)
    // if ($output === null) == false (line 253)

    $actual = $this->shell->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun1()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === null && !isset($_SERVER['argv'])) == false (line 249)
    // if ($output === null) == false (line 253)

    $actual = $this->shell->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun2()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === null && !isset($_SERVER['argv'])) == false (line 249)
    // if ($output === null) == false (line 253)

    $actual = $this->shell->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRun3()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === null && !isset($_SERVER['argv'])) == false (line 249)
    // if ($output === null) == true (line 253)

    $actual = $this->shell->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun4()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === null && !isset($_SERVER['argv'])) == false (line 249)
    // if ($output === null) == true (line 253)

    $actual = $this->shell->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun5()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === null && !isset($_SERVER['argv'])) == false (line 249)
    // if ($output === null) == true (line 253)

    $actual = $this->shell->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRun6()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === null && !isset($_SERVER['argv'])) == true (line 249)
    // if ($output === null) == false (line 253)

    $actual = $this->shell->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun7()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === null && !isset($_SERVER['argv'])) == true (line 249)
    // if ($output === null) == false (line 253)

    $actual = $this->shell->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun8()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === null && !isset($_SERVER['argv'])) == true (line 249)
    // if ($output === null) == false (line 253)

    $actual = $this->shell->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testRun9()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === null && !isset($_SERVER['argv'])) == true (line 249)
    // if ($output === null) == true (line 253)

    $actual = $this->shell->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun10()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === null && !isset($_SERVER['argv'])) == true (line 249)
    // if ($output === null) == true (line 253)

    $actual = $this->shell->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun11()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === null && !isset($_SERVER['argv'])) == true (line 249)
    // if ($output === null) == true (line 253)

    $actual = $this->shell->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testDoRun0()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->shell->doRun($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testDoRun1()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw $e->getPrevious() -> exception (line 296)

    $actual = $this->shell->doRun($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDoRun2()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->shell->doRun($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInput0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === false) == false (line 324)
    // if (trim($input) === '') == false (line 335)
    // if ($this->hasCommand($input)) == false (line 339)
    // PhpParser\Node\Stmt\Do_ == false (line 312)

    $actual = $this->shell->getInput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInput1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === false) == false (line 324)
    // if (trim($input) === '') == false (line 335)
    // if ($this->hasCommand($input)) == true (line 339)
    // PhpParser\Node\Stmt\Do_ == false (line 312)

    $actual = $this->shell->getInput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInput2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === false) == false (line 324)
    // if (trim($input) === '') == true (line 335)
    // PhpParser\Node\Stmt\Do_ == false (line 312)

    $actual = $this->shell->getInput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\BreakException
 */
public function testGetInput3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === false) == true (line 324)
    // if ($this->hasCode()) == false (line 327)
    // throw new \Psy\Exception\BreakException('Ctrl+D') -> exception (line 330)

    $actual = $this->shell->getInput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInput4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === false) == true (line 324)
    // if ($this->hasCode()) == true (line 327)
    // if (trim($input) === '') == false (line 335)
    // if ($this->hasCommand($input)) == false (line 339)
    // PhpParser\Node\Stmt\Do_ == false (line 312)

    $actual = $this->shell->getInput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInput5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === false) == true (line 324)
    // if ($this->hasCode()) == true (line 327)
    // if (trim($input) === '') == false (line 335)
    // if ($this->hasCommand($input)) == true (line 339)
    // PhpParser\Node\Stmt\Do_ == false (line 312)

    $actual = $this->shell->getInput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetInput6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($input === false) == true (line 324)
    // if ($this->hasCode()) == true (line 327)
    // if (trim($input) === '') == true (line 335)
    // PhpParser\Node\Stmt\Do_ == false (line 312)

    $actual = $this->shell->getInput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeLoop0()
{
    // TODO: Your mock expectations here

    $actual = $this->shell->beforeLoop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfterLoop0()
{
    // TODO: Your mock expectations here

    $actual = $this->shell->afterLoop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetScopeVariables0()
{
    $vars = [];

    // TODO: Your mock expectations here

    $actual = $this->shell->setScopeVariables($vars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetScopeVariables0()
{
    $includeBoundObject = m::mock('UntypedParameter_includeBoundObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$includeBoundObject) == false (line 393)

    $actual = $this->shell->getScopeVariables($includeBoundObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetScopeVariables1()
{
    $includeBoundObject = m::mock('UntypedParameter_includeBoundObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$includeBoundObject) == true (line 393)

    $actual = $this->shell->getScopeVariables($includeBoundObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSpecialScopeVariables0()
{
    $includeBoundObject = m::mock('UntypedParameter_includeBoundObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$includeBoundObject) == false (line 413)

    $actual = $this->shell->getSpecialScopeVariables($includeBoundObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSpecialScopeVariables1()
{
    $includeBoundObject = m::mock('UntypedParameter_includeBoundObject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$includeBoundObject) == true (line 413)

    $actual = $this->shell->getSpecialScopeVariables($includeBoundObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetUnusedCommandScopeVariableNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->shell->getUnusedCommandScopeVariableNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetScopeVariableNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->shell->getScopeVariableNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetScopeVariable0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->shell->getScopeVariable($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetBoundObject0()
{
    $boundObject = m::mock('UntypedParameter_boundObject_');

    // TODO: Your mock expectations here

    $actual = $this->shell->setBoundObject($boundObject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetBoundObject0()
{
    // TODO: Your mock expectations here

    $actual = $this->shell->getBoundObject();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetIncludes0()
{
    $includes = [];

    // TODO: Your mock expectations here

    $actual = $this->shell->setIncludes($includes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIncludes0()
{
    // TODO: Your mock expectations here

    $actual = $this->shell->getIncludes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasCode0()
{
    // TODO: Your mock expectations here

    $actual = $this->shell->hasCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testAddCode0()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr(rtrim($code), -1) === '\\') -> exception (line 523)

    $actual = $this->shell->addCode($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testAddCode1()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr(rtrim($code), -1) === '\\') -> exception (line 523)
    // throw $e -> exception (line 536)

    $actual = $this->shell->addCode($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testAddCode2()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr(rtrim($code), -1) === '\\') == false (line 523)

    $actual = $this->shell->addCode($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testAddCode3()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr(rtrim($code), -1) === '\\') == false (line 523)
    // throw $e -> exception (line 536)

    $actual = $this->shell->addCode($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddCode4()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr(rtrim($code), -1) === '\\') == false (line 523)

    $actual = $this->shell->addCode($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testAddCode5()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr(rtrim($code), -1) === '\\') == true (line 523)

    $actual = $this->shell->addCode($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testAddCode6()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr(rtrim($code), -1) === '\\') == true (line 523)
    // throw $e -> exception (line 536)

    $actual = $this->shell->addCode($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testAddCode7()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr(rtrim($code), -1) === '\\') == true (line 523)

    $actual = $this->shell->addCode($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testAddCode8()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr(rtrim($code), -1) === '\\') == true (line 523)
    // throw $e -> exception (line 536)

    $actual = $this->shell->addCode($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddCode9()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr(rtrim($code), -1) === '\\') == true (line 523)

    $actual = $this->shell->addCode($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCodeBuffer0()
{
    // TODO: Your mock expectations here

    $actual = $this->shell->getCodeBuffer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResetCodeBuffer0()
{
    // TODO: Your mock expectations here

    $actual = $this->shell->resetCodeBuffer();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddInput0()
{
    $input = m::mock('UntypedParameter_input_');
    $silent = m::mock('UntypedParameter_silent_');

    // TODO: Your mock expectations here

    $actual = $this->shell->addInput($input, $silent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddInput1()
{
    $input = m::mock('UntypedParameter_input_');
    $silent = m::mock('UntypedParameter_silent_');

    // TODO: Your mock expectations here

    $actual = $this->shell->addInput($input, $silent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlushCode0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasValidCode()) == false (line 618)

    $actual = $this->shell->flushCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlushCode1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasValidCode()) == true (line 618)

    $actual = $this->shell->flushCode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespace0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($namespace = $this->cleaner->getNamespace()) == false (line 652)

    $actual = $this->shell->getNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespace1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($namespace = $this->cleaner->getNamespace()) == true (line 652)

    $actual = $this->shell->getNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout0()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == false (line 668)
    // if ($out !== '' && !$isCleaning) == false (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == false (line 680)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout1()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == false (line 668)
    // if ($out !== '' && !$isCleaning) == false (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == false (line 682)
    // if ($this->stdoutBuffer !== '') == false (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout2()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == false (line 668)
    // if ($out !== '' && !$isCleaning) == false (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == false (line 682)
    // if ($this->stdoutBuffer !== '') == true (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout3()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == false (line 668)
    // if ($out !== '' && !$isCleaning) == false (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == true (line 682)
    // if ($this->stdoutBuffer !== '') == false (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout4()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == false (line 668)
    // if ($out !== '' && !$isCleaning) == false (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == true (line 682)
    // if ($this->stdoutBuffer !== '') == true (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout5()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == false (line 668)
    // if ($out !== '' && !$isCleaning) == true (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == false (line 680)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout6()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == false (line 668)
    // if ($out !== '' && !$isCleaning) == true (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == false (line 682)
    // if ($this->stdoutBuffer !== '') == false (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout7()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == false (line 668)
    // if ($out !== '' && !$isCleaning) == true (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == false (line 682)
    // if ($this->stdoutBuffer !== '') == true (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout8()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == false (line 668)
    // if ($out !== '' && !$isCleaning) == true (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == true (line 682)
    // if ($this->stdoutBuffer !== '') == false (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout9()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == false (line 668)
    // if ($out !== '' && !$isCleaning) == true (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == true (line 682)
    // if ($this->stdoutBuffer !== '') == true (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout10()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == true (line 668)
    // if ($out !== '' && !$isCleaning) == false (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == false (line 680)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout11()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == true (line 668)
    // if ($out !== '' && !$isCleaning) == false (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == false (line 682)
    // if ($this->stdoutBuffer !== '') == false (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout12()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == true (line 668)
    // if ($out !== '' && !$isCleaning) == false (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == false (line 682)
    // if ($this->stdoutBuffer !== '') == true (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout13()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == true (line 668)
    // if ($out !== '' && !$isCleaning) == false (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == true (line 682)
    // if ($this->stdoutBuffer !== '') == false (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout14()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == true (line 668)
    // if ($out !== '' && !$isCleaning) == false (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == true (line 682)
    // if ($this->stdoutBuffer !== '') == true (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout15()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == true (line 668)
    // if ($out !== '' && !$isCleaning) == true (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == false (line 680)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout16()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == true (line 668)
    // if ($out !== '' && !$isCleaning) == true (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == false (line 682)
    // if ($this->stdoutBuffer !== '') == false (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout17()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == true (line 668)
    // if ($out !== '' && !$isCleaning) == true (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == false (line 682)
    // if ($this->stdoutBuffer !== '') == true (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout18()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == true (line 668)
    // if ($out !== '' && !$isCleaning) == true (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == true (line 682)
    // if ($this->stdoutBuffer !== '') == false (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteStdout19()
{
    $out = m::mock('UntypedParameter_out_');
    $phase = m::mock('UntypedParameter_phase_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '5.4', '>=')) == true (line 668)
    // if ($out !== '' && !$isCleaning) == true (line 673)
    // if ($phase & PHP_OUTPUT_HANDLER_END) == true (line 680)
    // if ($this->outputWantsNewline) == true (line 682)
    // if ($this->stdoutBuffer !== '') == true (line 688)

    $actual = $this->shell->writeStdout($out, $phase);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteReturnValue0()
{
    $ret = m::mock('UntypedParameter_ret_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret instanceof \Psy\CodeCleaner\NoReturnValue) == false (line 707)

    $actual = $this->shell->writeReturnValue($ret);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteReturnValue1()
{
    $ret = m::mock('UntypedParameter_ret_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($ret instanceof \Psy\CodeCleaner\NoReturnValue) == true (line 707)

    $actual = $this->shell->writeReturnValue($ret);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWriteException0()
{
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    $actual = $this->shell->writeException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatException0()
{
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Psy\Exception\Exception) == false (line 748)

    $actual = $this->shell->formatException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatException1()
{
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Psy\Exception\Exception) == true (line 748)
    // if ($message === '') == false (line 749)

    $actual = $this->shell->formatException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormatException2()
{
    $e = m::mock(\Exception::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$e instanceof \Psy\Exception\Exception) == true (line 748)
    // if ($message === '') == true (line 749)

    $actual = $this->shell->formatException($e);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleError0()
{
    $errno = m::mock('UntypedParameter_errno_');
    $errstr = m::mock('UntypedParameter_errstr_');
    $errfile = m::mock('UntypedParameter_errfile_');
    $errline = m::mock('UntypedParameter_errline_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($errno & error_reporting()) == false (line 819)
    // if ($errno & $this->config->errorLoggingLevel()) == false (line 821)

    $actual = $this->shell->handleError($errno, $errstr, $errfile, $errline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleError1()
{
    $errno = m::mock('UntypedParameter_errno_');
    $errstr = m::mock('UntypedParameter_errstr_');
    $errfile = m::mock('UntypedParameter_errfile_');
    $errline = m::mock('UntypedParameter_errline_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($errno & error_reporting()) == false (line 819)
    // if ($errno & $this->config->errorLoggingLevel()) == true (line 821)

    $actual = $this->shell->handleError($errno, $errstr, $errfile, $errline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleError2()
{
    $errno = m::mock('UntypedParameter_errno_');
    $errstr = m::mock('UntypedParameter_errstr_');
    $errfile = m::mock('UntypedParameter_errfile_');
    $errline = m::mock('UntypedParameter_errline_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($errno & error_reporting()) == true (line 819)

    $actual = $this->shell->handleError($errno, $errstr, $errfile, $errline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetVersion0()
{
    // TODO: Your mock expectations here

    $actual = $this->shell->getVersion();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetManualDb0()
{
    // TODO: Your mock expectations here

    $actual = $this->shell->getManualDb();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
