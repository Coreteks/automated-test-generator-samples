<?php

namespace tests\Symfony\Bridge\Twig\TokenParser;

use Mockery as m;
use Symfony\Bridge\Twig\TokenParser\TransChoiceTokenParser;

class TransChoiceTokenParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\TokenParser\TransChoiceTokenParser
*/
protected $transChoiceTokenParser;

public function setUp()
{
    parent::setUp();

    $this->transChoiceTokenParser = new \Symfony\Bridge\Twig\TokenParser\TransChoiceTokenParser();
}

public function testParse0()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stream->test('with')) == false (line 48)
    // if ($stream->test('from')) == false (line 54)
    // if ($stream->test('into')) == false (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 70)

    $actual = $this->transChoiceTokenParser->parse($token);
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
    // if ($stream->test('with')) == false (line 48)
    // if ($stream->test('from')) == false (line 54)
    // if ($stream->test('into')) == false (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 70)
    // throw new \Twig\Error\SyntaxError('A message inside a transchoice tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 71)

    $actual = $this->transChoiceTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stream->test('with')) == false (line 48)
    // if ($stream->test('from')) == false (line 54)
    // if ($stream->test('into')) == true (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 70)

    $actual = $this->transChoiceTokenParser->parse($token);
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
    // if ($stream->test('with')) == false (line 48)
    // if ($stream->test('from')) == false (line 54)
    // if ($stream->test('into')) == true (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 70)
    // throw new \Twig\Error\SyntaxError('A message inside a transchoice tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 71)

    $actual = $this->transChoiceTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse4()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stream->test('with')) == false (line 48)
    // if ($stream->test('from')) == true (line 54)
    // if ($stream->test('into')) == false (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 70)

    $actual = $this->transChoiceTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse5()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stream->test('with')) == false (line 48)
    // if ($stream->test('from')) == true (line 54)
    // if ($stream->test('into')) == false (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 70)
    // throw new \Twig\Error\SyntaxError('A message inside a transchoice tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 71)

    $actual = $this->transChoiceTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse6()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stream->test('with')) == false (line 48)
    // if ($stream->test('from')) == true (line 54)
    // if ($stream->test('into')) == true (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 70)

    $actual = $this->transChoiceTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse7()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stream->test('with')) == false (line 48)
    // if ($stream->test('from')) == true (line 54)
    // if ($stream->test('into')) == true (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 70)
    // throw new \Twig\Error\SyntaxError('A message inside a transchoice tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 71)

    $actual = $this->transChoiceTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse8()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stream->test('with')) == true (line 48)
    // if ($stream->test('from')) == false (line 54)
    // if ($stream->test('into')) == false (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 70)

    $actual = $this->transChoiceTokenParser->parse($token);
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
    // if ($stream->test('with')) == true (line 48)
    // if ($stream->test('from')) == false (line 54)
    // if ($stream->test('into')) == false (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 70)
    // throw new \Twig\Error\SyntaxError('A message inside a transchoice tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 71)

    $actual = $this->transChoiceTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse10()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stream->test('with')) == true (line 48)
    // if ($stream->test('from')) == false (line 54)
    // if ($stream->test('into')) == true (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 70)

    $actual = $this->transChoiceTokenParser->parse($token);
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
    // if ($stream->test('with')) == true (line 48)
    // if ($stream->test('from')) == false (line 54)
    // if ($stream->test('into')) == true (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 70)
    // throw new \Twig\Error\SyntaxError('A message inside a transchoice tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 71)

    $actual = $this->transChoiceTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse12()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stream->test('with')) == true (line 48)
    // if ($stream->test('from')) == true (line 54)
    // if ($stream->test('into')) == false (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 70)

    $actual = $this->transChoiceTokenParser->parse($token);
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
    // if ($stream->test('with')) == true (line 48)
    // if ($stream->test('from')) == true (line 54)
    // if ($stream->test('into')) == false (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 70)
    // throw new \Twig\Error\SyntaxError('A message inside a transchoice tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 71)

    $actual = $this->transChoiceTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse14()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stream->test('with')) == true (line 48)
    // if ($stream->test('from')) == true (line 54)
    // if ($stream->test('into')) == true (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == false (line 70)

    $actual = $this->transChoiceTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Twig\Error\SyntaxError
 */
public function testParse15()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($stream->test('with')) == true (line 48)
    // if ($stream->test('from')) == true (line 54)
    // if ($stream->test('into')) == true (line 60)
    // if (!$body instanceof \Twig\Node\TextNode && !$body instanceof \Twig\Node\Expression\AbstractExpression) == true (line 70)
    // throw new \Twig\Error\SyntaxError('A message inside a transchoice tag must be a simple text.', $body->getTemplateLine(), $stream->getSourceContext()->getName()) -> exception (line 71)

    $actual = $this->transChoiceTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecideTransChoiceFork0()
{
    $token = m::mock('UntypedParameter_token_');

    // TODO: Your mock expectations here

    $actual = $this->transChoiceTokenParser->decideTransChoiceFork($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTag0()
{
    // TODO: Your mock expectations here

    $actual = $this->transChoiceTokenParser->getTag();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
