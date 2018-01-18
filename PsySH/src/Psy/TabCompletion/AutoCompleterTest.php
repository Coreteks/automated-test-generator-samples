<?php

namespace tests\Psy\TabCompletion;

use Mockery as m;
use Psy\TabCompletion\AutoCompleter;

class AutoCompleterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\AutoCompleter
*/
protected $autoCompleter;

public function setUp()
{
    parent::setUp();

    $this->autoCompleter = new \Psy\TabCompletion\AutoCompleter();
}

public function testAddMatcher0()
{
    $matcher = m::mock(\Psy\TabCompletion\Matcher\AbstractMatcher::class);

    // TODO: Your mock expectations here

    $actual = $this->autoCompleter->addMatcher($matcher);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testActivate0()
{
    // TODO: Your mock expectations here

    $actual = $this->autoCompleter->activate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessCallback0()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($info['end'])) == false (line 58)
    // if ($line === '' && $input !== '') == false (line 61)

    $actual = $this->autoCompleter->processCallback($input, $index, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessCallback1()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($info['end'])) == false (line 58)
    // if ($line === '' && $input !== '') == false (line 61)
    // if ($matcher->hasMatched($tokens)) == false (line 74)

    $actual = $this->autoCompleter->processCallback($input, $index, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessCallback2()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($info['end'])) == false (line 58)
    // if ($line === '' && $input !== '') == false (line 61)
    // if ($matcher->hasMatched($tokens)) == true (line 74)

    $actual = $this->autoCompleter->processCallback($input, $index, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessCallback3()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($info['end'])) == false (line 58)
    // if ($line === '' && $input !== '') == true (line 61)

    $actual = $this->autoCompleter->processCallback($input, $index, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessCallback4()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($info['end'])) == false (line 58)
    // if ($line === '' && $input !== '') == true (line 61)
    // if ($matcher->hasMatched($tokens)) == false (line 74)

    $actual = $this->autoCompleter->processCallback($input, $index, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessCallback5()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($info['end'])) == false (line 58)
    // if ($line === '' && $input !== '') == true (line 61)
    // if ($matcher->hasMatched($tokens)) == true (line 74)

    $actual = $this->autoCompleter->processCallback($input, $index, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessCallback6()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($info['end'])) == true (line 58)
    // if ($line === '' && $input !== '') == false (line 61)

    $actual = $this->autoCompleter->processCallback($input, $index, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessCallback7()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($info['end'])) == true (line 58)
    // if ($line === '' && $input !== '') == false (line 61)
    // if ($matcher->hasMatched($tokens)) == false (line 74)

    $actual = $this->autoCompleter->processCallback($input, $index, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessCallback8()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($info['end'])) == true (line 58)
    // if ($line === '' && $input !== '') == false (line 61)
    // if ($matcher->hasMatched($tokens)) == true (line 74)

    $actual = $this->autoCompleter->processCallback($input, $index, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessCallback9()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($info['end'])) == true (line 58)
    // if ($line === '' && $input !== '') == true (line 61)

    $actual = $this->autoCompleter->processCallback($input, $index, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessCallback10()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($info['end'])) == true (line 58)
    // if ($line === '' && $input !== '') == true (line 61)
    // if ($matcher->hasMatched($tokens)) == false (line 74)

    $actual = $this->autoCompleter->processCallback($input, $index, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProcessCallback11()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');
    $info = m::mock('UntypedParameter_info_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($info['end'])) == true (line 58)
    // if ($line === '' && $input !== '') == true (line 61)
    // if ($matcher->hasMatched($tokens)) == true (line 74)

    $actual = $this->autoCompleter->processCallback($input, $index, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCallback0()
{
    $input = m::mock('UntypedParameter_input_');
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    $actual = $this->autoCompleter->callback($input, $index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (function_exists('readline_callback_handler_remove')) == false (line 108)

    $actual = $this->autoCompleter->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (function_exists('readline_callback_handler_remove')) == true (line 108)

    $actual = $this->autoCompleter->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
