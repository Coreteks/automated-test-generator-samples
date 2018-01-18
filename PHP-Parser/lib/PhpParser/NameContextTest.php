<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\ErrorHandler;
use PhpParser\NameContext;

class NameContextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_errorHandler;
/**
* @var \PhpParser\NameContext
*/
protected $nameContext;

public function setUp()
{
    parent::setUp();

    $this->_errorHandler = m::mock(\PhpParser\ErrorHandler::class);
    $this->nameContext = new \PhpParser\NameContext($this->_errorHandler);
}

public function testStartNamespace0()
{
    $namespace = m::mock(\PhpParser\Node\Name::class);

    // TODO: Your mock expectations here

    $actual = $this->nameContext->startNamespace($namespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddAlias0()
{
    $name = m::mock(\PhpParser\Node\Name::class);
    $aliasName = m::mock('UntypedParameter_aliasName_');
    $type = m::mock('UntypedParameter_type_');
    $errorAttrs = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 58)
    // if (isset($this->aliases[$type][$aliasLookupName])) == false (line 64)

    $actual = $this->nameContext->addAlias($name, $aliasName, $type, $errorAttrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddAlias1()
{
    $name = m::mock(\PhpParser\Node\Name::class);
    $aliasName = m::mock('UntypedParameter_aliasName_');
    $type = m::mock('UntypedParameter_type_');
    $errorAttrs = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 58)
    // if (isset($this->aliases[$type][$aliasLookupName])) == true (line 64)

    $actual = $this->nameContext->addAlias($name, $aliasName, $type, $errorAttrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddAlias2()
{
    $name = m::mock(\PhpParser\Node\Name::class);
    $aliasName = m::mock('UntypedParameter_aliasName_');
    $type = m::mock('UntypedParameter_type_');
    $errorAttrs = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 58)
    // if (isset($this->aliases[$type][$aliasLookupName])) == false (line 64)

    $actual = $this->nameContext->addAlias($name, $aliasName, $type, $errorAttrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddAlias3()
{
    $name = m::mock(\PhpParser\Node\Name::class);
    $aliasName = m::mock('UntypedParameter_aliasName_');
    $type = m::mock('UntypedParameter_type_');
    $errorAttrs = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 58)
    // if (isset($this->aliases[$type][$aliasLookupName])) == true (line 64)

    $actual = $this->nameContext->addAlias($name, $aliasName, $type, $errorAttrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNamespace0()
{
    // TODO: Your mock expectations here

    $actual = $this->nameContext->getNamespace();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResolvedName0()
{
    $name = m::mock(\PhpParser\Node\Name::class);
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL && $name->isSpecialClassName()) == false (line 104)
    // if ($name->isFullyQualified()) == false (line 115)
    // if (null !== ($resolvedName = $this->resolveAlias($name, $type))) == false (line 120)
    // if ($type !== \PhpParser\Node\Stmt\Use_::TYPE_NORMAL && $name->isUnqualified()) == false (line 124)

    $actual = $this->nameContext->getResolvedName($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResolvedName1()
{
    $name = m::mock(\PhpParser\Node\Name::class);
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL && $name->isSpecialClassName()) == false (line 104)
    // if ($name->isFullyQualified()) == false (line 115)
    // if (null !== ($resolvedName = $this->resolveAlias($name, $type))) == false (line 120)
    // if ($type !== \PhpParser\Node\Stmt\Use_::TYPE_NORMAL && $name->isUnqualified()) == true (line 124)
    // if (null === $this->namespace) == false (line 125)

    $actual = $this->nameContext->getResolvedName($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResolvedName2()
{
    $name = m::mock(\PhpParser\Node\Name::class);
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL && $name->isSpecialClassName()) == false (line 104)
    // if ($name->isFullyQualified()) == false (line 115)
    // if (null !== ($resolvedName = $this->resolveAlias($name, $type))) == false (line 120)
    // if ($type !== \PhpParser\Node\Stmt\Use_::TYPE_NORMAL && $name->isUnqualified()) == true (line 124)
    // if (null === $this->namespace) == true (line 125)

    $actual = $this->nameContext->getResolvedName($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResolvedName3()
{
    $name = m::mock(\PhpParser\Node\Name::class);
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL && $name->isSpecialClassName()) == false (line 104)
    // if ($name->isFullyQualified()) == false (line 115)
    // if (null !== ($resolvedName = $this->resolveAlias($name, $type))) == true (line 120)

    $actual = $this->nameContext->getResolvedName($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResolvedName4()
{
    $name = m::mock(\PhpParser\Node\Name::class);
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL && $name->isSpecialClassName()) == false (line 104)
    // if ($name->isFullyQualified()) == true (line 115)

    $actual = $this->nameContext->getResolvedName($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResolvedName5()
{
    $name = m::mock(\PhpParser\Node\Name::class);
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL && $name->isSpecialClassName()) == true (line 104)
    // if (!$name->isUnqualified()) == false (line 105)

    $actual = $this->nameContext->getResolvedName($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResolvedName6()
{
    $name = m::mock(\PhpParser\Node\Name::class);
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL && $name->isSpecialClassName()) == true (line 104)
    // if (!$name->isUnqualified()) == true (line 105)

    $actual = $this->nameContext->getResolvedName($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetResolvedClassName0()
{
    $name = m::mock(\PhpParser\Node\Name::class);

    // TODO: Your mock expectations here

    $actual = $this->nameContext->getResolvedClassName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames0()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames1()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames2()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames3()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames4()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames5()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames6()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames7()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames8()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames9()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames10()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames11()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames12()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames13()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames14()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames15()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames16()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames17()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames18()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames19()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames20()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames21()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames22()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames23()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames24()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames25()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames26()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames27()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames28()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames29()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames30()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames31()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames32()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames33()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames34()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames35()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames36()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames37()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames38()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames39()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames40()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames41()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames42()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames43()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames44()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == false (line 160)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames45()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames46()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames47()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames48()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames49()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames50()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames51()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames52()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames53()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames54()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames55()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames56()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames57()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames58()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames59()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == false (line 170)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames60()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames61()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames62()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames63()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames64()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames65()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames66()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames67()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames68()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames69()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames70()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames71()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames72()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames73()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames74()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == false (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames75()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames76()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames77()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames78()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames79()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames80()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames81()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames82()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames83()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames84()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == false (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames85()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames86()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == false (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames87()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == false (line 188)
    // if ($orig->toLowerString() === $lcName) == true (line 196)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames88()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == false (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames89()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == false (line 162)
    // if (null !== ($nsRelativeName = $this->getNamespaceRelativeName($name, $lcName, $type))) == true (line 170)
    // if (null === $this->resolveAlias($nsRelativeName, $type)) == true (line 173)
    // if (0 === strpos($lcName, $lcOrig . '\\')) == true (line 181)
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_CONSTANT) == true (line 188)
    // if ($normalizedOrig === $this->normalizeConstName($name)) == true (line 191)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetPossibleNames90()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type === \PhpParser\Node\Stmt\Use_::TYPE_NORMAL) == true (line 160)
    // if ($lcName === "self" || $lcName === "parent" || $lcName === "static") == true (line 162)

    $actual = $this->nameContext->getPossibleNames($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortName0()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    $actual = $this->nameContext->getShortName($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortName1()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length < $shortestLength) == false (line 221)

    $actual = $this->nameContext->getShortName($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetShortName2()
{
    $name = m::mock('UntypedParameter_name_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($length < $shortestLength) == true (line 221)

    $actual = $this->nameContext->getShortName($name, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
