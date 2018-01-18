<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\KeywordsMatcher;

class KeywordsMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\Matcher\KeywordsMatcher
*/
protected $keywordsMatcher;

public function setUp()
{
    parent::setUp();

    $this->keywordsMatcher = new \Psy\TabCompletion\Matcher\KeywordsMatcher();
}

public function testGetKeywords0()
{
    // TODO: Your mock expectations here

    $actual = $this->keywordsMatcher->getKeywords();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsKeyword0()
{
    $keyword = m::mock('UntypedParameter_keyword_');

    // TODO: Your mock expectations here

    $actual = $this->keywordsMatcher->isKeyword($keyword);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches0()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    $actual = $this->keywordsMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 74)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $token) == false (line 75)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $prevToken) && self::tokenIs($token, self::T_STRING) == false (line 77)
    // Case self::isOperator($token) == false (line 79)

    $actual = $this->keywordsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 74)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $token) == false (line 75)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $prevToken) && self::tokenIs($token, self::T_STRING) == false (line 77)
    // Case self::isOperator($token) == true (line 79)

    $actual = $this->keywordsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched2()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 74)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $token) == false (line 75)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $prevToken) && self::tokenIs($token, self::T_STRING) == true (line 77)

    $actual = $this->keywordsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched3()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 74)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $token) == true (line 75)

    $actual = $this->keywordsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
