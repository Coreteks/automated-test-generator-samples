<?php

namespace tests\Illuminate\Http;

use Illuminate\Http\JsonResponse;
use Mockery as m;

class JsonResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_data = null;
/**
* @var mixed
*/
protected $_status = null;
/**
* @var mixed
*/
protected $_headers = null;
/**
* @var mixed
*/
protected $_options = null;
/**
* @var \Illuminate\Http\JsonResponse
*/
protected $jsonResponse;

public function setUp()
{
    parent::setUp();

    $this->_data = null;
    $this->_status = null;
    $this->_headers = null;
    $this->_options = null;
    $this->jsonResponse = new \Illuminate\Http\JsonResponse($this->_data, $this->_status, $this->_headers, $this->_options);
}

public function testWithCallback0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->jsonResponse->withCallback($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetData0()
{
    $assoc = m::mock('UntypedParameter_assoc_');
    $depth = m::mock('UntypedParameter_depth_');

    // TODO: Your mock expectations here

    $actual = $this->jsonResponse->getData($assoc, $depth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetData0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data instanceof \Illuminate\Contracts\Support\Jsonable) == false (line 64)
    // if ($data instanceof \JsonSerializable) == false (line 66)
    // if ($data instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 68)
    // if (!$this->hasValidJson(json_last_error())) == false (line 74)

    $actual = $this->jsonResponse->setData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetData1()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data instanceof \Illuminate\Contracts\Support\Jsonable) == false (line 64)
    // if ($data instanceof \JsonSerializable) == false (line 66)
    // if ($data instanceof \Illuminate\Contracts\Support\Arrayable) == false (line 68)
    // if (!$this->hasValidJson(json_last_error())) == true (line 74)
    // throw new \InvalidArgumentException(json_last_error_msg()) -> exception (line 75)

    $actual = $this->jsonResponse->setData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetData2()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data instanceof \Illuminate\Contracts\Support\Jsonable) == false (line 64)
    // if ($data instanceof \JsonSerializable) == false (line 66)
    // if ($data instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 68)
    // if (!$this->hasValidJson(json_last_error())) == false (line 74)

    $actual = $this->jsonResponse->setData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetData3()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data instanceof \Illuminate\Contracts\Support\Jsonable) == false (line 64)
    // if ($data instanceof \JsonSerializable) == false (line 66)
    // if ($data instanceof \Illuminate\Contracts\Support\Arrayable) == true (line 68)
    // if (!$this->hasValidJson(json_last_error())) == true (line 74)
    // throw new \InvalidArgumentException(json_last_error_msg()) -> exception (line 75)

    $actual = $this->jsonResponse->setData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetData4()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data instanceof \Illuminate\Contracts\Support\Jsonable) == false (line 64)
    // if ($data instanceof \JsonSerializable) == true (line 66)
    // if (!$this->hasValidJson(json_last_error())) == false (line 74)

    $actual = $this->jsonResponse->setData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetData5()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data instanceof \Illuminate\Contracts\Support\Jsonable) == false (line 64)
    // if ($data instanceof \JsonSerializable) == true (line 66)
    // if (!$this->hasValidJson(json_last_error())) == true (line 74)
    // throw new \InvalidArgumentException(json_last_error_msg()) -> exception (line 75)

    $actual = $this->jsonResponse->setData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetData6()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data instanceof \Illuminate\Contracts\Support\Jsonable) == true (line 64)
    // if (!$this->hasValidJson(json_last_error())) == false (line 74)

    $actual = $this->jsonResponse->setData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testSetData7()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($data instanceof \Illuminate\Contracts\Support\Jsonable) == true (line 64)
    // if (!$this->hasValidJson(json_last_error())) == true (line 74)
    // throw new \InvalidArgumentException(json_last_error_msg()) -> exception (line 75)

    $actual = $this->jsonResponse->setData($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetEncodingOptions0()
{
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->jsonResponse->setEncodingOptions($options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasEncodingOption0()
{
    $option = m::mock('UntypedParameter_option_');

    // TODO: Your mock expectations here

    $actual = $this->jsonResponse->hasEncodingOption($option);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
