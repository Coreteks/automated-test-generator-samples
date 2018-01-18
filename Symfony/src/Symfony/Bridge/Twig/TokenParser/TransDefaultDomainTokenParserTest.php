<?php

namespace tests\Symfony\Bridge\Twig\TokenParser;

use Mockery as m;
use Symfony\Bridge\Twig\TokenParser\TransDefaultDomainTokenParser;

class TransDefaultDomainTokenParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Twig\TokenParser\TransDefaultDomainTokenParser
*/
protected $transDefaultDomainTokenParser;

public function setUp()
{
    parent::setUp();

    $this->transDefaultDomainTokenParser = new \Symfony\Bridge\Twig\TokenParser\TransDefaultDomainTokenParser();
}

public function testParse0()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    $actual = $this->transDefaultDomainTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTag0()
{
    // TODO: Your mock expectations here

    $actual = $this->transDefaultDomainTokenParser->getTag();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
