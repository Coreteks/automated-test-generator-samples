<?php

namespace tests\Illuminate\Console;

use Illuminate\Console\Parser;
use Mockery as m;

class ParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Console\Parser
*/
protected $parser;

public function setUp()
{
    parent::setUp();

    $this->parser = new \Illuminate\Console\Parser();
}

public function testParse0()
{
    $expression = m::mock('UntypedParameter_expression_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match_all('/\\{\\s*(.*?)\\s*\\}/', $expression, $matches)) == false (line 24)

    $actual = $this->parser->parse($expression);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $expression = m::mock('UntypedParameter_expression_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match_all('/\\{\\s*(.*?)\\s*\\}/', $expression, $matches)) == true (line 24)
    // if (count($matches[1])) == false (line 25)

    $actual = $this->parser->parse($expression);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    $expression = m::mock('UntypedParameter_expression_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (preg_match_all('/\\{\\s*(.*?)\\s*\\}/', $expression, $matches)) == true (line 24)
    // if (count($matches[1])) == true (line 25)

    $actual = $this->parser->parse($expression);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
