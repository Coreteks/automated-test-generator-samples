<?php

namespace tests;

use CI_Config;
use CI_URI;
use Mockery as m;

class CI_URITest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_config;
/**
* @var \CI_URI
*/
protected $cI_URI;

public function setUp()
{
    parent::setUp();

    $this->_config = m::mock(\CI_Config::class);
    $this->cI_URI = new \CI_URI($this->_config);
}

public function testFilter_uri0()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($str) && !empty($this->_permitted_uri_chars) && !\preg_match('/^[' . $this->_permitted_uri_chars . ']+$/i' . (\UTF8_ENABLED ? 'u' : ''), $str)) == false (line 346)

    $actual = $this->cI_URI->filter_uri($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_uri1()
{
    $str = m::mock('UntypedParameter_str_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($str) && !empty($this->_permitted_uri_chars) && !\preg_match('/^[' . $this->_permitted_uri_chars . ']+$/i' . (\UTF8_ENABLED ? 'u' : ''), $str)) == true (line 346)

    $actual = $this->cI_URI->filter_uri($str);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSegment0()
{
    $n = m::mock('UntypedParameter_n_');
    $no_result = m::mock('UntypedParameter_no_result_');

    // TODO: Your mock expectations here

    $actual = $this->cI_URI->segment($n, $no_result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRsegment0()
{
    $n = m::mock('UntypedParameter_n_');
    $no_result = m::mock('UntypedParameter_no_result_');

    // TODO: Your mock expectations here

    $actual = $this->cI_URI->rsegment($n, $no_result);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUri_to_assoc0()
{
    $n = m::mock('UntypedParameter_n_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->cI_URI->uri_to_assoc($n, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRuri_to_assoc0()
{
    $n = m::mock('UntypedParameter_n_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->cI_URI->ruri_to_assoc($n, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssoc_to_uri0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    $actual = $this->cI_URI->assoc_to_uri($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAssoc_to_uri1()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    $actual = $this->cI_URI->assoc_to_uri($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlash_segment0()
{
    $n = m::mock('UntypedParameter_n_');
    $where = m::mock('UntypedParameter_where_');

    // TODO: Your mock expectations here

    $actual = $this->cI_URI->slash_segment($n, $where);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlash_rsegment0()
{
    $n = m::mock('UntypedParameter_n_');
    $where = m::mock('UntypedParameter_where_');

    // TODO: Your mock expectations here

    $actual = $this->cI_URI->slash_rsegment($n, $where);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSegment_array0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_URI->segment_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRsegment_array0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_URI->rsegment_array();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTotal_segments0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_URI->total_segments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTotal_rsegments0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_URI->total_rsegments();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUri_string0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_URI->uri_string();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRuri_string0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_URI->ruri_string();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
