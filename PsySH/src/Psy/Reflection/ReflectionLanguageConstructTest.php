<?php

namespace tests\Psy\Reflection;

use Mockery as m;
use Psy\Reflection\ReflectionLanguageConstruct;

class ReflectionLanguageConstructTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_keyword = null;
/**
* @var \Psy\Reflection\ReflectionLanguageConstruct
*/
protected $reflectionLanguageConstruct;

public function setUp()
{
    parent::setUp();

    $this->_keyword = null;
    $this->reflectionLanguageConstruct = new \Psy\Reflection\ReflectionLanguageConstruct($this->_keyword);
}

/**
 * @expectedException \RuntimeException
 */
public function testExport0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \RuntimeException('Not yet implemented because it\'s unclear what I should do here :)') -> exception (line 93)

    $actual = $this->reflectionLanguageConstruct->export($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionLanguageConstruct->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReturnsReference0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionLanguageConstruct->returnsReference();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetParameters0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionLanguageConstruct->getParameters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetParameters1()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionLanguageConstruct->getParameters();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->reflectionLanguageConstruct->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsLanguageConstruct0()
{
    $keyword = m::mock('UntypedParameter_keyword_');

    // TODO: Your mock expectations here

    $actual = $this->reflectionLanguageConstruct->isLanguageConstruct($keyword);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
