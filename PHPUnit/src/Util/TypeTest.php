<?php

namespace tests\PHPUnit\Util;

use Mockery as m;
use PHPUnit\Util\Type;

class TypeTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PHPUnit\Util\Type
*/
protected $type;

public function setUp()
{
    parent::setUp();

    $this->type = new \PHPUnit\Util\Type();
}

public function testIsType0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == false (line 18)
    // Case 'integer' == false (line 19)
    // Case 'int' == false (line 20)
    // Case 'float' == false (line 21)
    // Case 'string' == false (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'bool' == false (line 24)
    // Case 'null' == false (line 25)
    // Case 'array' == false (line 26)
    // Case 'object' == false (line 27)
    // Case 'resource' == false (line 28)
    // Case 'scalar' == false (line 29)
    // Default (line 32)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsType1()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == false (line 18)
    // Case 'integer' == false (line 19)
    // Case 'int' == false (line 20)
    // Case 'float' == false (line 21)
    // Case 'string' == false (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'bool' == false (line 24)
    // Case 'null' == false (line 25)
    // Case 'array' == false (line 26)
    // Case 'object' == false (line 27)
    // Case 'resource' == false (line 28)
    // Case 'scalar' == true (line 29)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsType2()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == false (line 18)
    // Case 'integer' == false (line 19)
    // Case 'int' == false (line 20)
    // Case 'float' == false (line 21)
    // Case 'string' == false (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'bool' == false (line 24)
    // Case 'null' == false (line 25)
    // Case 'array' == false (line 26)
    // Case 'object' == false (line 27)
    // Case 'resource' == true (line 28)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsType3()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == false (line 18)
    // Case 'integer' == false (line 19)
    // Case 'int' == false (line 20)
    // Case 'float' == false (line 21)
    // Case 'string' == false (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'bool' == false (line 24)
    // Case 'null' == false (line 25)
    // Case 'array' == false (line 26)
    // Case 'object' == true (line 27)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsType4()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == false (line 18)
    // Case 'integer' == false (line 19)
    // Case 'int' == false (line 20)
    // Case 'float' == false (line 21)
    // Case 'string' == false (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'bool' == false (line 24)
    // Case 'null' == false (line 25)
    // Case 'array' == true (line 26)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsType5()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == false (line 18)
    // Case 'integer' == false (line 19)
    // Case 'int' == false (line 20)
    // Case 'float' == false (line 21)
    // Case 'string' == false (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'bool' == false (line 24)
    // Case 'null' == true (line 25)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsType6()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == false (line 18)
    // Case 'integer' == false (line 19)
    // Case 'int' == false (line 20)
    // Case 'float' == false (line 21)
    // Case 'string' == false (line 22)
    // Case 'boolean' == false (line 23)
    // Case 'bool' == true (line 24)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsType7()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == false (line 18)
    // Case 'integer' == false (line 19)
    // Case 'int' == false (line 20)
    // Case 'float' == false (line 21)
    // Case 'string' == false (line 22)
    // Case 'boolean' == true (line 23)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsType8()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == false (line 18)
    // Case 'integer' == false (line 19)
    // Case 'int' == false (line 20)
    // Case 'float' == false (line 21)
    // Case 'string' == true (line 22)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsType9()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == false (line 18)
    // Case 'integer' == false (line 19)
    // Case 'int' == false (line 20)
    // Case 'float' == true (line 21)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsType10()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == false (line 18)
    // Case 'integer' == false (line 19)
    // Case 'int' == true (line 20)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsType11()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == false (line 18)
    // Case 'integer' == true (line 19)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsType12()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($type) (line 17)
    // Case 'numeric' == true (line 18)

    $actual = $this->type->isType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
