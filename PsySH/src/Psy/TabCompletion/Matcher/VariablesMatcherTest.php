<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\VariablesMatcher;

class VariablesMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\Matcher\VariablesMatcher
*/
protected $variablesMatcher;

public function setUp()
{
    parent::setUp();

    $this->variablesMatcher = new \Psy\TabCompletion\Matcher\VariablesMatcher();
}

public function testGetMatches0()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    $actual = $this->variablesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 42)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $token) == false (line 43)
    // Case is_string($token) && $token === '$' == false (line 44)
    // Case self::isOperator($token) == false (line 45)

    $actual = $this->variablesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 42)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $token) == false (line 43)
    // Case is_string($token) && $token === '$' == false (line 44)
    // Case self::isOperator($token) == true (line 45)

    $actual = $this->variablesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched2()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 42)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $token) == false (line 43)
    // Case is_string($token) && $token === '$' == true (line 44)

    $actual = $this->variablesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched3()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 42)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_VARIABLE), $token) == true (line 43)

    $actual = $this->variablesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
