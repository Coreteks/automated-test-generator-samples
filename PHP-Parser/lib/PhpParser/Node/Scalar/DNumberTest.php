<?php

namespace tests\PhpParser\Node\Scalar;

use Mockery as m;
use PhpParser\Node\Scalar\DNumber;

class DNumberTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_value = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Scalar\DNumber
*/
protected $dNumber;

public function setUp()
{
    parent::setUp();

    $this->_value = null;
    $this->_attributes = [];
    $this->dNumber = new \PhpParser\Node\Scalar\DNumber($this->_value, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->dNumber->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpbrk($str, '.eE')) == false (line 38)
    // if ('0' === $str[0]) == false (line 44)

    $actual = $this->dNumber->parse($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpbrk($str, '.eE')) == false (line 38)
    // if ('0' === $str[0]) == true (line 44)
    // if ('x' === $str[1] || 'X' === $str[1]) == false (line 46)
    // if ('b' === $str[1] || 'B' === $str[1]) == false (line 51)

    $actual = $this->dNumber->parse($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpbrk($str, '.eE')) == false (line 38)
    // if ('0' === $str[0]) == true (line 44)
    // if ('x' === $str[1] || 'X' === $str[1]) == false (line 46)
    // if ('b' === $str[1] || 'B' === $str[1]) == true (line 51)

    $actual = $this->dNumber->parse($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse3()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpbrk($str, '.eE')) == false (line 38)
    // if ('0' === $str[0]) == true (line 44)
    // if ('x' === $str[1] || 'X' === $str[1]) == true (line 46)

    $actual = $this->dNumber->parse($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse4()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (false !== strpbrk($str, '.eE')) == true (line 38)

    $actual = $this->dNumber->parse($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->dNumber->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
