<?php

namespace tests;

use Mockery as m;
use Requests_Utility_CaseInsensitiveDictionary;

class Requests_Utility_CaseInsensitiveDictionaryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var array
*/
protected $_data = [];
/**
* @var \Requests_Utility_CaseInsensitiveDictionary
*/
protected $requests_Utility_CaseInsensitiveDictionary;

public function setUp()
{
    parent::setUp();

    $this->_data = [];
    $this->requests_Utility_CaseInsensitiveDictionary = new \Requests_Utility_CaseInsensitiveDictionary($this->_data);
}

public function testOffsetExists0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Utility_CaseInsensitiveDictionary->offsetExists($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->data[$key])) == false (line 53)

    $actual = $this->requests_Utility_CaseInsensitiveDictionary->offsetGet($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetGet1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->data[$key])) == true (line 53)

    $actual = $this->requests_Utility_CaseInsensitiveDictionary->offsetGet($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetSet0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === \null) == false (line 69)

    $actual = $this->requests_Utility_CaseInsensitiveDictionary->offsetSet($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Requests_Exception
 */
public function testOffsetSet1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($key === \null) == true (line 69)
    // throw new \Requests_Exception('Object is a dictionary, not a list', 'invalidset') -> exception (line 70)

    $actual = $this->requests_Utility_CaseInsensitiveDictionary->offsetSet($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOffsetUnset0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->requests_Utility_CaseInsensitiveDictionary->offsetUnset($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIterator0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Utility_CaseInsensitiveDictionary->getIterator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetAll0()
{
    // TODO: Your mock expectations here

    $actual = $this->requests_Utility_CaseInsensitiveDictionary->getAll();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
