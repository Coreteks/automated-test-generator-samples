<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\BuilderFactory;

class BuilderFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\BuilderFactory
*/
protected $builderFactory;

public function setUp()
{
    parent::setUp();

    $this->builderFactory = new \PhpParser\BuilderFactory();
}

public function testNamespace0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->builderFactory->namespace($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClass0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->builderFactory->class($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterface0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->builderFactory->interface($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTrait0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->builderFactory->trait($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMethod0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->builderFactory->method($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParam0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->builderFactory->param($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testProperty0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->builderFactory->property($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFunction0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->builderFactory->function($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUse0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->builderFactory->use($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVal0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->builderFactory->val($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArgs0()
{
    $args = [];

    // TODO: Your mock expectations here

    $actual = $this->builderFactory->args($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArgs1()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($arg instanceof \PhpParser\Node\Arg) == false (line 135)

    $actual = $this->builderFactory->args($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testArgs2()
{
    $args = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($arg instanceof \PhpParser\Node\Arg) == true (line 135)

    $actual = $this->builderFactory->args($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConcat0()
{
    $exprs = m::mock('UntypedParameter_exprs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($numExprs < 2) == false (line 153)
    // for (...) == false (line 158)

    $actual = $this->builderFactory->concat($exprs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConcat1()
{
    $exprs = m::mock('UntypedParameter_exprs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($numExprs < 2) == false (line 153)
    // for (...) == true (line 158)
    // for (...) == false (line 158)

    $actual = $this->builderFactory->concat($exprs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testConcat2()
{
    $exprs = m::mock('UntypedParameter_exprs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($numExprs < 2) == true (line 153)
    // throw new \LogicException('Expected at least two expressions') -> exception (line 154)

    $actual = $this->builderFactory->concat($exprs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
