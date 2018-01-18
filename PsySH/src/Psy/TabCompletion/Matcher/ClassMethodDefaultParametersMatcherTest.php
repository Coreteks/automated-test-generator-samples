<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\ClassMethodDefaultParametersMatcher;

class ClassMethodDefaultParametersMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\Matcher\ClassMethodDefaultParametersMatcher
*/
protected $classMethodDefaultParametersMatcher;

public function setUp()
{
    parent::setUp();

    $this->classMethodDefaultParametersMatcher = new \Psy\TabCompletion\Matcher\ClassMethodDefaultParametersMatcher();
}

/**
 * @expectedException \Exception
 */
public function testGetMatches0()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    $actual = $this->classMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches1()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    $actual = $this->classMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches2()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    $actual = $this->classMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches3()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->getName() === $functionName[1]) == false (line 34)

    $actual = $this->classMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches4()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($method->getName() === $functionName[1]) == true (line 34)

    $actual = $this->classMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($openBracket !== '(') == false (line 46)
    // if (!self::tokenIs($functionName, self::T_STRING)) == false (line 52)
    // if (!self::tokenIs($operator, self::T_DOUBLE_COLON)) == false (line 58)

    $actual = $this->classMethodDefaultParametersMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($openBracket !== '(') == false (line 46)
    // if (!self::tokenIs($functionName, self::T_STRING)) == false (line 52)
    // if (!self::tokenIs($operator, self::T_DOUBLE_COLON)) == true (line 58)

    $actual = $this->classMethodDefaultParametersMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched2()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($openBracket !== '(') == false (line 46)
    // if (!self::tokenIs($functionName, self::T_STRING)) == true (line 52)

    $actual = $this->classMethodDefaultParametersMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched3()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($openBracket !== '(') == true (line 46)

    $actual = $this->classMethodDefaultParametersMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
