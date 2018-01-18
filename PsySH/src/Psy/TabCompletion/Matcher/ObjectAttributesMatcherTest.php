<?php

namespace tests\Psy\TabCompletion\Matcher;

use Mockery as m;
use Psy\TabCompletion\Matcher\ObjectAttributesMatcher;

class ObjectAttributesMatcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\TabCompletion\Matcher\ObjectAttributesMatcher
*/
protected $objectAttributesMatcher;

public function setUp()
{
    parent::setUp();

    $this->objectAttributesMatcher = new \Psy\TabCompletion\Matcher\ObjectAttributesMatcher();
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
    // if (self::tokenIs($firstToken, self::T_STRING)) == false (line 34)
    // if (!is_array($objectToken)) == false (line 39)

    $actual = $this->objectAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches1()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == false (line 34)
    // if (!is_array($objectToken)) == false (line 39)

    $actual = $this->objectAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches2()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == false (line 34)
    // if (!is_array($objectToken)) == false (line 39)
    // if (!is_object($object)) == false (line 50)

    $actual = $this->objectAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches3()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == false (line 34)
    // if (!is_array($objectToken)) == false (line 39)
    // if (!is_object($object)) == true (line 50)

    $actual = $this->objectAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches4()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == false (line 34)
    // if (!is_array($objectToken)) == true (line 39)

    $actual = $this->objectAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGetMatches5()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == true (line 34)
    // if (!is_array($objectToken)) == false (line 39)

    $actual = $this->objectAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches6()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == true (line 34)
    // if (!is_array($objectToken)) == false (line 39)

    $actual = $this->objectAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches7()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == true (line 34)
    // if (!is_array($objectToken)) == false (line 39)
    // if (!is_object($object)) == false (line 50)

    $actual = $this->objectAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches8()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == true (line 34)
    // if (!is_array($objectToken)) == false (line 39)
    // if (!is_object($object)) == true (line 50)

    $actual = $this->objectAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMatches9()
{
    $tokens = [];
    $info = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::tokenIs($firstToken, self::T_STRING)) == true (line 34)
    // if (!is_array($objectToken)) == true (line 39)

    $actual = $this->objectAttributesMatcher->getMatches($tokens, $info);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched0()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 70)
    // Case self::tokenIs($token, self::T_OBJECT_OPERATOR) == false (line 71)
    // Case self::tokenIs($prevToken, self::T_OBJECT_OPERATOR) == false (line 72)

    $actual = $this->objectAttributesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched1()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 70)
    // Case self::tokenIs($token, self::T_OBJECT_OPERATOR) == false (line 71)
    // Case self::tokenIs($prevToken, self::T_OBJECT_OPERATOR) == true (line 72)

    $actual = $this->objectAttributesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasMatched2()
{
    $tokens = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch (true) (line 70)
    // Case self::tokenIs($token, self::T_OBJECT_OPERATOR) == true (line 71)

    $actual = $this->objectAttributesMatcher->hasMatched($tokens);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
