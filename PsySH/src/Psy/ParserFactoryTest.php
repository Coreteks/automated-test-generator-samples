<?php

namespace tests\Psy;

use Mockery as m;
use Psy\ParserFactory;

class ParserFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\ParserFactory
*/
protected $parserFactory;

public function setUp()
{
    parent::setUp();

    $this->parserFactory = new \Psy\ParserFactory();
}

public function testGetPossibleKinds0()
{
    // TODO: Your mock expectations here

    $actual = $this->parserFactory->getPossibleKinds();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasKindsSupport0()
{
    // TODO: Your mock expectations here

    $actual = $this->parserFactory->hasKindsSupport();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultKind0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasKindsSupport()) == false (line 57)

    $actual = $this->parserFactory->getDefaultKind();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultKind1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasKindsSupport()) == true (line 57)

    $actual = $this->parserFactory->getDefaultKind();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateParser0()
{
    $kind = m::mock('UntypedParameter_kind_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasKindsSupport()) == false (line 71)
    // if ($kind !== null) == false (line 82)

    $actual = $this->parserFactory->createParser($kind);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testCreateParser1()
{
    $kind = m::mock('UntypedParameter_kind_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasKindsSupport()) == false (line 71)
    // if ($kind !== null) == true (line 82)
    // throw new \InvalidArgumentException('Install PHP Parser v2.x to specify parser kind') -> exception (line 83)

    $actual = $this->parserFactory->createParser($kind);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateParser2()
{
    $kind = m::mock('UntypedParameter_kind_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasKindsSupport()) == true (line 71)
    // if (!in_array($kind, static::getPossibleKinds())) == false (line 76)

    $actual = $this->parserFactory->createParser($kind);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testCreateParser3()
{
    $kind = m::mock('UntypedParameter_kind_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hasKindsSupport()) == true (line 71)
    // if (!in_array($kind, static::getPossibleKinds())) == true (line 76)
    // throw new \InvalidArgumentException('Unknown parser kind') -> exception (line 77)

    $actual = $this->parserFactory->createParser($kind);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
