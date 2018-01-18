<?php

namespace tests;

use Mockery as m;
use WP_Error;

class WP_ErrorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_code = null;
/**
* @var mixed
*/
protected $_message = null;
/**
* @var mixed
*/
protected $_data = null;
/**
* @var \WP_Error
*/
protected $wP_Error;

public function setUp()
{
    parent::setUp();

    $this->_code = null;
    $this->_message = null;
    $this->_data = null;
    $this->wP_Error = new \WP_Error($this->_code, $this->_message, $this->_data);
}

public function testGet_error_codes0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->errors)) == false (line 74)

    $actual = $this->wP_Error->get_error_codes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_codes1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->errors)) == true (line 74)

    $actual = $this->wP_Error->get_error_codes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_code0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($codes)) == false (line 91)

    $actual = $this->wP_Error->get_error_code();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_code1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($codes)) == true (line 91)

    $actual = $this->wP_Error->get_error_code();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_messages0()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == false (line 108)
    // if (isset($this->errors[$code])) == false (line 117)

    $actual = $this->wP_Error->get_error_messages($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_messages1()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == false (line 108)
    // if (isset($this->errors[$code])) == true (line 117)

    $actual = $this->wP_Error->get_error_messages($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_messages2()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == true (line 108)

    $actual = $this->wP_Error->get_error_messages($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_messages3()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == true (line 108)

    $actual = $this->wP_Error->get_error_messages($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_message0()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == false (line 136)
    // if (empty($messages)) == false (line 140)

    $actual = $this->wP_Error->get_error_message($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_message1()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == false (line 136)
    // if (empty($messages)) == true (line 140)

    $actual = $this->wP_Error->get_error_message($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_message2()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == true (line 136)
    // if (empty($messages)) == false (line 140)

    $actual = $this->wP_Error->get_error_message($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_message3()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == true (line 136)
    // if (empty($messages)) == true (line 140)

    $actual = $this->wP_Error->get_error_message($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_data0()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == false (line 155)
    // if (isset($this->error_data[$code])) == false (line 159)

    $actual = $this->wP_Error->get_error_data($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_data1()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == false (line 155)
    // if (isset($this->error_data[$code])) == true (line 159)

    $actual = $this->wP_Error->get_error_data($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_data2()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == true (line 155)
    // if (isset($this->error_data[$code])) == false (line 159)

    $actual = $this->wP_Error->get_error_data($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_error_data3()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == true (line 155)
    // if (isset($this->error_data[$code])) == true (line 159)

    $actual = $this->wP_Error->get_error_data($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $code = m::mock('UntypedParameter_code_');
    $message = m::mock('UntypedParameter_message_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == false (line 175)

    $actual = $this->wP_Error->add($code, $message, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd1()
{
    $code = m::mock('UntypedParameter_code_');
    $message = m::mock('UntypedParameter_message_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($data)) == true (line 175)

    $actual = $this->wP_Error->add($code, $message, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_data0()
{
    $data = m::mock('UntypedParameter_data_');
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == false (line 191)

    $actual = $this->wP_Error->add_data($data, $code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_data1()
{
    $data = m::mock('UntypedParameter_data_');
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($code)) == true (line 191)

    $actual = $this->wP_Error->add_data($data, $code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove0()
{
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Error->remove($code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
