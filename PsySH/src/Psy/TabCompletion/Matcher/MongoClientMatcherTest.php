<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\MongoClientMatcher;

class MongoClientMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\Matcher\MongoClientMatcher
*/
protected $mongoClientMatcher;

public function setUp()
{
    parent::setUp();

    $this->mongoClientMatcher = new \Psy\TabCompletion\Matcher\MongoClientMatcher();
}

public function testGetMatches0()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == false (line 31)
    // if (!$object instanceof \MongoClient) == false (line 39)

    $actual = $this->mongoClientMatcher->getMatches($tokens, $info);
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
    // if (!$object instanceof \MongoClient) == true (line 39)

    $actual = $this->mongoClientMatcher->getMatches($tokens, $info);
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
    // if (!$object instanceof \MongoClient) == false (line 39)

    $actual = $this->mongoClientMatcher->getMatches($tokens, $info);
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
    // if (!$object instanceof \MongoClient) == true (line 39)

    $actual = $this->mongoClientMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 63)
    // Case self::tokenIs($token, self::T_OBJECT_OPERATOR) == false (line 64)
    // Case self::tokenIs($prevToken, self::T_OBJECT_OPERATOR) == false (line 65)

    $actual = $this->mongoClientMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 63)
    // Case self::tokenIs($token, self::T_OBJECT_OPERATOR) == false (line 64)
    // Case self::tokenIs($prevToken, self::T_OBJECT_OPERATOR) == true (line 65)

    $actual = $this->mongoClientMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched2()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 63)
    // Case self::tokenIs($token, self::T_OBJECT_OPERATOR) == true (line 64)

    $actual = $this->mongoClientMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
