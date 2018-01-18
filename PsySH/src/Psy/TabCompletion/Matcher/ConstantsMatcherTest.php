<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\ConstantsMatcher;

class ConstantsMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\Matcher\ConstantsMatcher
*/
protected $constantsMatcher;

public function setUp()
{
    parent::setUp();

    $this->constantsMatcher = new \Psy\TabCompletion\Matcher\ConstantsMatcher();
}

public function testGetMatches0()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    $actual = $this->constantsMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 43)
    // Case self::tokenIs($prevToken, self::T_NEW) == false (line 44)
    // Case self::tokenIs($prevToken, self::T_NS_SEPARATOR) == false (line 45)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_STRING), $token) == false (line 47)
    // Case self::isOperator($token) == false (line 48)

    $actual = $this->constantsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 43)
    // Case self::tokenIs($prevToken, self::T_NEW) == false (line 44)
    // Case self::tokenIs($prevToken, self::T_NS_SEPARATOR) == false (line 45)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_STRING), $token) == false (line 47)
    // Case self::isOperator($token) == true (line 48)

    $actual = $this->constantsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched2()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 43)
    // Case self::tokenIs($prevToken, self::T_NEW) == false (line 44)
    // Case self::tokenIs($prevToken, self::T_NS_SEPARATOR) == false (line 45)
    // Case self::hasToken(array(self::T_OPEN_TAG, self::T_STRING), $token) == true (line 47)

    $actual = $this->constantsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched3()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 43)
    // Case self::tokenIs($prevToken, self::T_NEW) == false (line 44)
    // Case self::tokenIs($prevToken, self::T_NS_SEPARATOR) == true (line 45)

    $actual = $this->constantsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched4()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 43)
    // Case self::tokenIs($prevToken, self::T_NEW) == true (line 44)

    $actual = $this->constantsMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
