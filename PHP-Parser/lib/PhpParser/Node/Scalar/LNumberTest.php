<?php

namespace tests\PhpParser\Node\Scalar;

use Mockery as m;
use PhpParser\Node\Scalar\LNumber;

class LNumberTest extends \PHPUnit_Framework_TestCase
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
* @var \PhpParser\Node\Scalar\LNumber
*/
protected $lNumber;

public function setUp()
{
    parent::setUp();

    $this->_value = null;
    $this->_attributes = [];
    $this->lNumber = new \PhpParser\Node\Scalar\LNumber($this->_value, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->lNumber->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromString0()
{
    $str = m::mock('UntypedParameter_str_');
    $attributes = [];
    $allowInvalidOctal = m::mock('UntypedParameter_allowInvalidOctal_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('0' !== $str[0] || '0' === $str) == false (line 44)
    // if ('x' === $str[1] || 'X' === $str[1]) == false (line 49)
    // if ('b' === $str[1] || 'B' === $str[1]) == false (line 54)
    // if (!$allowInvalidOctal && strpbrk($str, '89')) == false (line 59)

    $actual = $this->lNumber->fromString($str, $attributes, $allowInvalidOctal);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PhpParser\Error
 */
public function testFromString1()
{
    $str = m::mock('UntypedParameter_str_');
    $attributes = [];
    $allowInvalidOctal = m::mock('UntypedParameter_allowInvalidOctal_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('0' !== $str[0] || '0' === $str) == false (line 44)
    // if ('x' === $str[1] || 'X' === $str[1]) == false (line 49)
    // if ('b' === $str[1] || 'B' === $str[1]) == false (line 54)
    // if (!$allowInvalidOctal && strpbrk($str, '89')) == true (line 59)
    // throw new \PhpParser\Error('Invalid numeric literal', $attributes) -> exception (line 60)

    $actual = $this->lNumber->fromString($str, $attributes, $allowInvalidOctal);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromString2()
{
    $str = m::mock('UntypedParameter_str_');
    $attributes = [];
    $allowInvalidOctal = m::mock('UntypedParameter_allowInvalidOctal_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('0' !== $str[0] || '0' === $str) == false (line 44)
    // if ('x' === $str[1] || 'X' === $str[1]) == false (line 49)
    // if ('b' === $str[1] || 'B' === $str[1]) == true (line 54)

    $actual = $this->lNumber->fromString($str, $attributes, $allowInvalidOctal);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromString3()
{
    $str = m::mock('UntypedParameter_str_');
    $attributes = [];
    $allowInvalidOctal = m::mock('UntypedParameter_allowInvalidOctal_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('0' !== $str[0] || '0' === $str) == false (line 44)
    // if ('x' === $str[1] || 'X' === $str[1]) == true (line 49)

    $actual = $this->lNumber->fromString($str, $attributes, $allowInvalidOctal);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFromString4()
{
    $str = m::mock('UntypedParameter_str_');
    $attributes = [];
    $allowInvalidOctal = m::mock('UntypedParameter_allowInvalidOctal_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('0' !== $str[0] || '0' === $str) == true (line 44)

    $actual = $this->lNumber->fromString($str, $attributes, $allowInvalidOctal);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->lNumber->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
