<?php

namespace tests;

use Mockery as m;
use Requests_Response_Headers;

class Requests_Response_HeadersTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Response_Headers
*/
protected $requests_Response_Headers;

public function setUp()
{
    parent::setUp();

    $this->requests_Response_Headers = new \Requests_Response_Headers();
}

public function testOffsetGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->data[$key])) == false (line 28)

    $actual = $this->requests_Response_Headers->offsetGet($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->data[$key])) == true (line 28)

    $actual = $this->requests_Response_Headers->offsetGet($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === \null) == false (line 44)
    // if (!isset($this->data[$key])) == false (line 50)

    $actual = $this->requests_Response_Headers->offsetSet($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === \null) == false (line 44)
    // if (!isset($this->data[$key])) == true (line 50)

    $actual = $this->requests_Response_Headers->offsetSet($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Requests_Exception
 */
public function testOffsetSet2()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === \null) == true (line 44)
    // throw new \Requests_Exception('Object is a dictionary, not a list', 'invalidset') -> exception (line 45)

    $actual = $this->requests_Response_Headers->offsetSet($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetValues0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->data[$key])) == false (line 65)

    $actual = $this->requests_Response_Headers->getValues($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetValues1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->data[$key])) == true (line 65)

    $actual = $this->requests_Response_Headers->getValues($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlatten0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($value)) == false (line 82)

    $actual = $this->requests_Response_Headers->flatten($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlatten1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($value)) == true (line 82)

    $actual = $this->requests_Response_Headers->flatten($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIterator0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Response_Headers->getIterator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
