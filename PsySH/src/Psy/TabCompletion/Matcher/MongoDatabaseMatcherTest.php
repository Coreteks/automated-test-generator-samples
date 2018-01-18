<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\MongoDatabaseMatcher;

class MongoDatabaseMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\Matcher\MongoDatabaseMatcher
*/
protected $mongoDatabaseMatcher;

public function setUp()
{
    parent::setUp();

    $this->mongoDatabaseMatcher = new \Psy\TabCompletion\Matcher\MongoDatabaseMatcher();
}

public function testGetMatches0()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == false (line 31)
    // if (!$object instanceof \MongoDB) == false (line 39)

    $actual = $this->mongoDatabaseMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches1()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == false (line 31)
    // if (!$object instanceof \MongoDB) == true (line 39)

    $actual = $this->mongoDatabaseMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches2()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == true (line 31)
    // if (!$object instanceof \MongoDB) == false (line 39)

    $actual = $this->mongoDatabaseMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches3()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == true (line 31)
    // if (!$object instanceof \MongoDB) == true (line 39)

    $actual = $this->mongoDatabaseMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 59)
    // Case self::tokenIs($token, self::T_OBJECT_OPERATOR) == false (line 60)
    // Case self::tokenIs($prevToken, self::T_OBJECT_OPERATOR) == false (line 61)

    $actual = $this->mongoDatabaseMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 59)
    // Case self::tokenIs($token, self::T_OBJECT_OPERATOR) == false (line 60)
    // Case self::tokenIs($prevToken, self::T_OBJECT_OPERATOR) == true (line 61)

    $actual = $this->mongoDatabaseMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched2()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 59)
    // Case self::tokenIs($token, self::T_OBJECT_OPERATOR) == true (line 60)

    $actual = $this->mongoDatabaseMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
