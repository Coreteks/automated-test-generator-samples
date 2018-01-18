<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\TokenStream;

class TokenStreamTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_tokens = [];
/**
* @var \PhpParser\TokenStream
*/
protected $tokenStream;

public function setUp()
{
    parent::setUp();

    $this->_tokens = [];
    $this->tokenStream = new \PhpParser\TokenStream($this->_tokens);
}

public function testHaveParens0()
{
    $startPos = m::mock('UntypedParameter_startPos_');
    $endPos = m::mock('UntypedParameter_endPos_');

    // TODO: Your mock expectations here

    $actual = $this->tokenStream->haveParens($startPos, $endPos);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaveBraces0()
{
    $startPos = m::mock('UntypedParameter_startPos_');
    $endPos = m::mock('UntypedParameter_endPos_');

    // TODO: Your mock expectations here

    $actual = $this->tokenStream->haveBraces($startPos, $endPos);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaveTokenImmediativelyBefore0()
{
    $pos = m::mock('UntypedParameter_pos_');
    $expectedTokenType = m::mock('UntypedParameter_expectedTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 66)

    $actual = $this->tokenStream->haveTokenImmediativelyBefore($pos, $expectedTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaveTokenImmediativelyBefore1()
{
    $pos = m::mock('UntypedParameter_pos_');
    $expectedTokenType = m::mock('UntypedParameter_expectedTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 66)
    // if ($tokenType === $expectedTokenType) == false (line 68)
    // if ($tokenType !== \T_WHITESPACE && $tokenType !== \T_COMMENT && $tokenType !== \T_DOC_COMMENT) == false (line 71)
    // for (...) == false (line 66)

    $actual = $this->tokenStream->haveTokenImmediativelyBefore($pos, $expectedTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaveTokenImmediativelyBefore2()
{
    $pos = m::mock('UntypedParameter_pos_');
    $expectedTokenType = m::mock('UntypedParameter_expectedTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 66)
    // if ($tokenType === $expectedTokenType) == false (line 68)
    // if ($tokenType !== \T_WHITESPACE && $tokenType !== \T_COMMENT && $tokenType !== \T_DOC_COMMENT) == true (line 71)

    $actual = $this->tokenStream->haveTokenImmediativelyBefore($pos, $expectedTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaveTokenImmediativelyBefore3()
{
    $pos = m::mock('UntypedParameter_pos_');
    $expectedTokenType = m::mock('UntypedParameter_expectedTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 66)
    // if ($tokenType === $expectedTokenType) == true (line 68)

    $actual = $this->tokenStream->haveTokenImmediativelyBefore($pos, $expectedTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaveTokenImmediatelyAfter0()
{
    $pos = m::mock('UntypedParameter_pos_');
    $expectedTokenType = m::mock('UntypedParameter_expectedTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 92)

    $actual = $this->tokenStream->haveTokenImmediatelyAfter($pos, $expectedTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaveTokenImmediatelyAfter1()
{
    $pos = m::mock('UntypedParameter_pos_');
    $expectedTokenType = m::mock('UntypedParameter_expectedTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 92)
    // if ($tokenType === $expectedTokenType) == false (line 94)
    // if ($tokenType !== \T_WHITESPACE && $tokenType !== \T_COMMENT && $tokenType !== \T_DOC_COMMENT) == false (line 97)
    // for (...) == false (line 92)

    $actual = $this->tokenStream->haveTokenImmediatelyAfter($pos, $expectedTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaveTokenImmediatelyAfter2()
{
    $pos = m::mock('UntypedParameter_pos_');
    $expectedTokenType = m::mock('UntypedParameter_expectedTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 92)
    // if ($tokenType === $expectedTokenType) == false (line 94)
    // if ($tokenType !== \T_WHITESPACE && $tokenType !== \T_COMMENT && $tokenType !== \T_DOC_COMMENT) == true (line 97)

    $actual = $this->tokenStream->haveTokenImmediatelyAfter($pos, $expectedTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHaveTokenImmediatelyAfter3()
{
    $pos = m::mock('UntypedParameter_pos_');
    $expectedTokenType = m::mock('UntypedParameter_expectedTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 92)
    // if ($tokenType === $expectedTokenType) == true (line 94)

    $actual = $this->tokenStream->haveTokenImmediatelyAfter($pos, $expectedTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkipLeft0()
{
    $pos = m::mock('UntypedParameter_pos_');
    $skipTokenType = m::mock('UntypedParameter_skipTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($skipTokenType === \T_WHITESPACE) == false (line 109)
    // if ($tokens[$pos][0] !== $skipTokenType) == false (line 113)

    $actual = $this->tokenStream->skipLeft($pos, $skipTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSkipLeft1()
{
    $pos = m::mock('UntypedParameter_pos_');
    $skipTokenType = m::mock('UntypedParameter_skipTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($skipTokenType === \T_WHITESPACE) == false (line 109)
    // if ($tokens[$pos][0] !== $skipTokenType) == true (line 113)
    // throw new \Exception('Encountered unexpected token') -> exception (line 115)

    $actual = $this->tokenStream->skipLeft($pos, $skipTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkipLeft2()
{
    $pos = m::mock('UntypedParameter_pos_');
    $skipTokenType = m::mock('UntypedParameter_skipTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($skipTokenType === \T_WHITESPACE) == true (line 109)

    $actual = $this->tokenStream->skipLeft($pos, $skipTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkipRight0()
{
    $pos = m::mock('UntypedParameter_pos_');
    $skipTokenType = m::mock('UntypedParameter_skipTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($skipTokenType === \T_WHITESPACE) == false (line 126)
    // if ($tokens[$pos][0] !== $skipTokenType) == false (line 130)

    $actual = $this->tokenStream->skipRight($pos, $skipTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testSkipRight1()
{
    $pos = m::mock('UntypedParameter_pos_');
    $skipTokenType = m::mock('UntypedParameter_skipTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($skipTokenType === \T_WHITESPACE) == false (line 126)
    // if ($tokens[$pos][0] !== $skipTokenType) == true (line 130)
    // throw new \Exception('Encountered unexpected token') -> exception (line 132)

    $actual = $this->tokenStream->skipRight($pos, $skipTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkipRight2()
{
    $pos = m::mock('UntypedParameter_pos_');
    $skipTokenType = m::mock('UntypedParameter_skipTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($skipTokenType === \T_WHITESPACE) == true (line 126)

    $actual = $this->tokenStream->skipRight($pos, $skipTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkipLeftWhitespace0()
{
    $pos = m::mock('UntypedParameter_pos_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 147)

    $actual = $this->tokenStream->skipLeftWhitespace($pos);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkipLeftWhitespace1()
{
    $pos = m::mock('UntypedParameter_pos_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 147)
    // if ($type !== \T_WHITESPACE && $type !== \T_COMMENT && $type !== \T_DOC_COMMENT) == false (line 149)
    // for (...) == false (line 147)

    $actual = $this->tokenStream->skipLeftWhitespace($pos);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkipLeftWhitespace2()
{
    $pos = m::mock('UntypedParameter_pos_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 147)
    // if ($type !== \T_WHITESPACE && $type !== \T_COMMENT && $type !== \T_DOC_COMMENT) == true (line 149)

    $actual = $this->tokenStream->skipLeftWhitespace($pos);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkipRightWhitespace0()
{
    $pos = m::mock('UntypedParameter_pos_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 164)

    $actual = $this->tokenStream->skipRightWhitespace($pos);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkipRightWhitespace1()
{
    $pos = m::mock('UntypedParameter_pos_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 164)
    // if ($type !== \T_WHITESPACE && $type !== \T_COMMENT && $type !== \T_DOC_COMMENT) == false (line 166)
    // for (...) == false (line 164)

    $actual = $this->tokenStream->skipRightWhitespace($pos);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSkipRightWhitespace2()
{
    $pos = m::mock('UntypedParameter_pos_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 164)
    // if ($type !== \T_WHITESPACE && $type !== \T_COMMENT && $type !== \T_DOC_COMMENT) == true (line 166)

    $actual = $this->tokenStream->skipRightWhitespace($pos);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindRight0()
{
    $pos = m::mock('UntypedParameter_pos_');
    $findTokenType = m::mock('UntypedParameter_findTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 175)

    $actual = $this->tokenStream->findRight($pos, $findTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindRight1()
{
    $pos = m::mock('UntypedParameter_pos_');
    $findTokenType = m::mock('UntypedParameter_findTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 175)
    // if ($type === $findTokenType) == false (line 177)
    // for (...) == false (line 175)

    $actual = $this->tokenStream->findRight($pos, $findTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFindRight2()
{
    $pos = m::mock('UntypedParameter_pos_');
    $findTokenType = m::mock('UntypedParameter_findTokenType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 175)
    // if ($type === $findTokenType) == true (line 177)

    $actual = $this->tokenStream->findRight($pos, $findTokenType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIndentationBefore0()
{
    $pos = m::mock('UntypedParameter_pos_');

    // TODO: Your mock expectations here

    $actual = $this->tokenStream->getIndentationBefore($pos);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenCode0()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');
    $indent = m::mock('UntypedParameter_indent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 207)

    $actual = $this->tokenStream->getTokenCode($from, $to, $indent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenCode1()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');
    $indent = m::mock('UntypedParameter_indent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 207)
    // if (\is_array($token)) == false (line 209)
    // for (...) == false (line 207)

    $actual = $this->tokenStream->getTokenCode($from, $to, $indent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenCode2()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');
    $indent = m::mock('UntypedParameter_indent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 207)
    // if (\is_array($token)) == true (line 209)
    // if ($type === \T_CONSTANT_ENCAPSED_STRING || $type === \T_ENCAPSED_AND_WHITESPACE) == false (line 212)
    // if ($indent < 0) == false (line 216)
    // if ($indent > 0) == false (line 218)
    // for (...) == false (line 207)

    $actual = $this->tokenStream->getTokenCode($from, $to, $indent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenCode3()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');
    $indent = m::mock('UntypedParameter_indent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 207)
    // if (\is_array($token)) == true (line 209)
    // if ($type === \T_CONSTANT_ENCAPSED_STRING || $type === \T_ENCAPSED_AND_WHITESPACE) == false (line 212)
    // if ($indent < 0) == false (line 216)
    // if ($indent > 0) == true (line 218)
    // for (...) == false (line 207)

    $actual = $this->tokenStream->getTokenCode($from, $to, $indent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenCode4()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');
    $indent = m::mock('UntypedParameter_indent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 207)
    // if (\is_array($token)) == true (line 209)
    // if ($type === \T_CONSTANT_ENCAPSED_STRING || $type === \T_ENCAPSED_AND_WHITESPACE) == false (line 212)
    // if ($indent < 0) == true (line 216)
    // for (...) == false (line 207)

    $actual = $this->tokenStream->getTokenCode($from, $to, $indent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTokenCode5()
{
    $from = m::mock('UntypedParameter_from_');
    $to = m::mock('UntypedParameter_to_');
    $indent = m::mock('UntypedParameter_indent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 207)
    // if (\is_array($token)) == true (line 209)
    // if ($type === \T_CONSTANT_ENCAPSED_STRING || $type === \T_ENCAPSED_AND_WHITESPACE) == true (line 212)
    // for (...) == false (line 207)

    $actual = $this->tokenStream->getTokenCode($from, $to, $indent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
