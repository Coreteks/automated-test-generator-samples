<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\ClassAttributesMatcher;

class ClassAttributesMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\Matcher\ClassAttributesMatcher
*/
protected $classAttributesMatcher;

public function setUp()
{
    parent::setUp();

    $this->classAttributesMatcher = new \Psy\TabCompletion\Matcher\ClassAttributesMatcher();
}

/**
 * @expectedException \Exception
 */
public function testGetMatches0()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == false (line 32)

    $actual = $this->classAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches1()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == false (line 32)

    $actual = $this->classAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches2()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == false (line 32)

    $actual = $this->classAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGetMatches3()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == true (line 32)

    $actual = $this->classAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches4()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == true (line 32)

    $actual = $this->classAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches5()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == true (line 32)

    $actual = $this->classAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 76)
    // Case self::tokenIs($prevToken, self::T_DOUBLE_COLON) && self::tokenIs($token, self::T_STRING) == false (line 77)
    // Case self::tokenIs($token, self::T_DOUBLE_COLON) == false (line 78)

    $actual = $this->classAttributesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 76)
    // Case self::tokenIs($prevToken, self::T_DOUBLE_COLON) && self::tokenIs($token, self::T_STRING) == false (line 77)
    // Case self::tokenIs($token, self::T_DOUBLE_COLON) == true (line 78)

    $actual = $this->classAttributesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched2()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 76)
    // Case self::tokenIs($prevToken, self::T_DOUBLE_COLON) && self::tokenIs($token, self::T_STRING) == true (line 77)

    $actual = $this->classAttributesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
