<?php

namespace tests\Symfony\Bridge\Twig\TokenParser;

use Mockery as m;
use Symfony\Bridge\Twig\TokenParser\DumpTokenParser;

class DumpTokenParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\TokenParser\DumpTokenParser
*/
protected $dumpTokenParser;

public function setUp()
{
    parent::setUp();

    $this->dumpTokenParser = new \Symfony\Bridge\Twig\TokenParser\DumpTokenParser();
}

public function testParse0()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->parser->getStream()->test(\Twig\Token::BLOCK_END_TYPE)) == false (line 38)

    $actual = $this->dumpTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->parser->getStream()->test(\Twig\Token::BLOCK_END_TYPE)) == true (line 38)

    $actual = $this->dumpTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTag0()
{
    // TODO: Your mock expectations here

    $actual = $this->dumpTokenParser->getTag();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
