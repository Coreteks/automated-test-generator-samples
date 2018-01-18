<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\ParserFactory;

class ParserFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\ParserFactory
*/
protected $parserFactory;

public function setUp()
{
    parent::setUp();

    $this->parserFactory = new \PhpParser\ParserFactory();
}

/**
 * @expectedException \LogicException
 */
public function testCreate0()
{
    $kind = m::mock('UntypedParameter_kind_');
    $lexer = m::mock(\PhpParser\Lexer::class);
    $parserOptions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $lexer) == false (line 22)
    // switch ($kind) (line 25)
    // Case self::PREFER_PHP7 == false (line 26)
    // Case self::PREFER_PHP5 == false (line 30)
    // Case self::ONLY_PHP7 == false (line 34)
    // Case self::ONLY_PHP5 == false (line 36)
    // Default (line 38)
    // throw new \LogicException('Kind must be one of ::PREFER_PHP7, ::PREFER_PHP5, ::ONLY_PHP7 or ::ONLY_PHP5') -> exception (line 39)

    $actual = $this->parserFactory->create($kind, $lexer, $parserOptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate1()
{
    $kind = m::mock('UntypedParameter_kind_');
    $lexer = m::mock(\PhpParser\Lexer::class);
    $parserOptions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $lexer) == false (line 22)
    // switch ($kind) (line 25)
    // Case self::PREFER_PHP7 == false (line 26)
    // Case self::PREFER_PHP5 == false (line 30)
    // Case self::ONLY_PHP7 == false (line 34)
    // Case self::ONLY_PHP5 == true (line 36)

    $actual = $this->parserFactory->create($kind, $lexer, $parserOptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate2()
{
    $kind = m::mock('UntypedParameter_kind_');
    $lexer = m::mock(\PhpParser\Lexer::class);
    $parserOptions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $lexer) == false (line 22)
    // switch ($kind) (line 25)
    // Case self::PREFER_PHP7 == false (line 26)
    // Case self::PREFER_PHP5 == false (line 30)
    // Case self::ONLY_PHP7 == true (line 34)

    $actual = $this->parserFactory->create($kind, $lexer, $parserOptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate3()
{
    $kind = m::mock('UntypedParameter_kind_');
    $lexer = m::mock(\PhpParser\Lexer::class);
    $parserOptions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $lexer) == false (line 22)
    // switch ($kind) (line 25)
    // Case self::PREFER_PHP7 == false (line 26)
    // Case self::PREFER_PHP5 == true (line 30)

    $actual = $this->parserFactory->create($kind, $lexer, $parserOptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate4()
{
    $kind = m::mock('UntypedParameter_kind_');
    $lexer = m::mock(\PhpParser\Lexer::class);
    $parserOptions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $lexer) == false (line 22)
    // switch ($kind) (line 25)
    // Case self::PREFER_PHP7 == true (line 26)

    $actual = $this->parserFactory->create($kind, $lexer, $parserOptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testCreate5()
{
    $kind = m::mock('UntypedParameter_kind_');
    $lexer = m::mock(\PhpParser\Lexer::class);
    $parserOptions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $lexer) == true (line 22)
    // switch ($kind) (line 25)
    // Case self::PREFER_PHP7 == false (line 26)
    // Case self::PREFER_PHP5 == false (line 30)
    // Case self::ONLY_PHP7 == false (line 34)
    // Case self::ONLY_PHP5 == false (line 36)
    // Default (line 38)
    // throw new \LogicException('Kind must be one of ::PREFER_PHP7, ::PREFER_PHP5, ::ONLY_PHP7 or ::ONLY_PHP5') -> exception (line 39)

    $actual = $this->parserFactory->create($kind, $lexer, $parserOptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate6()
{
    $kind = m::mock('UntypedParameter_kind_');
    $lexer = m::mock(\PhpParser\Lexer::class);
    $parserOptions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $lexer) == true (line 22)
    // switch ($kind) (line 25)
    // Case self::PREFER_PHP7 == false (line 26)
    // Case self::PREFER_PHP5 == false (line 30)
    // Case self::ONLY_PHP7 == false (line 34)
    // Case self::ONLY_PHP5 == true (line 36)

    $actual = $this->parserFactory->create($kind, $lexer, $parserOptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate7()
{
    $kind = m::mock('UntypedParameter_kind_');
    $lexer = m::mock(\PhpParser\Lexer::class);
    $parserOptions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $lexer) == true (line 22)
    // switch ($kind) (line 25)
    // Case self::PREFER_PHP7 == false (line 26)
    // Case self::PREFER_PHP5 == false (line 30)
    // Case self::ONLY_PHP7 == true (line 34)

    $actual = $this->parserFactory->create($kind, $lexer, $parserOptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate8()
{
    $kind = m::mock('UntypedParameter_kind_');
    $lexer = m::mock(\PhpParser\Lexer::class);
    $parserOptions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $lexer) == true (line 22)
    // switch ($kind) (line 25)
    // Case self::PREFER_PHP7 == false (line 26)
    // Case self::PREFER_PHP5 == true (line 30)

    $actual = $this->parserFactory->create($kind, $lexer, $parserOptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate9()
{
    $kind = m::mock('UntypedParameter_kind_');
    $lexer = m::mock(\PhpParser\Lexer::class);
    $parserOptions = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $lexer) == true (line 22)
    // switch ($kind) (line 25)
    // Case self::PREFER_PHP7 == true (line 26)

    $actual = $this->parserFactory->create($kind, $lexer, $parserOptions);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
