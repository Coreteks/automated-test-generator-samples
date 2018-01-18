<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class FunctionsMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\Matcher\FunctionsMatcher
*/
protected $functionsMatcher;

public function setUp()
{
    parent::setUp();

    $this->functionsMatcher = new \Psy\TabCompletion\Matcher\FunctionsMatcher();
}

public function testGetMatches0()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    $actual = $this->functionsMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 46)
    // Case self::tokenIs($prevToken, self::T_NEW) == false (line 47)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_STRING), $token) == false (line 49)
    // Case self::isOperator($token) == false (line 50)

    $actual = $this->functionsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 46)
    // Case self::tokenIs($prevToken, self::T_NEW) == false (line 47)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_STRING), $token) == false (line 49)
    // Case self::isOperator($token) == true (line 50)

    $actual = $this->functionsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched2()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 46)
    // Case self::tokenIs($prevToken, self::T_NEW) == false (line 47)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_STRING), $token) == true (line 49)

    $actual = $this->functionsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched3()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 46)
    // Case self::tokenIs($prevToken, self::T_NEW) == true (line 47)

    $actual = $this->functionsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
