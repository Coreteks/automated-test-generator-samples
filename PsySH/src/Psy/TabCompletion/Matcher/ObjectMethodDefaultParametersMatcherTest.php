<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\ObjectMethodDefaultParametersMatcher;

class ObjectMethodDefaultParametersMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\Matcher\ObjectMethodDefaultParametersMatcher
*/
protected $objectMethodDefaultParametersMatcher;

public function setUp()
{
    parent::setUp();

    $this->objectMethodDefaultParametersMatcher = new \Psy\TabCompletion\Matcher\ObjectMethodDefaultParametersMatcher();
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
    // if (!is_array($objectToken)) == false (line 23)

    $actual = $this->objectMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches1()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($objectToken)) == false (line 23)

    $actual = $this->objectMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches2()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($objectToken)) == false (line 23)

    $actual = $this->objectMethodDefaultParametersMatcher->getMatches($tokens, $info);
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
    // if (!is_array($objectToken)) == false (line 23)

    $actual = $this->objectMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches4()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($objectToken)) == false (line 23)

    $actual = $this->objectMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches5()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($objectToken)) == false (line 23)

    $actual = $this->objectMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches6()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($objectToken)) == false (line 23)

    $actual = $this->objectMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches7()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($objectToken)) == false (line 23)
    // if ($method->getName() === $functionName[1]) == false (line 41)

    $actual = $this->objectMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches8()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($objectToken)) == false (line 23)
    // if ($method->getName() === $functionName[1]) == true (line 41)

    $actual = $this->objectMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches9()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($objectToken)) == true (line 23)

    $actual = $this->objectMethodDefaultParametersMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($openBracket !== '(') == false (line 53)
    // if (!self::tokenIs($functionName, self::T_STRING)) == false (line 59)
    // if (!self::tokenIs($operator, self::T_OBJECT_OPERATOR)) == false (line 65)

    $actual = $this->objectMethodDefaultParametersMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($openBracket !== '(') == false (line 53)
    // if (!self::tokenIs($functionName, self::T_STRING)) == false (line 59)
    // if (!self::tokenIs($operator, self::T_OBJECT_OPERATOR)) == true (line 65)

    $actual = $this->objectMethodDefaultParametersMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched2()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($openBracket !== '(') == false (line 53)
    // if (!self::tokenIs($functionName, self::T_STRING)) == true (line 59)

    $actual = $this->objectMethodDefaultParametersMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched3()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($openBracket !== '(') == true (line 53)

    $actual = $this->objectMethodDefaultParametersMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
