<?php

namespace tests\Symfony\Bridge\Twig\TokenParser;

use Mockery as m;
use Symfony\Bridge\Twig\TokenParser\StopwatchTokenParser;

class StopwatchTokenParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_stopwatchIsAvailable = null;
/**
* @var \Symfony\Bridge\Twig\TokenParser\StopwatchTokenParser
*/
protected $stopwatchTokenParser;

public function setUp()
{
    parent::setUp();

    $this->_stopwatchIsAvailable = null;
    $this->stopwatchTokenParser = new \Symfony\Bridge\Twig\TokenParser\StopwatchTokenParser($this->_stopwatchIsAvailable);
}

public function testParse0()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->stopwatchIsAvailable) == false (line 47)

    $actual = $this->stopwatchTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->stopwatchIsAvailable) == true (line 47)

    $actual = $this->stopwatchTokenParser->parse($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecideStopwatchEnd0()
{
    $token = m::mock(\Twig\Token::class);

    // TODO: Your mock expectations here

    $actual = $this->stopwatchTokenParser->decideStopwatchEnd($token);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTag0()
{
    // TODO: Your mock expectations here

    $actual = $this->stopwatchTokenParser->getTag();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
