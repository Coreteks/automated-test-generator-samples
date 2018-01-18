<?php

namespace tests\Psy;

use Mockery as m;
use Psy\Compiler;

class CompilerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Compiler
*/
protected $compiler;

public function setUp()
{
    parent::setUp();

    $this->compiler = new \Psy\Compiler();
}

public function testCompile0()
{
    $pharFile = m::mock('UntypedParameter_pharFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($pharFile)) == false (line 28)

    $actual = $this->compiler->compile($pharFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile1()
{
    $pharFile = m::mock('UntypedParameter_pharFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($pharFile)) == false (line 28)

    $actual = $this->compiler->compile($pharFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile2()
{
    $pharFile = m::mock('UntypedParameter_pharFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($pharFile)) == false (line 28)

    $actual = $this->compiler->compile($pharFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile3()
{
    $pharFile = m::mock('UntypedParameter_pharFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($pharFile)) == false (line 28)

    $actual = $this->compiler->compile($pharFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile4()
{
    $pharFile = m::mock('UntypedParameter_pharFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($pharFile)) == true (line 28)

    $actual = $this->compiler->compile($pharFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile5()
{
    $pharFile = m::mock('UntypedParameter_pharFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($pharFile)) == true (line 28)

    $actual = $this->compiler->compile($pharFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile6()
{
    $pharFile = m::mock('UntypedParameter_pharFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($pharFile)) == true (line 28)

    $actual = $this->compiler->compile($pharFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompile7()
{
    $pharFile = m::mock('UntypedParameter_pharFile_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (file_exists($pharFile)) == true (line 28)

    $actual = $this->compiler->compile($pharFile);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
