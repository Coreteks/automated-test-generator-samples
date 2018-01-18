<?php

namespace tests\Illuminate\Console;

use Illuminate\Console\Command;
use Mockery as m;

class CommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Console\Command
*/
protected $command;

public function setUp()
{
    parent::setUp();

    $this->command = new \Illuminate\Console\Command();
}

public function testRun0()
{
    $input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->command->run($input, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall0()
{
    $command = m::mock('UntypedParameter_command_');
    $arguments = [];

    // TODO: Your mock expectations here

    $actual = $this->command->call($command, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCallSilent0()
{
    $command = m::mock('UntypedParameter_command_');
    $arguments = [];

    // TODO: Your mock expectations here

    $actual = $this->command->callSilent($command, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasArgument0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->command->hasArgument($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArgument0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 252)

    $actual = $this->command->argument($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArgument1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == true (line 252)

    $actual = $this->command->argument($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArguments0()
{
    // TODO: Your mock expectations here

    $actual = $this->command->arguments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasOption0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->command->hasOption($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOption0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == false (line 288)

    $actual = $this->command->option($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOption1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($key)) == true (line 288)

    $actual = $this->command->option($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOptions0()
{
    // TODO: Your mock expectations here

    $actual = $this->command->options();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConfirm0()
{
    $question = m::mock('UntypedParameter_question_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->command->confirm($question, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAsk0()
{
    $question = m::mock('UntypedParameter_question_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->command->ask($question, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAnticipate0()
{
    $question = m::mock('UntypedParameter_question_');
    $choices = [];
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->command->anticipate($question, $choices, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAskWithCompletion0()
{
    $question = m::mock('UntypedParameter_question_');
    $choices = [];
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->command->askWithCompletion($question, $choices, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSecret0()
{
    $question = m::mock('UntypedParameter_question_');
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    $actual = $this->command->secret($question, $fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChoice0()
{
    $question = m::mock('UntypedParameter_question_');
    $choices = [];
    $default = m::mock('UntypedParameter_default_');
    $attempts = m::mock('UntypedParameter_attempts_');
    $multiple = m::mock('UntypedParameter_multiple_');

    // TODO: Your mock expectations here

    $actual = $this->command->choice($question, $choices, $default, $attempts, $multiple);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTable0()
{
    $headers = m::mock('UntypedParameter_headers_');
    $rows = m::mock('UntypedParameter_rows_');
    $tableStyle = m::mock('UntypedParameter_tableStyle_');
    $columnStyles = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($rows instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 407)

    $actual = $this->command->table($headers, $rows, $tableStyle, $columnStyles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTable1()
{
    $headers = m::mock('UntypedParameter_headers_');
    $rows = m::mock('UntypedParameter_rows_');
    $tableStyle = m::mock('UntypedParameter_tableStyle_');
    $columnStyles = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($rows instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 407)

    $actual = $this->command->table($headers, $rows, $tableStyle, $columnStyles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTable2()
{
    $headers = m::mock('UntypedParameter_headers_');
    $rows = m::mock('UntypedParameter_rows_');
    $tableStyle = m::mock('UntypedParameter_tableStyle_');
    $columnStyles = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($rows instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 407)

    $actual = $this->command->table($headers, $rows, $tableStyle, $columnStyles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTable3()
{
    $headers = m::mock('UntypedParameter_headers_');
    $rows = m::mock('UntypedParameter_rows_');
    $tableStyle = m::mock('UntypedParameter_tableStyle_');
    $columnStyles = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($rows instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 407)

    $actual = $this->command->table($headers, $rows, $tableStyle, $columnStyles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInfo0()
{
    $string = m::mock('UntypedParameter_string_');
    $verbosity = m::mock('UntypedParameter_verbosity_');

    // TODO: Your mock expectations here

    $actual = $this->command->info($string, $verbosity);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLine0()
{
    $string = m::mock('UntypedParameter_string_');
    $style = m::mock('UntypedParameter_style_');
    $verbosity = m::mock('UntypedParameter_verbosity_');

    // TODO: Your mock expectations here

    $actual = $this->command->line($string, $style, $verbosity);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testComment0()
{
    $string = m::mock('UntypedParameter_string_');
    $verbosity = m::mock('UntypedParameter_verbosity_');

    // TODO: Your mock expectations here

    $actual = $this->command->comment($string, $verbosity);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuestion0()
{
    $string = m::mock('UntypedParameter_string_');
    $verbosity = m::mock('UntypedParameter_verbosity_');

    // TODO: Your mock expectations here

    $actual = $this->command->question($string, $verbosity);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    $string = m::mock('UntypedParameter_string_');
    $verbosity = m::mock('UntypedParameter_verbosity_');

    // TODO: Your mock expectations here

    $actual = $this->command->error($string, $verbosity);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarn0()
{
    $string = m::mock('UntypedParameter_string_');
    $verbosity = m::mock('UntypedParameter_verbosity_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->output->getFormatter()->hasStyle('warning')) == false (line 492)

    $actual = $this->command->warn($string, $verbosity);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWarn1()
{
    $string = m::mock('UntypedParameter_string_');
    $verbosity = m::mock('UntypedParameter_verbosity_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->output->getFormatter()->hasStyle('warning')) == true (line 492)

    $actual = $this->command->warn($string, $verbosity);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAlert0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->command->alert($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOutput0()
{
    // TODO: Your mock expectations here

    $actual = $this->command->getOutput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLaravel0()
{
    // TODO: Your mock expectations here

    $actual = $this->command->getLaravel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLaravel0()
{
    $laravel = m::mock('UntypedParameter_laravel_');

    // TODO: Your mock expectations here

    $actual = $this->command->setLaravel($laravel);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
