<?php

namespace tests\Illuminate\View\Compilers;

use Illuminate\View\Compilers\BladeCompiler;
use Mockery as m;

class BladeCompilerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\View\Compilers\BladeCompiler
*/
protected $bladeCompiler;

public function setUp()
{
    parent::setUp();

    $this->bladeCompiler = new \Illuminate\View\Compilers\BladeCompiler();
}

public function testCompile0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path) == false (line 114)
    // if (!is_null($this->cachePath)) == false (line 118)

    $actual = $this->bladeCompiler->compile($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile1()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path) == false (line 114)
    // if (!is_null($this->cachePath)) == true (line 118)

    $actual = $this->bladeCompiler->compile($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile2()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path) == true (line 114)
    // if (!is_null($this->cachePath)) == false (line 118)

    $actual = $this->bladeCompiler->compile($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile3()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($path) == true (line 114)
    // if (!is_null($this->cachePath)) == true (line 118)

    $actual = $this->bladeCompiler->compile($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPath0()
{
    // TODO: Your mock expectations here

    $actual = $this->bladeCompiler->getPath();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->bladeCompiler->setPath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString2()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString3()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString4()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString5()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString6()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString7()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString8()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString9()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString10()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString11()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString12()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString13()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString14()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString15()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == false (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString16()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString17()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString18()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString19()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString20()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString21()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString22()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString23()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == false (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString24()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString25()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString26()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString27()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString28()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString29()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == false (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString30()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == false (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompileString31()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($value, '@verbatim') !== false) == true (line 154)
    // if (strpos($value, '@php') !== false) == true (line 160)
    // if (!empty($this->rawBlocks)) == true (line 173)
    // if (count($this->footer) > 0) == true (line 180)

    $actual = $this->bladeCompiler->compileString($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStripParentheses0()
{
    $expression = m::mock('UntypedParameter_expression_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::startsWith($expression, '(')) == false (line 358)

    $actual = $this->bladeCompiler->stripParentheses($expression);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStripParentheses1()
{
    $expression = m::mock('UntypedParameter_expression_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\Illuminate\Support\Str::startsWith($expression, '(')) == true (line 358)

    $actual = $this->bladeCompiler->stripParentheses($expression);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExtend0()
{
    $compiler = m::mock('UntypedParameter_compiler_');

    // TODO: Your mock expectations here

    $actual = $this->bladeCompiler->extend($compiler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetExtensions0()
{
    // TODO: Your mock expectations here

    $actual = $this->bladeCompiler->getExtensions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIf0()
{
    $name = m::mock('UntypedParameter_name_');
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->bladeCompiler->if($name, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck0()
{
    $name = m::mock('UntypedParameter_name_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->bladeCompiler->check($name, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDirective0()
{
    $name = m::mock('UntypedParameter_name_');
    $handler = m::mock('UntypedParameter_handler_');

    // TODO: Your mock expectations here

    $actual = $this->bladeCompiler->directive($name, $handler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetCustomDirectives0()
{
    // TODO: Your mock expectations here

    $actual = $this->bladeCompiler->getCustomDirectives();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetEchoFormat0()
{
    $format = m::mock('UntypedParameter_format_');

    // TODO: Your mock expectations here

    $actual = $this->bladeCompiler->setEchoFormat($format);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDoubleEncode0()
{
    // TODO: Your mock expectations here

    $actual = $this->bladeCompiler->doubleEncode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
