<?php

namespace tests\PhpParser\Node;

use Mockery as m;
use PhpParser\Node\Name;

class NameTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var array
*/
protected $_attributes = [];
/**
* @var \PhpParser\Node\Name
*/
protected $name;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_attributes = [];
    $this->name = new \PhpParser\Node\Name($this->_name, $this->_attributes);
}

public function testGetSubNodeNames0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->getSubNodeNames();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFirst0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->getFirst();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLast0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->getLast();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsUnqualified0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->isUnqualified();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsQualified0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->isQualified();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsFullyQualified0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->isFullyQualified();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsRelative0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->isRelative();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToString0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToCodeString0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->toCodeString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToLowerString0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->toLowerString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsSpecialClassName0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->isSpecialClassName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlice0()
{
    $offset = m::mock('UntypedParameter_offset_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($realOffset < 0 || $realOffset > $numParts) == false (line 159)
    // if (null === $length) == false (line 163)
    // if ($realLength < 0 || $realLength > $numParts) == false (line 167)
    // if ($realLength === 0) == false (line 172)

    $actual = $this->name->slice($offset, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlice1()
{
    $offset = m::mock('UntypedParameter_offset_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($realOffset < 0 || $realOffset > $numParts) == false (line 159)
    // if (null === $length) == false (line 163)
    // if ($realLength < 0 || $realLength > $numParts) == false (line 167)
    // if ($realLength === 0) == true (line 172)

    $actual = $this->name->slice($offset, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \OutOfBoundsException
 */
public function testSlice2()
{
    $offset = m::mock('UntypedParameter_offset_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($realOffset < 0 || $realOffset > $numParts) == false (line 159)
    // if (null === $length) == false (line 163)
    // if ($realLength < 0 || $realLength > $numParts) == true (line 167)
    // throw new \OutOfBoundsException(sprintf('Length %d is out of bounds', $length)) -> exception (line 168)

    $actual = $this->name->slice($offset, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlice3()
{
    $offset = m::mock('UntypedParameter_offset_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($realOffset < 0 || $realOffset > $numParts) == false (line 159)
    // if (null === $length) == true (line 163)
    // if ($realLength === 0) == false (line 172)

    $actual = $this->name->slice($offset, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlice4()
{
    $offset = m::mock('UntypedParameter_offset_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($realOffset < 0 || $realOffset > $numParts) == false (line 159)
    // if (null === $length) == true (line 163)
    // if ($realLength === 0) == true (line 172)

    $actual = $this->name->slice($offset, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \OutOfBoundsException
 */
public function testSlice5()
{
    $offset = m::mock('UntypedParameter_offset_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($realOffset < 0 || $realOffset > $numParts) == true (line 159)
    // throw new \OutOfBoundsException(sprintf('Offset %d is out of bounds', $offset)) -> exception (line 160)

    $actual = $this->name->slice($offset, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConcat0()
{
    $name1 = m::mock('UntypedParameter_name1_');
    $name2 = m::mock('UntypedParameter_name2_');
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $name1 && null === $name2) == false (line 198)
    // if (null === $name1) == false (line 200)
    // if (null === $name2) == false (line 202)

    $actual = $this->name->concat($name1, $name2, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConcat1()
{
    $name1 = m::mock('UntypedParameter_name1_');
    $name2 = m::mock('UntypedParameter_name2_');
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $name1 && null === $name2) == false (line 198)
    // if (null === $name1) == false (line 200)
    // if (null === $name2) == true (line 202)

    $actual = $this->name->concat($name1, $name2, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConcat2()
{
    $name1 = m::mock('UntypedParameter_name1_');
    $name2 = m::mock('UntypedParameter_name2_');
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $name1 && null === $name2) == false (line 198)
    // if (null === $name1) == true (line 200)

    $actual = $this->name->concat($name1, $name2, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConcat3()
{
    $name1 = m::mock('UntypedParameter_name1_');
    $name2 = m::mock('UntypedParameter_name2_');
    $attributes = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $name1 && null === $name2) == true (line 198)

    $actual = $this->name->concat($name1, $name2, $attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetType0()
{
    // TODO: Your mock expectations here

    $actual = $this->name->getType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
