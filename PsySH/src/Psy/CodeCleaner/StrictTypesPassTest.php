<?php

namespace tests\Psy\CodeCleaner;

use Mockery as m;
use Psy\CodeCleaner\StrictTypesPass;

class StrictTypesPassTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\CodeCleaner\StrictTypesPass
*/
protected $strictTypesPass;

public function setUp()
{
    parent::setUp();

    $this->strictTypesPass = new \Psy\CodeCleaner\StrictTypesPass();
}

public function testBeforeTraverse0()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($prependStrictTypes) == false (line 68)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse1()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($prependStrictTypes) == true (line 68)
    // if (!$first instanceof \PhpParser\Node\Stmt\Declare_) == false (line 70)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse2()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($prependStrictTypes) == true (line 68)
    // if (!$first instanceof \PhpParser\Node\Stmt\Declare_) == true (line 70)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse3()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == false (line 54)
    // if ($prependStrictTypes) == false (line 68)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse4()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == false (line 54)
    // if ($prependStrictTypes) == true (line 68)
    // if (!$first instanceof \PhpParser\Node\Stmt\Declare_) == false (line 70)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse5()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == false (line 54)
    // if ($prependStrictTypes) == true (line 68)
    // if (!$first instanceof \PhpParser\Node\Stmt\Declare_) == true (line 70)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse6()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == true (line 54)
    // if ($prependStrictTypes) == false (line 68)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse7()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == true (line 54)
    // if ($prependStrictTypes) == true (line 68)
    // if (!$first instanceof \PhpParser\Node\Stmt\Declare_) == false (line 70)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse8()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == true (line 54)
    // if ($prependStrictTypes) == true (line 68)
    // if (!$first instanceof \PhpParser\Node\Stmt\Declare_) == true (line 70)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse9()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == true (line 54)
    // if ($declare->key === 'strict_types') == false (line 56)
    // if ($prependStrictTypes) == false (line 68)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse10()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == true (line 54)
    // if ($declare->key === 'strict_types') == false (line 56)
    // if ($prependStrictTypes) == true (line 68)
    // if (!$first instanceof \PhpParser\Node\Stmt\Declare_) == false (line 70)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse11()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == true (line 54)
    // if ($declare->key === 'strict_types') == false (line 56)
    // if ($prependStrictTypes) == true (line 68)
    // if (!$first instanceof \PhpParser\Node\Stmt\Declare_) == true (line 70)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse12()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == true (line 54)
    // if ($declare->key === 'strict_types') == true (line 56)
    // if (!$value instanceof \PhpParser\Node\Scalar\LNumber || $value->value !== 0 && $value->value !== 1) == false (line 58)
    // if ($prependStrictTypes) == false (line 68)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse13()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == true (line 54)
    // if ($declare->key === 'strict_types') == true (line 56)
    // if (!$value instanceof \PhpParser\Node\Scalar\LNumber || $value->value !== 0 && $value->value !== 1) == false (line 58)
    // if ($prependStrictTypes) == true (line 68)
    // if (!$first instanceof \PhpParser\Node\Stmt\Declare_) == false (line 70)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse14()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == true (line 54)
    // if ($declare->key === 'strict_types') == true (line 56)
    // if (!$value instanceof \PhpParser\Node\Scalar\LNumber || $value->value !== 0 && $value->value !== 1) == false (line 58)
    // if ($prependStrictTypes) == true (line 68)
    // if (!$first instanceof \PhpParser\Node\Stmt\Declare_) == true (line 70)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Psy\Exception\FatalErrorException
 */
public function testBeforeTraverse15()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Stmt\Declare_) == true (line 54)
    // if ($declare->key === 'strict_types') == true (line 56)
    // if (!$value instanceof \PhpParser\Node\Scalar\LNumber || $value->value !== 0 && $value->value !== 1) == true (line 58)
    // throw new \Psy\Exception\FatalErrorException(self::EXCEPTION_MESSAGE, 0, E_ERROR, null, $node->getLine()) -> exception (line 59)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeTraverse16()
{
    $nodes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (version_compare(PHP_VERSION, '7.0', '<')) == true (line 47)

    $actual = $this->strictTypesPass->beforeTraverse($nodes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
