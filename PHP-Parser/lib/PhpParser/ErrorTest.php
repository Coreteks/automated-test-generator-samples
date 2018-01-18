<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\Error;

class ErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_message = null;
/**
* @var mixed
*/
protected $_attributes = null;
/**
* @var \PhpParser\Error
*/
protected $error;

public function setUp()
{
    parent::setUp();

    $this->_message = null;
    $this->_attributes = null;
    $this->error = new \PhpParser\Error($this->_message, $this->_attributes);
}

public function testGetRawMessage0()
{
    // TODO: Your mock expectations here

    $actual = $this->error->getRawMessage();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetStartLine0()
{
    // TODO: Your mock expectations here

    $actual = $this->error->getStartLine();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEndLine0()
{
    // TODO: Your mock expectations here

    $actual = $this->error->getEndLine();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAttributes0()
{
    // TODO: Your mock expectations here

    $actual = $this->error->getAttributes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetAttributes0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->error->setAttributes($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRawMessage0()
{
    $message = m::mock('UntypedParameter_message_');

    // TODO: Your mock expectations here

    $actual = $this->error->setRawMessage($message);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetStartLine0()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    $actual = $this->error->setStartLine($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasColumnInfo0()
{
    // TODO: Your mock expectations here

    $actual = $this->error->hasColumnInfo();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetStartColumn0()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasColumnInfo()) == false (line 111)

    $actual = $this->error->getStartColumn($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetStartColumn1()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasColumnInfo()) == true (line 111)
    // throw new \RuntimeException('Error does not have column information') -> exception (line 112)

    $actual = $this->error->getStartColumn($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEndColumn0()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasColumnInfo()) == false (line 125)

    $actual = $this->error->getEndColumn($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testGetEndColumn1()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->hasColumnInfo()) == true (line 125)
    // throw new \RuntimeException('Error does not have column information') -> exception (line 126)

    $actual = $this->error->getEndColumn($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetMessageWithColumnInfo0()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    $actual = $this->error->getMessageWithColumnInfo($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
