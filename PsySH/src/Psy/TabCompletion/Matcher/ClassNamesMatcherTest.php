<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\ClassNamesMatcher;

class ClassNamesMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\Matcher\ClassNamesMatcher
*/
protected $classNamesMatcher;

public function setUp()
{
    parent::setUp();

    $this->classNamesMatcher = new \Psy\TabCompletion\Matcher\ClassNamesMatcher();
}

public function testGetMatches0()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strlen($class) > 0 && $class[0] === '\\') == false (line 29)

    $actual = $this->classNamesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches1()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strlen($class) > 0 && $class[0] === '\\') == true (line 29)

    $actual = $this->classNamesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 63)
    // Case self::hasToken(array($blacklistedTokens), $token) == false (line 64)
    // Case self::hasToken(array($blacklistedTokens), $prevToken) == false (line 65)
    // Case is_string($token) && $token === '$' == false (line 66)
    // Case self::hasToken(array(self::T_NEW, self::T_OPEN_TAG, self::T_NS_SEPARATOR), $prevToken) == false (line 68)
    // Case self::hasToken(array(self::T_NEW, self::T_OPEN_TAG, self::T_NS_SEPARATOR), $token) == false (line 69)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $token) == false (line 70)
    // Case self::isOperator($token) == false (line 71)

    $actual = $this->classNamesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 63)
    // Case self::hasToken(array($blacklistedTokens), $token) == false (line 64)
    // Case self::hasToken(array($blacklistedTokens), $prevToken) == false (line 65)
    // Case is_string($token) && $token === '$' == false (line 66)
    // Case self::hasToken(array(self::T_NEW, self::T_OPEN_TAG, self::T_NS_SEPARATOR), $prevToken) == false (line 68)
    // Case self::hasToken(array(self::T_NEW, self::T_OPEN_TAG, self::T_NS_SEPARATOR), $token) == false (line 69)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $token) == false (line 70)
    // Case self::isOperator($token) == true (line 71)

    $actual = $this->classNamesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched2()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 63)
    // Case self::hasToken(array($blacklistedTokens), $token) == false (line 64)
    // Case self::hasToken(array($blacklistedTokens), $prevToken) == false (line 65)
    // Case is_string($token) && $token === '$' == false (line 66)
    // Case self::hasToken(array(self::T_NEW, self::T_OPEN_TAG, self::T_NS_SEPARATOR), $prevToken) == false (line 68)
    // Case self::hasToken(array(self::T_NEW, self::T_OPEN_TAG, self::T_NS_SEPARATOR), $token) == false (line 69)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $token) == true (line 70)

    $actual = $this->classNamesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched3()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 63)
    // Case self::hasToken(array($blacklistedTokens), $token) == false (line 64)
    // Case self::hasToken(array($blacklistedTokens), $prevToken) == false (line 65)
    // Case is_string($token) && $token === '$' == false (line 66)
    // Case self::hasToken(array(self::T_NEW, self::T_OPEN_TAG, self::T_NS_SEPARATOR), $prevToken) == false (line 68)
    // Case self::hasToken(array(self::T_NEW, self::T_OPEN_TAG, self::T_NS_SEPARATOR), $token) == true (line 69)

    $actual = $this->classNamesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched4()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 63)
    // Case self::hasToken(array($blacklistedTokens), $token) == false (line 64)
    // Case self::hasToken(array($blacklistedTokens), $prevToken) == false (line 65)
    // Case is_string($token) && $token === '$' == false (line 66)
    // Case self::hasToken(array(self::T_NEW, self::T_OPEN_TAG, self::T_NS_SEPARATOR), $prevToken) == true (line 68)

    $actual = $this->classNamesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched5()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 63)
    // Case self::hasToken(array($blacklistedTokens), $token) == false (line 64)
    // Case self::hasToken(array($blacklistedTokens), $prevToken) == false (line 65)
    // Case is_string($token) && $token === '$' == true (line 66)

    $actual = $this->classNamesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched6()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 63)
    // Case self::hasToken(array($blacklistedTokens), $token) == false (line 64)
    // Case self::hasToken(array($blacklistedTokens), $prevToken) == true (line 65)

    $actual = $this->classNamesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched7()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 63)
    // Case self::hasToken(array($blacklistedTokens), $token) == true (line 64)

    $actual = $this->classNamesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
