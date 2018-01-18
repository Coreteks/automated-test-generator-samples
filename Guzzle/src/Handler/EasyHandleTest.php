<?php

namespace tests\GuzzleHttp\Handler;

use GuzzleHttp\Handler\EasyHandle;
use Mockery as m;

class EasyHandleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \GuzzleHttp\Handler\EasyHandle
*/
protected $easyHandle;

public function setUp()
{
    parent::setUp();

    $this->easyHandle = new \GuzzleHttp\Handler\EasyHandle();
}

public function testCreateResponse0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->headers)) == false (line 47)
    // if (!empty($this->options['decode_content']) && isset($normalizedKeys['content-encoding'])) == false (line 56)

    $actual = $this->easyHandle->createResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateResponse1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->headers)) == false (line 47)
    // if (!empty($this->options['decode_content']) && isset($normalizedKeys['content-encoding'])) == true (line 56)
    // if (isset($normalizedKeys['content-length'])) == false (line 62)

    $actual = $this->easyHandle->createResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateResponse2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->headers)) == false (line 47)
    // if (!empty($this->options['decode_content']) && isset($normalizedKeys['content-encoding'])) == true (line 56)
    // if (isset($normalizedKeys['content-length'])) == true (line 62)
    // if ($bodyLength) == false (line 67)

    $actual = $this->easyHandle->createResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateResponse3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->headers)) == false (line 47)
    // if (!empty($this->options['decode_content']) && isset($normalizedKeys['content-encoding'])) == true (line 56)
    // if (isset($normalizedKeys['content-length'])) == true (line 62)
    // if ($bodyLength) == true (line 67)

    $actual = $this->easyHandle->createResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \RuntimeException
 */
public function testCreateResponse4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->headers)) == true (line 47)
    // throw new \RuntimeException('No headers have been received') -> exception (line 48)

    $actual = $this->easyHandle->createResponse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \BadMethodCallException
 */
public function test__get0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // throw new \BadMethodCallException($msg) -> exception (line 90)

    $actual = $this->easyHandle->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
