<?php

namespace tests\Symfony\Bridge\Twig\TokenParser;

use Mockery as m;
use Symfony\Bridge\Twig\TokenParser\TransTokenParser;

class TransTokenParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\TokenParser\TransTokenParser
*/
protected $transTokenParser;

public function setUp()
{
    parent::setUp();

    $this->transTokenParser = new \Symfony\Bridge\Twig\TokenParser\TransTokenParser();
}

public function testParse0()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == false (line 45)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 71)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse1()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == false (line 45)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 71)
    // throw new \Twig\Error\SyntaxError('A message inside a trans tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 72)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == false (line 46)
    // if ($stream->test('from')) == false (line 52)
    // if ($stream->test('into')) == false (line 58)
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == false (line 62)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 71)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse3()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == false (line 46)
    // if ($stream->test('from')) == false (line 52)
    // if ($stream->test('into')) == false (line 58)
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == false (line 62)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 71)
    // throw new \Twig\Error\SyntaxError('A message inside a trans tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 72)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse4()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == false (line 46)
    // if ($stream->test('from')) == false (line 52)
    // if ($stream->test('into')) == false (line 58)
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 62)
    // throw new \Twig\Error\SyntaxError('Unexpected token. Twig was looking for the "with", "from", or "into" keyword.', $stream->getCurrent()->getLine(), $stream->getSourceContext()->getName()) -> exception (line 63)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse5()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == false (line 46)
    // if ($stream->test('from')) == false (line 52)
    // if ($stream->test('into')) == true (line 58)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 71)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse6()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == false (line 46)
    // if ($stream->test('from')) == false (line 52)
    // if ($stream->test('into')) == true (line 58)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 71)
    // throw new \Twig\Error\SyntaxError('A message inside a trans tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 72)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse7()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == false (line 46)
    // if ($stream->test('from')) == true (line 52)
    // if ($stream->test('into')) == false (line 58)
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == false (line 62)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 71)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse8()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == false (line 46)
    // if ($stream->test('from')) == true (line 52)
    // if ($stream->test('into')) == false (line 58)
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == false (line 62)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 71)
    // throw new \Twig\Error\SyntaxError('A message inside a trans tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 72)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse9()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == false (line 46)
    // if ($stream->test('from')) == true (line 52)
    // if ($stream->test('into')) == false (line 58)
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 62)
    // throw new \Twig\Error\SyntaxError('Unexpected token. Twig was looking for the "with", "from", or "into" keyword.', $stream->getCurrent()->getLine(), $stream->getSourceContext()->getName()) -> exception (line 63)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse10()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == false (line 46)
    // if ($stream->test('from')) == true (line 52)
    // if ($stream->test('into')) == true (line 58)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 71)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse11()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == false (line 46)
    // if ($stream->test('from')) == true (line 52)
    // if ($stream->test('into')) == true (line 58)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 71)
    // throw new \Twig\Error\SyntaxError('A message inside a trans tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 72)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse12()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == true (line 46)
    // if ($stream->test('from')) == false (line 52)
    // if ($stream->test('into')) == false (line 58)
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == false (line 62)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 71)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse13()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == true (line 46)
    // if ($stream->test('from')) == false (line 52)
    // if ($stream->test('into')) == false (line 58)
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == false (line 62)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 71)
    // throw new \Twig\Error\SyntaxError('A message inside a trans tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 72)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse14()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == true (line 46)
    // if ($stream->test('from')) == false (line 52)
    // if ($stream->test('into')) == false (line 58)
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 62)
    // throw new \Twig\Error\SyntaxError('Unexpected token. Twig was looking for the "with", "from", or "into" keyword.', $stream->getCurrent()->getLine(), $stream->getSourceContext()->getName()) -> exception (line 63)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse15()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == true (line 46)
    // if ($stream->test('from')) == false (line 52)
    // if ($stream->test('into')) == true (line 58)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 71)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse16()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == true (line 46)
    // if ($stream->test('from')) == false (line 52)
    // if ($stream->test('into')) == true (line 58)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 71)
    // throw new \Twig\Error\SyntaxError('A message inside a trans tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 72)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse17()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == true (line 46)
    // if ($stream->test('from')) == true (line 52)
    // if ($stream->test('into')) == false (line 58)
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == false (line 62)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 71)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse18()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == true (line 46)
    // if ($stream->test('from')) == true (line 52)
    // if ($stream->test('into')) == false (line 58)
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == false (line 62)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 71)
    // throw new \Twig\Error\SyntaxError('A message inside a trans tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 72)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse19()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == true (line 46)
    // if ($stream->test('from')) == true (line 52)
    // if ($stream->test('into')) == false (line 58)
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 62)
    // throw new \Twig\Error\SyntaxError('Unexpected token. Twig was looking for the "with", "from", or "into" keyword.', $stream->getCurrent()->getLine(), $stream->getSourceContext()->getName()) -> exception (line 63)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse20()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == true (line 46)
    // if ($stream->test('from')) == true (line 52)
    // if ($stream->test('into')) == true (line 58)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 71)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse21()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$stream->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 45)
    // if ($stream->test('with')) == true (line 46)
    // if ($stream->test('from')) == true (line 52)
    // if ($stream->test('into')) == true (line 58)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 71)
    // throw new \Twig\Error\SyntaxError('A message inside a trans tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 72)

    $actual = $this->transTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecideTransFork0()
{
    $token = m::mock('UntypedParameter_token_');

    // TODO: Your mock expectations here

    $actual = $this->transTokenParser->decideTransFork($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTag0()
{
    // TODO: Your mock expectations here

    $actual = $this->transTokenParser->getTag();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
