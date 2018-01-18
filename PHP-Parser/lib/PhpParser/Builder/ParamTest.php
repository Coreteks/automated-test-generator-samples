<?php

namespace tests\PhpParser\Builder;

use Mockery as m;
use PhpParser\Builder\Param;

class ParamTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \PhpParser\Builder\Param
*/
protected $param;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->param = new \PhpParser\Builder\Param($this->_name);
}

public function testSetDefault0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->param->setDefault($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTypeHint0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->type == 'void') == false (line 53)

    $actual = $this->param->setTypeHint($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testSetTypeHint1()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->type == 'void') == true (line 53)
    // throw new \LogicException('Parameter type cannot be void') -> exception (line 54)

    $actual = $this->param->setTypeHint($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeByRef0()
{
    // TODO: Your mock expectations here

    $actual = $this->param->makeByRef();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMakeVariadic0()
{
    // TODO: Your mock expectations here

    $actual = $this->param->makeVariadic();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNode0()
{
    // TODO: Your mock expectations here

    $actual = $this->param->getNode();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
