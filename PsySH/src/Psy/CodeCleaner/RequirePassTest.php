<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\RequirePass;

class RequirePassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\RequirePass
*/
protected $requirePass;

public function setUp()
{
    parent::setUp();

    $this->requirePass = new \Psy\CodeCleaner\RequirePass();
}

public function testEnterNode0()
{
    $origNode = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isRequireNode($origNode)) == false (line 36)

    $actual = $this->requirePass->enterNode($origNode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnterNode1()
{
    $origNode = m::mock(\PhpParser\Node::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->isRequireNode($origNode)) == true (line 36)

    $actual = $this->requirePass->enterNode($origNode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve0()
{
    $file = m::mock('UntypedParameter_file_');
    $lineNumber = m::mock('UntypedParameter_lineNumber_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file === '') == false (line 78)
    // if ($file === '' || !stream_resolve_include_path($file)) == false (line 90)

    $actual = $this->requirePass->resolve($file, $lineNumber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testResolve1()
{
    $file = m::mock('UntypedParameter_file_');
    $lineNumber = m::mock('UntypedParameter_lineNumber_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file === '') == false (line 78)
    // if ($file === '' || !stream_resolve_include_path($file)) == true (line 90)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $lineNumber) -> exception (line 92)

    $actual = $this->requirePass->resolve($file, $lineNumber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve2()
{
    $file = m::mock('UntypedParameter_file_');
    $lineNumber = m::mock('UntypedParameter_lineNumber_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file === '') == true (line 78)
    // if (E_WARNING & error_reporting()) == false (line 82)
    // if ($file === '' || !stream_resolve_include_path($file)) == false (line 90)

    $actual = $this->requirePass->resolve($file, $lineNumber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testResolve3()
{
    $file = m::mock('UntypedParameter_file_');
    $lineNumber = m::mock('UntypedParameter_lineNumber_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file === '') == true (line 78)
    // if (E_WARNING & error_reporting()) == false (line 82)
    // if ($file === '' || !stream_resolve_include_path($file)) == true (line 90)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $lineNumber) -> exception (line 92)

    $actual = $this->requirePass->resolve($file, $lineNumber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve4()
{
    $file = m::mock('UntypedParameter_file_');
    $lineNumber = m::mock('UntypedParameter_lineNumber_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file === '') == true (line 78)
    // if (E_WARNING & error_reporting()) == true (line 82)
    // if ($file === '' || !stream_resolve_include_path($file)) == false (line 90)

    $actual = $this->requirePass->resolve($file, $lineNumber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testResolve5()
{
    $file = m::mock('UntypedParameter_file_');
    $lineNumber = m::mock('UntypedParameter_lineNumber_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($file === '') == true (line 78)
    // if (E_WARNING & error_reporting()) == true (line 82)
    // if ($file === '' || !stream_resolve_include_path($file)) == true (line 90)
    // throw new \Psy\Exception\FatalErrorException($msg, 0, E_ERROR, null, $lineNumber) -> exception (line 92)

    $actual = $this->requirePass->resolve($file, $lineNumber);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
