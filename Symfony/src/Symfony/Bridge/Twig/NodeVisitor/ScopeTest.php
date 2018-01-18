<?php

namespace tests\Symfony\Bridge\Twig\NodeVisitor;

use Mockery as m;
use Symfony\Bridge\Twig\NodeVisitor\Scope;
use Symfony\Bridge\Twig\NodeVisitor\Scope;

class ScopeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_parent;
/**
* @var \Symfony\Bridge\Twig\NodeVisitor\Scope
*/
protected $scope;

public function setUp()
{
    parent::setUp();

    $this->_parent = m::mock(\Symfony\Bridge\Twig\NodeVisitor\Scope::class);
    $this->scope = new \Symfony\Bridge\Twig\NodeVisitor\Scope($this->_parent);
}

public function testEnter0()
{
    // TODO: Your mock expectations here

    $actual = $this->scope->enter();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLeave0()
{
    // TODO: Your mock expectations here

    $actual = $this->scope->leave();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->left) == false (line 62)

    $actual = $this->scope->set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testSet1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->left) == true (line 62)
    // throw new \LogicException('Left scope is not mutable.') -> exception (line 63)

    $actual = $this->scope->set($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->data)) == false (line 80)
    // if (null === $this->parent) == false (line 84)

    $actual = $this->scope->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->data)) == false (line 80)
    // if (null === $this->parent) == true (line 84)

    $actual = $this->scope->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->data)) == true (line 80)

    $actual = $this->scope->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->data)) == false (line 101)
    // if (null === $this->parent) == false (line 105)

    $actual = $this->scope->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->data)) == false (line 101)
    // if (null === $this->parent) == true (line 105)

    $actual = $this->scope->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet2()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (array_key_exists($key, $this->data)) == true (line 101)

    $actual = $this->scope->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
