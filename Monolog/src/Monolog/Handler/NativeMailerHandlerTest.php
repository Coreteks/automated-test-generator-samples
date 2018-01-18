<?php

namespace tests\Monolog\Handler;

use Mockery as m;
use Monolog\Handler\NativeMailerHandler;

class NativeMailerHandlerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_to = null;
/**
* @var mixed
*/
protected $_subject = null;
/**
* @var mixed
*/
protected $_from = null;
/**
* @var mixed
*/
protected $_level = null;
/**
* @var mixed
*/
protected $_bubble = null;
/**
* @var mixed
*/
protected $_maxColumnWidth = null;
/**
* @var \Monolog\Handler\NativeMailerHandler
*/
protected $nativeMailerHandler;

public function setUp()
{
    parent::setUp();

    $this->_to = null;
    $this->_subject = null;
    $this->_from = null;
    $this->_level = null;
    $this->_bubble = null;
    $this->_maxColumnWidth = null;
    $this->nativeMailerHandler = new \Monolog\Handler\NativeMailerHandler($this->_to, $this->_subject, $this->_from, $this->_level, $this->_bubble, $this->_maxColumnWidth);
}

public function testAddHeader0()
{
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    $actual = $this->nativeMailerHandler->addHeader($headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddHeader1()
{
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($header, "\n") !== false || strpos($header, "\r") !== false) == false (line 93)

    $actual = $this->nativeMailerHandler->addHeader($headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testAddHeader2()
{
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($header, "\n") !== false || strpos($header, "\r") !== false) == true (line 93)
    // throw new \InvalidArgumentException('Headers can not contain newline characters for security reasons') -> exception (line 94)

    $actual = $this->nativeMailerHandler->addHeader($headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddParameter0()
{
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->nativeMailerHandler->addParameter($parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetContentType0()
{
    // TODO: Your mock expectations here

    $actual = $this->nativeMailerHandler->getContentType();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEncoding0()
{
    // TODO: Your mock expectations here

    $actual = $this->nativeMailerHandler->getEncoding();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetContentType0()
{
    $contentType = m::mock('UntypedParameter_contentType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($contentType, "\n") !== false || strpos($contentType, "\r") !== false) == false (line 167)

    $actual = $this->nativeMailerHandler->setContentType($contentType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetContentType1()
{
    $contentType = m::mock('UntypedParameter_contentType_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($contentType, "\n") !== false || strpos($contentType, "\r") !== false) == true (line 167)
    // throw new \InvalidArgumentException('The content type can not contain newline characters to prevent email header injection') -> exception (line 168)

    $actual = $this->nativeMailerHandler->setContentType($contentType);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetEncoding0()
{
    $encoding = m::mock('UntypedParameter_encoding_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($encoding, "\n") !== false || strpos($encoding, "\r") !== false) == false (line 182)

    $actual = $this->nativeMailerHandler->setEncoding($encoding);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetEncoding1()
{
    $encoding = m::mock('UntypedParameter_encoding_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (strpos($encoding, "\n") !== false || strpos($encoding, "\r") !== false) == true (line 182)
    // throw new \InvalidArgumentException('The encoding can not contain newline characters to prevent email header injection') -> exception (line 183)

    $actual = $this->nativeMailerHandler->setEncoding($encoding);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
