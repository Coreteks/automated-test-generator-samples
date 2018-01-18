<?php

namespace tests;

use CI_Config;
use Mockery as m;

class CI_ConfigTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Config
*/
protected $cI_Config;

public function setUp()
{
    parent::setUp();

    $this->cI_Config = new \CI_Config();
}

public function testLoad0()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == false (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == true (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($loaded === \TRUE) == true (line 176)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad3()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == false (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad4()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == true (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad5()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($loaded === \TRUE) == true (line 176)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad6()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == false (line 148)
    // if ($use_sections === \TRUE) == false (line 158)
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == false (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad7()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == false (line 148)
    // if ($use_sections === \TRUE) == false (line 158)
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == true (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad8()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == false (line 148)
    // if ($use_sections === \TRUE) == false (line 158)
    // if ($loaded === \TRUE) == true (line 176)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad9()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == false (line 148)
    // if ($use_sections === \TRUE) == true (line 158)
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == false (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad10()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == false (line 148)
    // if ($use_sections === \TRUE) == true (line 158)
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == true (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad11()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == false (line 148)
    // if ($use_sections === \TRUE) == true (line 158)
    // if ($loaded === \TRUE) == true (line 176)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad12()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == true (line 148)
    // if ($fail_gracefully === \TRUE) == false (line 150)
    // if ($use_sections === \TRUE) == false (line 158)
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == false (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad13()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == true (line 148)
    // if ($fail_gracefully === \TRUE) == false (line 150)
    // if ($use_sections === \TRUE) == false (line 158)
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == true (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad14()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == true (line 148)
    // if ($fail_gracefully === \TRUE) == false (line 150)
    // if ($use_sections === \TRUE) == false (line 158)
    // if ($loaded === \TRUE) == true (line 176)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad15()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == true (line 148)
    // if ($fail_gracefully === \TRUE) == false (line 150)
    // if ($use_sections === \TRUE) == true (line 158)
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == false (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad16()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == true (line 148)
    // if ($fail_gracefully === \TRUE) == false (line 150)
    // if ($use_sections === \TRUE) == true (line 158)
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == true (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad17()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == true (line 148)
    // if ($fail_gracefully === \TRUE) == false (line 150)
    // if ($use_sections === \TRUE) == true (line 158)
    // if ($loaded === \TRUE) == true (line 176)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad18()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == false (line 141)
    // if (!isset($config) or !\is_array($config)) == true (line 148)
    // if ($fail_gracefully === \TRUE) == true (line 150)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad19()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == true (line 141)
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == false (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad20()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == true (line 141)
    // if ($loaded === \TRUE) == false (line 176)
    // if ($fail_gracefully === \TRUE) == true (line 180)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad21()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == false (line 136)
    // if (!\file_exists($file_path)) == true (line 141)
    // if ($loaded === \TRUE) == true (line 176)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad22()
{
    $file = m::mock('UntypedParameter_file_');
    $use_sections = m::mock('UntypedParameter_use_sections_');
    $fail_gracefully = m::mock('UntypedParameter_fail_gracefully_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($file_path, $this->is_loaded, \TRUE)) == true (line 136)

    $actual = $this->cI_Config->load($file, $use_sections, $fail_gracefully);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testItem0()
{
    $item = m::mock('UntypedParameter_item_');
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($index == '') == false (line 199)

    $actual = $this->cI_Config->item($item, $index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testItem1()
{
    $item = m::mock('UntypedParameter_item_');
    $index = m::mock('UntypedParameter_index_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($index == '') == true (line 199)

    $actual = $this->cI_Config->item($item, $index);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlash_item0()
{
    $item = m::mock('UntypedParameter_item_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->config[$item])) == false (line 217)
    // if (\trim($this->config[$item]) === '') == false (line 221)

    $actual = $this->cI_Config->slash_item($item);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlash_item1()
{
    $item = m::mock('UntypedParameter_item_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->config[$item])) == false (line 217)
    // if (\trim($this->config[$item]) === '') == true (line 221)

    $actual = $this->cI_Config->slash_item($item);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlash_item2()
{
    $item = m::mock('UntypedParameter_item_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->config[$item])) == true (line 217)

    $actual = $this->cI_Config->slash_item($item);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == false (line 246)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == false (line 266)
    // if (\strpos($uri, '?') === \FALSE) == false (line 284)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url1()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == false (line 246)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == false (line 266)
    // if (\strpos($uri, '?') === \FALSE) == true (line 284)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url2()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == false (line 246)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == true (line 266)
    // if ($suffix !== '') == false (line 270)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url3()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == false (line 246)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == true (line 266)
    // if ($suffix !== '') == true (line 270)
    // if (($offset = \strpos($uri, '?')) !== \FALSE) == false (line 272)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url4()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == false (line 246)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == true (line 266)
    // if ($suffix !== '') == true (line 270)
    // if (($offset = \strpos($uri, '?')) !== \FALSE) == true (line 272)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url5()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == false (line 246)
    // if (empty($uri)) == true (line 259)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url6()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 246)
    // if ($protocol === '') == false (line 249)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == false (line 266)
    // if (\strpos($uri, '?') === \FALSE) == false (line 284)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url7()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 246)
    // if ($protocol === '') == false (line 249)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == false (line 266)
    // if (\strpos($uri, '?') === \FALSE) == true (line 284)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url8()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 246)
    // if ($protocol === '') == false (line 249)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == true (line 266)
    // if ($suffix !== '') == false (line 270)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url9()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 246)
    // if ($protocol === '') == false (line 249)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == true (line 266)
    // if ($suffix !== '') == true (line 270)
    // if (($offset = \strpos($uri, '?')) !== \FALSE) == false (line 272)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url10()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 246)
    // if ($protocol === '') == false (line 249)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == true (line 266)
    // if ($suffix !== '') == true (line 270)
    // if (($offset = \strpos($uri, '?')) !== \FALSE) == true (line 272)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url11()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 246)
    // if ($protocol === '') == false (line 249)
    // if (empty($uri)) == true (line 259)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url12()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 246)
    // if ($protocol === '') == true (line 249)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == false (line 266)
    // if (\strpos($uri, '?') === \FALSE) == false (line 284)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url13()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 246)
    // if ($protocol === '') == true (line 249)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == false (line 266)
    // if (\strpos($uri, '?') === \FALSE) == true (line 284)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url14()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 246)
    // if ($protocol === '') == true (line 249)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == true (line 266)
    // if ($suffix !== '') == false (line 270)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url15()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 246)
    // if ($protocol === '') == true (line 249)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == true (line 266)
    // if ($suffix !== '') == true (line 270)
    // if (($offset = \strpos($uri, '?')) !== \FALSE) == false (line 272)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url16()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 246)
    // if ($protocol === '') == true (line 249)
    // if (empty($uri)) == false (line 259)
    // if ($this->item('enable_query_strings') === \FALSE) == true (line 266)
    // if ($suffix !== '') == true (line 270)
    // if (($offset = \strpos($uri, '?')) !== \FALSE) == true (line 272)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSite_url17()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 246)
    // if ($protocol === '') == true (line 249)
    // if (empty($uri)) == true (line 259)

    $actual = $this->cI_Config->site_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBase_url0()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == false (line 309)

    $actual = $this->cI_Config->base_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBase_url1()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 309)
    // if ($protocol === '') == false (line 312)

    $actual = $this->cI_Config->base_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBase_url2()
{
    $uri = m::mock('UntypedParameter_uri_');
    $protocol = m::mock('UntypedParameter_protocol_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($protocol)) == true (line 309)
    // if ($protocol === '') == true (line 312)

    $actual = $this->cI_Config->base_url($uri, $protocol);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_item0()
{
    $item = m::mock('UntypedParameter_item_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Config->set_item($item, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
