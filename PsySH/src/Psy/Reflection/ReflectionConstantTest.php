<?php

namespace tests\Psy\Reflection;

use Mockery as m;
use Psy\Reflection\ReflectionConstant;

class ReflectionConstantTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_class = null;
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Psy\Reflection\ReflectionConstant
*/
protected $reflectionConstant;

public function setUp()
{
    parent::setUp();

    $this->_class = null;
    $this->_name = null;
    $this->reflectionConstant = new \Psy\Reflection\ReflectionConstant($this->_class, $this->_name);
}

public function testGetDeclaringClass0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // PhpParser\Node\Stmt\Do_ == false (line 62)

    $actual = $this->reflectionConstant->getDeclaringClass();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionConstant->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetValue0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionConstant->getValue();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFileName0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionConstant->getFileName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetStartLine0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \RuntimeException('Not yet implemented because it\'s unclear what I should do here :)') -> exception (line 109)

    $actual = $this->reflectionConstant->getStartLine();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEndLine0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionConstant->getEndLine();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDocComment0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionConstant->getDocComment();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testExport0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \RuntimeException('Not yet implemented because it\'s unclear what I should do here :)') -> exception (line 139)

    $actual = $this->reflectionConstant->export();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionConstant->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
