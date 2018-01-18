<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\BuilderHelpers;

class BuilderHelpersTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\BuilderHelpers
*/
protected $builderHelpers;

public function setUp()
{
    parent::setUp();

    $this->builderHelpers = new \PhpParser\BuilderHelpers();
}

/**
 * @expectedException \LogicException
 */
public function testNormalizeNode0()
{
    $node = m::mock('UntypedParameter_node_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Builder) == false (line 27)
    // if ($node instanceof \PhpParser\Node) == false (line 29)
    // throw new \LogicException('Expected node or builder object') -> exception (line 33)

    $actual = $this->builderHelpers->normalizeNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeNode1()
{
    $node = m::mock('UntypedParameter_node_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Builder) == false (line 27)
    // if ($node instanceof \PhpParser\Node) == true (line 29)

    $actual = $this->builderHelpers->normalizeNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeNode2()
{
    $node = m::mock('UntypedParameter_node_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Builder) == true (line 27)

    $actual = $this->builderHelpers->normalizeNode($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testNormalizeStmt0()
{
    $node = m::mock('UntypedParameter_node_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Expr) == false (line 51)
    // throw new \LogicException('Expected statement or expression node') -> exception (line 55)

    $actual = $this->builderHelpers->normalizeStmt($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeStmt1()
{
    $node = m::mock('UntypedParameter_node_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt) == false (line 47)
    // if ($node instanceof \PhpParser\Node\Expr) == true (line 51)

    $actual = $this->builderHelpers->normalizeStmt($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeStmt2()
{
    $node = m::mock('UntypedParameter_node_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node instanceof \PhpParser\Node\Stmt) == true (line 47)

    $actual = $this->builderHelpers->normalizeStmt($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testNormalizeName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \PhpParser\Node\Name) == false (line 66)
    // if (is_string($name)) == false (line 68)
    // throw new \LogicException('Name must be a string or an instance of PhpParser\\Node\\Name') -> exception (line 82)

    $actual = $this->builderHelpers->normalizeName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeName1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \PhpParser\Node\Name) == false (line 66)
    // if (is_string($name)) == true (line 68)
    // if (!$name) == false (line 69)
    // if ($name[0] === '\\') == false (line 73)
    // if (0 === strpos($name, 'namespace\\')) == false (line 75)

    $actual = $this->builderHelpers->normalizeName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeName2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \PhpParser\Node\Name) == false (line 66)
    // if (is_string($name)) == true (line 68)
    // if (!$name) == false (line 69)
    // if ($name[0] === '\\') == false (line 73)
    // if (0 === strpos($name, 'namespace\\')) == true (line 75)

    $actual = $this->builderHelpers->normalizeName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeName3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \PhpParser\Node\Name) == false (line 66)
    // if (is_string($name)) == true (line 68)
    // if (!$name) == false (line 69)
    // if ($name[0] === '\\') == true (line 73)

    $actual = $this->builderHelpers->normalizeName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testNormalizeName4()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \PhpParser\Node\Name) == false (line 66)
    // if (is_string($name)) == true (line 68)
    // if (!$name) == true (line 69)
    // throw new \LogicException('Name cannot be empty') -> exception (line 70)

    $actual = $this->builderHelpers->normalizeName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeName5()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($name instanceof \PhpParser\Node\Name) == true (line 66)

    $actual = $this->builderHelpers->normalizeName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeType0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_string($type)) == false (line 96)
    // if (strlen($type) > 0 && $type[0] === '?') == false (line 106)
    // if (in_array($lowerType, $builtinTypes)) == false (line 116)
    // if ($nullable && (string) $type === 'void') == false (line 122)

    $actual = $this->builderHelpers->normalizeType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testNormalizeType1()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_string($type)) == false (line 96)
    // if (strlen($type) > 0 && $type[0] === '?') == false (line 106)
    // if (in_array($lowerType, $builtinTypes)) == false (line 116)
    // if ($nullable && (string) $type === 'void') == true (line 122)
    // throw new \LogicException('void type cannot be nullable') -> exception (line 123)

    $actual = $this->builderHelpers->normalizeType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeType2()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_string($type)) == false (line 96)
    // if (strlen($type) > 0 && $type[0] === '?') == false (line 106)
    // if (in_array($lowerType, $builtinTypes)) == true (line 116)
    // if ($nullable && (string) $type === 'void') == false (line 122)

    $actual = $this->builderHelpers->normalizeType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testNormalizeType3()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_string($type)) == false (line 96)
    // if (strlen($type) > 0 && $type[0] === '?') == false (line 106)
    // if (in_array($lowerType, $builtinTypes)) == true (line 116)
    // if ($nullable && (string) $type === 'void') == true (line 122)
    // throw new \LogicException('void type cannot be nullable') -> exception (line 123)

    $actual = $this->builderHelpers->normalizeType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeType4()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_string($type)) == false (line 96)
    // if (strlen($type) > 0 && $type[0] === '?') == true (line 106)
    // if (in_array($lowerType, $builtinTypes)) == false (line 116)
    // if ($nullable && (string) $type === 'void') == false (line 122)

    $actual = $this->builderHelpers->normalizeType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testNormalizeType5()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_string($type)) == false (line 96)
    // if (strlen($type) > 0 && $type[0] === '?') == true (line 106)
    // if (in_array($lowerType, $builtinTypes)) == false (line 116)
    // if ($nullable && (string) $type === 'void') == true (line 122)
    // throw new \LogicException('void type cannot be nullable') -> exception (line 123)

    $actual = $this->builderHelpers->normalizeType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeType6()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_string($type)) == false (line 96)
    // if (strlen($type) > 0 && $type[0] === '?') == true (line 106)
    // if (in_array($lowerType, $builtinTypes)) == true (line 116)
    // if ($nullable && (string) $type === 'void') == false (line 122)

    $actual = $this->builderHelpers->normalizeType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testNormalizeType7()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_string($type)) == false (line 96)
    // if (strlen($type) > 0 && $type[0] === '?') == true (line 106)
    // if (in_array($lowerType, $builtinTypes)) == true (line 116)
    // if ($nullable && (string) $type === 'void') == true (line 122)
    // throw new \LogicException('void type cannot be nullable') -> exception (line 123)

    $actual = $this->builderHelpers->normalizeType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeType8()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_string($type)) == true (line 96)
    // if (!$type instanceof \PhpParser\Node\Name && !$type instanceof \PhpParser\Node\Identifier && !$type instanceof \PhpParser\Node\NullableType) == false (line 97)

    $actual = $this->builderHelpers->normalizeType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testNormalizeType9()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_string($type)) == true (line 96)
    // if (!$type instanceof \PhpParser\Node\Name && !$type instanceof \PhpParser\Node\Identifier && !$type instanceof \PhpParser\Node\NullableType) == true (line 97)
    // throw new \LogicException('Type must be a string, or an instance of Name, Identifier or NullableType') -> exception (line 99)

    $actual = $this->builderHelpers->normalizeType($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testNormalizeValue0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \PhpParser\Node\Expr) == false (line 138)
    // if (is_null($value)) == false (line 140)
    // if (is_bool($value)) == false (line 144)
    // if (is_int($value)) == false (line 148)
    // if (is_float($value)) == false (line 150)
    // if (is_string($value)) == false (line 152)
    // if (is_array($value)) == false (line 154)
    // throw new \LogicException('Invalid value') -> exception (line 174)

    $actual = $this->builderHelpers->normalizeValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeValue1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \PhpParser\Node\Expr) == false (line 138)
    // if (is_null($value)) == false (line 140)
    // if (is_bool($value)) == false (line 144)
    // if (is_int($value)) == false (line 148)
    // if (is_float($value)) == false (line 150)
    // if (is_string($value)) == false (line 152)
    // if (is_array($value)) == true (line 154)

    $actual = $this->builderHelpers->normalizeValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeValue2()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \PhpParser\Node\Expr) == false (line 138)
    // if (is_null($value)) == false (line 140)
    // if (is_bool($value)) == false (line 144)
    // if (is_int($value)) == false (line 148)
    // if (is_float($value)) == false (line 150)
    // if (is_string($value)) == false (line 152)
    // if (is_array($value)) == true (line 154)
    // if (null !== $lastKey && ++$lastKey === $itemKey) == false (line 159)

    $actual = $this->builderHelpers->normalizeValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeValue3()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \PhpParser\Node\Expr) == false (line 138)
    // if (is_null($value)) == false (line 140)
    // if (is_bool($value)) == false (line 144)
    // if (is_int($value)) == false (line 148)
    // if (is_float($value)) == false (line 150)
    // if (is_string($value)) == false (line 152)
    // if (is_array($value)) == true (line 154)
    // if (null !== $lastKey && ++$lastKey === $itemKey) == true (line 159)

    $actual = $this->builderHelpers->normalizeValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeValue4()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \PhpParser\Node\Expr) == false (line 138)
    // if (is_null($value)) == false (line 140)
    // if (is_bool($value)) == false (line 144)
    // if (is_int($value)) == false (line 148)
    // if (is_float($value)) == false (line 150)
    // if (is_string($value)) == true (line 152)

    $actual = $this->builderHelpers->normalizeValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeValue5()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \PhpParser\Node\Expr) == false (line 138)
    // if (is_null($value)) == false (line 140)
    // if (is_bool($value)) == false (line 144)
    // if (is_int($value)) == false (line 148)
    // if (is_float($value)) == true (line 150)

    $actual = $this->builderHelpers->normalizeValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeValue6()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \PhpParser\Node\Expr) == false (line 138)
    // if (is_null($value)) == false (line 140)
    // if (is_bool($value)) == false (line 144)
    // if (is_int($value)) == true (line 148)

    $actual = $this->builderHelpers->normalizeValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeValue7()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \PhpParser\Node\Expr) == false (line 138)
    // if (is_null($value)) == false (line 140)
    // if (is_bool($value)) == true (line 144)

    $actual = $this->builderHelpers->normalizeValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeValue8()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \PhpParser\Node\Expr) == false (line 138)
    // if (is_null($value)) == true (line 140)

    $actual = $this->builderHelpers->normalizeValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeValue9()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value instanceof \PhpParser\Node\Expr) == true (line 138)

    $actual = $this->builderHelpers->normalizeValue($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testNormalizeDocComment0()
{
    $docComment = m::mock('UntypedParameter_docComment_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($docComment instanceof \PhpParser\Comment\Doc) == false (line 186)
    // if (is_string($docComment)) == false (line 188)
    // throw new \LogicException('Doc comment must be a string or an instance of PhpParser\\Comment\\Doc') -> exception (line 191)

    $actual = $this->builderHelpers->normalizeDocComment($docComment);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeDocComment1()
{
    $docComment = m::mock('UntypedParameter_docComment_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($docComment instanceof \PhpParser\Comment\Doc) == false (line 186)
    // if (is_string($docComment)) == true (line 188)

    $actual = $this->builderHelpers->normalizeDocComment($docComment);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNormalizeDocComment2()
{
    $docComment = m::mock('UntypedParameter_docComment_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($docComment instanceof \PhpParser\Comment\Doc) == true (line 186)

    $actual = $this->builderHelpers->normalizeDocComment($docComment);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddModifier0()
{
    $modifiers = m::mock('UntypedParameter_modifiers_');
    $modifier = m::mock('UntypedParameter_modifier_');

    // TODO: Your mock expectations here

    $actual = $this->builderHelpers->addModifier($modifiers, $modifier);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
