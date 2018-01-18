<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\FunctionDefaultParametersMatcher;

class FunctionDefaultParametersMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\Matcher\FunctionDefaultParametersMatcher
*/
protected $functionDefaultParametersMatcher;

public function setUp()
{
    parent::setUp();

    $this->functionDefaultParametersMatcher = new \Psy\TabCompletion\Matcher\FunctionDefaultParametersMatcher();
}

/**
 * @expectedException \Exception
 */
public function testGetMatches0()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    $actual = $this->functionDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches1()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    $actual = $this->functionDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches2()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    $actual = $this->functionDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($openBracket !== '(') == false (line 37)
    // if (!self::tokenIs($functionName, self::T_STRING)) == false (line 43)
    // if (!function_exists($functionName[1])) == false (line 47)

    $actual = $this->functionDefaultParametersMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($openBracket !== '(') == false (line 37)
    // if (!self::tokenIs($functionName, self::T_STRING)) == false (line 43)
    // if (!function_exists($functionName[1])) == true (line 47)

    $actual = $this->functionDefaultParametersMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched2()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($openBracket !== '(') == false (line 37)
    // if (!self::tokenIs($functionName, self::T_STRING)) == true (line 43)

    $actual = $this->functionDefaultParametersMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched3()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($openBracket !== '(') == true (line 37)

    $actual = $this->functionDefaultParametersMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
