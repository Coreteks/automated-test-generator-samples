<?php

namespace tests\Faker\Provider\fa_IR;

use Faker\Provider\fa_IR\Text;
use Mockery as m;

class TextTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Provider\fa_IR\Text
*/
protected $text;

public function setUp()
{
    parent::setUp();

    $this->text = new \Faker\Provider\fa_IR\Text();
}

public function testRealText0()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');
    $indexSize = m::mock('UntypedParameter_indexSize_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 10) == false (line 18)
    // if ($indexSize < 1) == false (line 22)
    // if ($indexSize > 5) == false (line 26)
    // while ($resultLength < $maxNbChars && isset($words[$next])) == false (line 35)

    $actual = $this->text->realText($maxNbChars, $indexSize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRealText1()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');
    $indexSize = m::mock('UntypedParameter_indexSize_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 10) == false (line 18)
    // if ($indexSize < 1) == false (line 22)
    // if ($indexSize > 5) == false (line 26)
    // while ($resultLength < $maxNbChars && isset($words[$next])) == true (line 35)
    // if ($resultLength == 0 && !preg_match('/^[\\x{0600}-\\x{06FF}]/u', $word)) == false (line 46)
    // while ($resultLength < $maxNbChars && isset($words[$next])) == false (line 35)

    $actual = $this->text->realText($maxNbChars, $indexSize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRealText2()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');
    $indexSize = m::mock('UntypedParameter_indexSize_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 10) == false (line 18)
    // if ($indexSize < 1) == false (line 22)
    // if ($indexSize > 5) == false (line 26)
    // while ($resultLength < $maxNbChars && isset($words[$next])) == true (line 35)
    // if ($resultLength == 0 && !preg_match('/^[\\x{0600}-\\x{06FF}]/u', $word)) == true (line 46)
    // while ($resultLength < $maxNbChars && isset($words[$next])) == false (line 35)

    $actual = $this->text->realText($maxNbChars, $indexSize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testRealText3()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');
    $indexSize = m::mock('UntypedParameter_indexSize_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 10) == false (line 18)
    // if ($indexSize < 1) == false (line 22)
    // if ($indexSize > 5) == true (line 26)
    // throw new \InvalidArgumentException('indexSize must be at most 5') -> exception (line 27)

    $actual = $this->text->realText($maxNbChars, $indexSize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testRealText4()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');
    $indexSize = m::mock('UntypedParameter_indexSize_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 10) == false (line 18)
    // if ($indexSize < 1) == true (line 22)
    // throw new \InvalidArgumentException('indexSize must be at least 1') -> exception (line 23)

    $actual = $this->text->realText($maxNbChars, $indexSize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testRealText5()
{
    $maxNbChars = m::mock('UntypedParameter_maxNbChars_');
    $indexSize = m::mock('UntypedParameter_indexSize_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($maxNbChars < 10) == true (line 18)
    // throw new \InvalidArgumentException('maxNbChars must be at least 10') -> exception (line 19)

    $actual = $this->text->realText($maxNbChars, $indexSize);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
