<?php

namespace tests\Symfony\Bridge\Twig\TokenParser;

use Mockery as m;
use Symfony\Bridge\Twig\TokenParser\FormThemeTokenParser;

class FormThemeTokenParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\TokenParser\FormThemeTokenParser
*/
protected $formThemeTokenParser;

public function setUp()
{
    parent::setUp();

    $this->formThemeTokenParser = new \Symfony\Bridge\Twig\TokenParser\FormThemeTokenParser();
}

public function testParse0()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->parser->getStream()->test(\Twig\Token::NAME_TYPE, 'with')) == false (line 40)
    // PhpParser\Node\Stmt\Do_ == false (line 49)

    $actual = $this->formThemeTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->parser->getStream()->test(\Twig\Token::NAME_TYPE, 'with')) == true (line 40)
    // if ($this->parser->getStream()->nextIf(\Twig\Token::NAME_TYPE, 'only')) == false (line 44)

    $actual = $this->formThemeTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->parser->getStream()->test(\Twig\Token::NAME_TYPE, 'with')) == true (line 40)
    // if ($this->parser->getStream()->nextIf(\Twig\Token::NAME_TYPE, 'only')) == true (line 44)

    $actual = $this->formThemeTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTag0()
{
    // TODO: Your mock expectations here

    $actual = $this->formThemeTokenParser->getTag();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
