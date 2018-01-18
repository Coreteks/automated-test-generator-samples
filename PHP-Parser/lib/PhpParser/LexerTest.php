<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\Lexer;

class LexerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_options = [];
/**
* @var \PhpParser\Lexer
*/
protected $lexer;

public function setUp()
{
    parent::setUp();

    $this->_options = [];
    $this->lexer = new \PhpParser\Lexer($this->_options);
}

public function testStartLexing0()
{
    $code = m::mock('UntypedParameter_code_');
    $errorHandler = m::mock(\PhpParser\ErrorHandler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $errorHandler) == false (line 59)
    // if (false !== $scream) == false (line 78)

    $actual = $this->lexer->startLexing($code, $errorHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartLexing1()
{
    $code = m::mock('UntypedParameter_code_');
    $errorHandler = m::mock(\PhpParser\ErrorHandler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $errorHandler) == false (line 59)
    // if (false !== $scream) == true (line 78)

    $actual = $this->lexer->startLexing($code, $errorHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartLexing2()
{
    $code = m::mock('UntypedParameter_code_');
    $errorHandler = m::mock(\PhpParser\ErrorHandler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $errorHandler) == true (line 59)
    // if (false !== $scream) == false (line 78)

    $actual = $this->lexer->startLexing($code, $errorHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartLexing3()
{
    $code = m::mock('UntypedParameter_code_');
    $errorHandler = m::mock(\PhpParser\ErrorHandler::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $errorHandler) == true (line 59)
    // if (false !== $scream) == true (line 78)

    $actual = $this->lexer->startLexing($code, $errorHandler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken0()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken1()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken2()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken3()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken4()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken5()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken6()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken7()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken8()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken9()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken10()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken11()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken12()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken13()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken14()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken15()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken16()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken17()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken18()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken19()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken20()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken21()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken22()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken23()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken24()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken25()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken26()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken27()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken28()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken29()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken30()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken31()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken32()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken33()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken34()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken35()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken36()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken37()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken38()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken39()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken40()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken41()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken42()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken43()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken44()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken45()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken46()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken47()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken48()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken49()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken50()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken51()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken52()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken53()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken54()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken55()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken56()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken57()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken58()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken59()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken60()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken61()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken62()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken63()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken64()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken65()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken66()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken67()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken68()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken69()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken70()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken71()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken72()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken73()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken74()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken75()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken76()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken77()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken78()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken79()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken80()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken81()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken82()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken83()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken84()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken85()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken86()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken87()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken88()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken89()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken90()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken91()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken92()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken93()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken94()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken95()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken96()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken97()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken98()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken99()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken100()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken101()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken102()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken103()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken104()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken105()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken106()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken107()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken108()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken109()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken110()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken111()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken112()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken113()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken114()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken115()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken116()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken117()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken118()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken119()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken120()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken121()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken122()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken123()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken124()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken125()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken126()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken127()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken128()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken129()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken130()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken131()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken132()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken133()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken134()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken135()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken136()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken137()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken138()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken139()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken140()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken141()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken142()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken143()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken144()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken145()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken146()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken147()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken148()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken149()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken150()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken151()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken152()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken153()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken154()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken155()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken156()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken157()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken158()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken159()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken160()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken161()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken162()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken163()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken164()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken165()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken166()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken167()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken168()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken169()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken170()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken171()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken172()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken173()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken174()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken175()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken176()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken177()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken178()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken179()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken180()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken181()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken182()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken183()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken184()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken185()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken186()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken187()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken188()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken189()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken190()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken191()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken192()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken193()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken194()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken195()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken196()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken197()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken198()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken199()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken200()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken201()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken202()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken203()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken204()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken205()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken206()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken207()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken208()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken209()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken210()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken211()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken212()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken213()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken214()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken215()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken216()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken217()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken218()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken219()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken220()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken221()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken222()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken223()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken224()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken225()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken226()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken227()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken228()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken229()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken230()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken231()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken232()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken233()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken234()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken235()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken236()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken237()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken238()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken239()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken240()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken241()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken242()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken243()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken244()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken245()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken246()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken247()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken248()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken249()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken250()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken251()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken252()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken253()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken254()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken255()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken256()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken257()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken258()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken259()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken260()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken261()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken262()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken263()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken264()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken265()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken266()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken267()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken268()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken269()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken270()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken271()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken272()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken273()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken274()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken275()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken276()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken277()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken278()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken279()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken280()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken281()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken282()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken283()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken284()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken285()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken286()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken287()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken288()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken289()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken290()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken291()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken292()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken293()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken294()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken295()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken296()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken297()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken298()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken299()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken300()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken301()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken302()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken303()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken304()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken305()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken306()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken307()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken308()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken309()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken310()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken311()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken312()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken313()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken314()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken315()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken316()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken317()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken318()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken319()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken320()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken321()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken322()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken323()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken324()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken325()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken326()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken327()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken328()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken329()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken330()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken331()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken332()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken333()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken334()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken335()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken336()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken337()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken338()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken339()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken340()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken341()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken342()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken343()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken344()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == false (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken345()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken346()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken347()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken348()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken349()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken350()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken351()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken352()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken353()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken354()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken355()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken356()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken357()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken358()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken359()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken360()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken361()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken362()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken363()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken364()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken365()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken366()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken367()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken368()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken369()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken370()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken371()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken372()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken373()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken374()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken375()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken376()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken377()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken378()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken379()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken380()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken381()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken382()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken383()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken384()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken385()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken386()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken387()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken388()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken389()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken390()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken391()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken392()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken393()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken394()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken395()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken396()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken397()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken398()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken399()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken400()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken401()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken402()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken403()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken404()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken405()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken406()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken407()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken408()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken409()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken410()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken411()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken412()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken413()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken414()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken415()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken416()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken417()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken418()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken419()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken420()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken421()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken422()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken423()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken424()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken425()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken426()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken427()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken428()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken429()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken430()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken431()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken432()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken433()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken434()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken435()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken436()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken437()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken438()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken439()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken440()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken441()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken442()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken443()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken444()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken445()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken446()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken447()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken448()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken449()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken450()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken451()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken452()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken453()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken454()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken455()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken456()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken457()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken458()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken459()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken460()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken461()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken462()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken463()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken464()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken465()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken466()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken467()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken468()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken469()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken470()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken471()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken472()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken473()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken474()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken475()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken476()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken477()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken478()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken479()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken480()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken481()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken482()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken483()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken484()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken485()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken486()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken487()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken488()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken489()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken490()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken491()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken492()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken493()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken494()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken495()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken496()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken497()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken498()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken499()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken500()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken501()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken502()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken503()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken504()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken505()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken506()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken507()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken508()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken509()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken510()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken511()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken512()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken513()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken514()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken515()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken516()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == false (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken517()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken518()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken519()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken520()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken521()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken522()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken523()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken524()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken525()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken526()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken527()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken528()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken529()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken530()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken531()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken532()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken533()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken534()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken535()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken536()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken537()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken538()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken539()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken540()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken541()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken542()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken543()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken544()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken545()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken546()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken547()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken548()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken549()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken550()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken551()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken552()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken553()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken554()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken555()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken556()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken557()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken558()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken559()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken560()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken561()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken562()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken563()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken564()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken565()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken566()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken567()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken568()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken569()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken570()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken571()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken572()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken573()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken574()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken575()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken576()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken577()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken578()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken579()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken580()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken581()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken582()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken583()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken584()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken585()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken586()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken587()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken588()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken589()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken590()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken591()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken592()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken593()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken594()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken595()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken596()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken597()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken598()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken599()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken600()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken601()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken602()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == false (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken603()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken604()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken605()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken606()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken607()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken608()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken609()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken610()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken611()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken612()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken613()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken614()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken615()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken616()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken617()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken618()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken619()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken620()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken621()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken622()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken623()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken624()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken625()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken626()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken627()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken628()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken629()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken630()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken631()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken632()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken633()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken634()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken635()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken636()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken637()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken638()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken639()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken640()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken641()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken642()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken643()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken644()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken645()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == false (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken646()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == false (line 265)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken647()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == false (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetNextToken648()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == false (line 253)
    // if (\T_COMMENT === $token[0] || \T_DOC_COMMENT === $token[0]) == true (line 265)
    // if (isset($this->usedAttributes['comments'])) == true (line 266)
    // while (1) == false (line 225)
    // throw new \RuntimeException('Reached end of lexer loop') -> exception (line 292)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken649()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken650()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken651()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken652()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken653()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken654()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken655()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken656()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == false (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken657()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken658()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken659()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken660()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken661()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken662()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken663()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken664()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == false (line 256)
    // if (\T_INLINE_HTML === $token[0]) == true (line 258)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken665()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken666()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken667()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken668()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken669()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken670()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken671()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken672()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == false (line 243)
    // if (!isset($this->dropTokens[$token[0]])) == true (line 253)
    // if (\T_CLOSE_TAG === $token[0]) == true (line 256)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken673()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken674()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken675()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken676()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken677()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken678()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken679()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken680()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == false (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken681()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken682()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken683()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken684()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == false (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken685()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken686()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == false (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken687()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == false (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetNextToken688()
{
    $value = m::mock('UntypedParameter_value_');
    $startAttributes = m::mock('UntypedParameter_startAttributes_');
    $endAttributes = m::mock('UntypedParameter_endAttributes_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (1) == true (line 225)
    // if (isset($this->tokens[++$this->pos])) == true (line 226)
    // if (isset($this->usedAttributes['startLine'])) == true (line 233)
    // if (isset($this->usedAttributes['startTokenPos'])) == true (line 236)
    // if (isset($this->usedAttributes['startFilePos'])) == true (line 239)
    // if (\is_string($token)) == true (line 243)
    // if (isset($token[1])) == true (line 245)
    // if (isset($this->usedAttributes['endLine'])) == true (line 279)
    // if (isset($this->usedAttributes['endTokenPos'])) == true (line 282)
    // if (isset($this->usedAttributes['endFilePos'])) == true (line 285)

    $actual = $this->lexer->getNextToken($value, $startAttributes, $endAttributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokens0()
{
    // TODO: Your mock expectations here

    $actual = $this->lexer->getTokens();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandleHaltCompiler0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('~^\\s*\\(\\s*\\)\\s*(?:;|\\?>\\r?\\n?)~', $textAfter, $matches)) == false (line 321)

    $actual = $this->lexer->handleHaltCompiler();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \PhpParser\Error
 */
public function testHandleHaltCompiler1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!preg_match('~^\\s*\\(\\s*\\)\\s*(?:;|\\?>\\r?\\n?)~', $textAfter, $matches)) == true (line 321)
    // throw new \PhpParser\Error('__HALT_COMPILER must be followed by "();"') -> exception (line 322)

    $actual = $this->lexer->handleHaltCompiler();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
