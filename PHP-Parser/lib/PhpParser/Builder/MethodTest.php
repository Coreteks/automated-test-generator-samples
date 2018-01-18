<?php

namespace tests\PhpParser\Builder;

use Mockery as m;
use PhpParser\Builder\Method;

class MethodTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \PhpParser\Builder\Method
*/
protected $method;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->method = new \PhpParser\Builder\Method($this->_name);
}

public function testMakePublic0()
{
    // TODO: Your mock expectations here

    $actual = $this->method->makePublic();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeProtected0()
{
    // TODO: Your mock expectations here

    $actual = $this->method->makeProtected();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakePrivate0()
{
    // TODO: Your mock expectations here

    $actual = $this->method->makePrivate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeStatic0()
{
    // TODO: Your mock expectations here

    $actual = $this->method->makeStatic();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeAbstract0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->stmts)) == false (line 77)

    $actual = $this->method->makeAbstract();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testMakeAbstract1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->stmts)) == true (line 77)
    // throw new \LogicException('Cannot make method with statements abstract') -> exception (line 78)

    $actual = $this->method->makeAbstract();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeFinal0()
{
    // TODO: Your mock expectations here

    $actual = $this->method->makeFinal();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddStmt0()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->stmts) == false (line 106)

    $actual = $this->method->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testAddStmt1()
{
    $stmt = m::mock('UntypedParameter_stmt_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $this->stmts) == true (line 106)
    // throw new \LogicException('Cannot add statements to an abstract method') -> exception (line 107)

    $actual = $this->method->addStmt($stmt);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->method->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
