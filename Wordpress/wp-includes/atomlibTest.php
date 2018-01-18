<?php

namespace tests;

use AtomParser;
use Mockery as m;

class AtomParserTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \AtomParser
*/
protected $atomParser;

public function setUp()
{
    parent::setUp();

    $this->atomParser = new \AtomParser();
}

public function testAtomParser0()
{
    // TODO: Your mock expectations here

    $actual = $this->atomParser->AtomParser();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMap_attrs0()
{
    $k = m::mock('UntypedParameter_k_');
    $v = m::mock('UntypedParameter_v_');

    // TODO: Your mock expectations here

    $actual = $this->atomParser->map_attrs($k, $v);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMap_xmlns0()
{
    $p = m::mock('UntypedParameter_p_');
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < \strlen($n[0])) == false (line 128)

    $actual = $this->atomParser->map_xmlns($p, $n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMap_xmlns1()
{
    $p = m::mock('UntypedParameter_p_');
    $n = m::mock('UntypedParameter_n_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < \strlen($n[0])) == true (line 128)

    $actual = $this->atomParser->map_xmlns($p, $n);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_p0()
{
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == false (line 135)

    $actual = $this->atomParser->_p($msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_p1()
{
    $msg = m::mock('UntypedParameter_msg_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->debug) == true (line 135)

    $actual = $this->atomParser->_p($msg);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError_handler0()
{
    $log_level = m::mock('UntypedParameter_log_level_');
    $log_text = m::mock('UntypedParameter_log_text_');
    $error_file = m::mock('UntypedParameter_error_file_');
    $error_line = m::mock('UntypedParameter_error_line_');

    // TODO: Your mock expectations here

    $actual = $this->atomParser->error_handler($log_level, $log_text, $error_file, $error_line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create_ns')) == false (line 150)
    // while ($data = \fread($fp, 4096)) == false (line 170)

    $actual = $this->atomParser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create_ns')) == false (line 150)
    // while ($data = \fread($fp, 4096)) == true (line 170)
    // if ($this->debug) == false (line 171)
    // if (!\xml_parse($parser, $data, \feof($fp))) == false (line 173)
    // while ($data = \fread($fp, 4096)) == false (line 170)

    $actual = $this->atomParser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create_ns')) == false (line 150)
    // while ($data = \fread($fp, 4096)) == true (line 170)
    // if ($this->debug) == false (line 171)
    // if (!\xml_parse($parser, $data, \feof($fp))) == true (line 173)

    $actual = $this->atomParser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create_ns')) == false (line 150)
    // while ($data = \fread($fp, 4096)) == true (line 170)
    // if ($this->debug) == true (line 171)
    // if (!\xml_parse($parser, $data, \feof($fp))) == false (line 173)
    // while ($data = \fread($fp, 4096)) == false (line 170)

    $actual = $this->atomParser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create_ns')) == false (line 150)
    // while ($data = \fread($fp, 4096)) == true (line 170)
    // if ($this->debug) == true (line 171)
    // if (!\xml_parse($parser, $data, \feof($fp))) == true (line 173)

    $actual = $this->atomParser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\function_exists('xml_parser_create_ns')) == true (line 150)

    $actual = $this->atomParser->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element0()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == false (line 249)
    // if ($tag == 'link') == false (line 261)
    // if ($tag == 'category') == false (line 263)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element1()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == false (line 249)
    // if ($tag == 'link') == false (line 261)
    // if ($tag == 'category') == true (line 263)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element2()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == false (line 249)
    // if ($tag == 'link') == true (line 261)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element3()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == true (line 249)
    // if (\in_array('src', \array_keys($attrs))) == false (line 256)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element4()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == true (line 249)
    // if (\in_array('src', \array_keys($attrs))) == true (line 256)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element5()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element6()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element7()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element8()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element9()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element10()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element11()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element12()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element13()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element14()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element15()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element16()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element17()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element18()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element19()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element20()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element21()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element22()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element23()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element24()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element25()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element26()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element27()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element28()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element29()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element30()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element31()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element32()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element33()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element34()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element35()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element36()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element37()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element38()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element39()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element40()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element41()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element42()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element43()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element44()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element45()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element46()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element47()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element48()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element49()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element50()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element51()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element52()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == false (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element53()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == false (line 249)
    // if ($tag == 'link') == false (line 261)
    // if ($tag == 'category') == false (line 263)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element54()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == false (line 249)
    // if ($tag == 'link') == false (line 261)
    // if ($tag == 'category') == true (line 263)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element55()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == false (line 249)
    // if ($tag == 'link') == true (line 261)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element56()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == true (line 249)
    // if (\in_array('src', \array_keys($attrs))) == false (line 256)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element57()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == true (line 249)
    // if (\in_array('src', \array_keys($attrs))) == true (line 256)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element58()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element59()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element60()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element61()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element62()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element63()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element64()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element65()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element66()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element67()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element68()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element69()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element70()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element71()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element72()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element73()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element74()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element75()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element76()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element77()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element78()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element79()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element80()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element81()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element82()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element83()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element84()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element85()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element86()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element87()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element88()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element89()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element90()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element91()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element92()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element93()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element94()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element95()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element96()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element97()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element98()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element99()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element100()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element101()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element102()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element103()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element104()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element105()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == false (line 196)
    // Case $this->NS . ':entry' == true (line 199)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element106()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == false (line 249)
    // if ($tag == 'link') == false (line 261)
    // if ($tag == 'category') == false (line 263)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element107()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == false (line 249)
    // if ($tag == 'link') == false (line 261)
    // if ($tag == 'category') == true (line 263)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element108()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == false (line 249)
    // if ($tag == 'link') == true (line 261)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element109()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == true (line 249)
    // if (\in_array('src', \array_keys($attrs))) == false (line 256)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element110()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == false (line 212)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || \in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) == true (line 249)
    // if (\in_array('src', \array_keys($attrs))) == true (line 256)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element111()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element112()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element113()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element114()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element115()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element116()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element117()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element118()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element119()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element120()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element121()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element122()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element123()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element124()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element125()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element126()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element127()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element128()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element129()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element130()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element131()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element132()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element133()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element134()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == false (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element135()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element136()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element137()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element138()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element139()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element140()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element141()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element142()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element143()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element144()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element145()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element146()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element147()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element148()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element149()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element150()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element151()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element152()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == false (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element153()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element154()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element155()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == false (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element156()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == false (line 239)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element157()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == false (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_element158()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');
    $attrs = m::mock('UntypedParameter_attrs_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 195)
    // Case $this->NS . ':feed' == true (line 196)
    // if (!empty($this->in_content)) == true (line 212)
    // if ($this->is_html || $this->is_text) == true (line 216)
    // if (\strlen($attrs_str) > 0) == true (line 228)
    // if (!$this->is_declared_content_ns($with_prefix[0])) == true (line 234)
    // if (\count($this->content_ns_decls) > 0) == true (line 239)
    // if (\strlen($xmlns_str) > 0) == true (line 242)

    $actual = $this->atomParser->start_element($parser, $name, $attrs);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element0()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == false (line 277)
    // if ($name == $this->NS . ':entry') == false (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element1()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == false (line 277)
    // if ($name == $this->NS . ':entry') == true (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element2()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == false (line 280)
    // if ($this->in_content[$ccount - 1][0] == $tag && $this->in_content[$ccount - 1][1] == $this->depth) == false (line 302)
    // if ($name == $this->NS . ':entry') == false (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element3()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == false (line 280)
    // if ($this->in_content[$ccount - 1][0] == $tag && $this->in_content[$ccount - 1][1] == $this->depth) == false (line 302)
    // if ($name == $this->NS . ':entry') == true (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element4()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == false (line 280)
    // if ($this->in_content[$ccount - 1][0] == $tag && $this->in_content[$ccount - 1][1] == $this->depth) == true (line 302)
    // if ($name == $this->NS . ':entry') == false (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element5()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == false (line 280)
    // if ($this->in_content[$ccount - 1][0] == $tag && $this->in_content[$ccount - 1][1] == $this->depth) == true (line 302)
    // if ($name == $this->NS . ':entry') == true (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element6()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == false (line 296)
    // if ($name == $this->NS . ':entry') == false (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element7()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == false (line 296)
    // if ($name == $this->NS . ':entry') == true (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element8()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == true (line 296)
    // if ($name == $this->NS . ':entry') == false (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element9()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == true (line 296)
    // if ($name == $this->NS . ':entry') == true (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element10()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\count($c) == 3) == false (line 286)
    // if ($this->is_xhtml || $this->is_text) == false (line 289)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == false (line 296)
    // if ($name == $this->NS . ':entry') == false (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element11()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\count($c) == 3) == false (line 286)
    // if ($this->is_xhtml || $this->is_text) == false (line 289)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == false (line 296)
    // if ($name == $this->NS . ':entry') == true (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element12()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\count($c) == 3) == false (line 286)
    // if ($this->is_xhtml || $this->is_text) == false (line 289)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == true (line 296)
    // if ($name == $this->NS . ':entry') == false (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element13()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\count($c) == 3) == false (line 286)
    // if ($this->is_xhtml || $this->is_text) == false (line 289)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == true (line 296)
    // if ($name == $this->NS . ':entry') == true (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element14()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\count($c) == 3) == false (line 286)
    // if ($this->is_xhtml || $this->is_text) == true (line 289)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == false (line 296)
    // if ($name == $this->NS . ':entry') == false (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element15()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\count($c) == 3) == false (line 286)
    // if ($this->is_xhtml || $this->is_text) == true (line 289)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == false (line 296)
    // if ($name == $this->NS . ':entry') == true (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element16()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\count($c) == 3) == false (line 286)
    // if ($this->is_xhtml || $this->is_text) == true (line 289)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == true (line 296)
    // if ($name == $this->NS . ':entry') == false (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element17()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\count($c) == 3) == false (line 286)
    // if ($this->is_xhtml || $this->is_text) == true (line 289)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == true (line 296)
    // if ($name == $this->NS . ':entry') == true (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element18()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\count($c) == 3) == true (line 286)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == false (line 296)
    // if ($name == $this->NS . ':entry') == false (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element19()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\count($c) == 3) == true (line 286)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == false (line 296)
    // if ($name == $this->NS . ':entry') == true (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element20()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\count($c) == 3) == true (line 286)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == true (line 296)
    // if ($name == $this->NS . ':entry') == false (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_element21()
{
    $parser = m::mock('UntypedParameter_parser_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 277)
    // if ($this->in_content[0][0] == $tag && $this->in_content[0][1] == $this->depth) == true (line 280)
    // if (\count($c) == 3) == true (line 286)
    // if (\in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) == true (line 296)
    // if ($name == $this->NS . ':entry') == true (line 316)

    $actual = $this->atomParser->end_element($parser, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_ns0()
{
    $parser = m::mock('UntypedParameter_parser_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $uri = m::mock('UntypedParameter_uri_');

    // TODO: Your mock expectations here

    $actual = $this->atomParser->start_ns($parser, $prefix, $uri);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_ns0()
{
    $parser = m::mock('UntypedParameter_parser_');
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    $actual = $this->atomParser->end_ns($parser, $prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCdata0()
{
    $parser = m::mock('UntypedParameter_parser_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == false (line 335)

    $actual = $this->atomParser->cdata($parser, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCdata1()
{
    $parser = m::mock('UntypedParameter_parser_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->in_content)) == true (line 335)

    $actual = $this->atomParser->cdata($parser, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_default0()
{
    $parser = m::mock('UntypedParameter_parser_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->atomParser->_default($parser, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix0()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == false (line 352)
    // if ($attr) == false (line 364)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix1()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == false (line 352)
    // if ($attr) == false (line 364)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix2()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == false (line 352)
    // if ($attr) == false (line 364)
    // if (\strlen($mapping[0]) == 0) == false (line 369)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix3()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == false (line 352)
    // if ($attr) == false (line 364)
    // if (\strlen($mapping[0]) == 0) == true (line 369)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix4()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == false (line 352)
    // if ($attr) == true (line 364)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix5()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($attr) == false (line 364)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix6()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($attr) == false (line 364)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix7()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($attr) == false (line 364)
    // if (\strlen($mapping[0]) == 0) == false (line 369)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix8()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($attr) == false (line 364)
    // if (\strlen($mapping[0]) == 0) == true (line 369)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix9()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($attr) == true (line 364)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix10()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($attr) == false (line 364)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix11()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($attr) == false (line 364)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix12()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($attr) == false (line 364)
    // if (\strlen($mapping[0]) == 0) == false (line 369)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix13()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($attr) == false (line 364)
    // if (\strlen($mapping[0]) == 0) == true (line 369)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix14()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($attr) == true (line 364)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix15()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($mapping[1] == $ns && \strlen($mapping[0]) > 0) == false (line 357)
    // if ($attr) == false (line 364)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix16()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($mapping[1] == $ns && \strlen($mapping[0]) > 0) == false (line 357)
    // if ($attr) == false (line 364)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix17()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($mapping[1] == $ns && \strlen($mapping[0]) > 0) == false (line 357)
    // if ($attr) == false (line 364)
    // if (\strlen($mapping[0]) == 0) == false (line 369)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix18()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($mapping[1] == $ns && \strlen($mapping[0]) > 0) == false (line 357)
    // if ($attr) == false (line 364)
    // if (\strlen($mapping[0]) == 0) == true (line 369)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix19()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($mapping[1] == $ns && \strlen($mapping[0]) > 0) == false (line 357)
    // if ($attr) == true (line 364)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNs_to_prefix20()
{
    $qname = m::mock('UntypedParameter_qname_');
    $attr = m::mock('UntypedParameter_attr_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($components)) == true (line 352)
    // if ($mapping[1] == $ns && \strlen($mapping[0]) > 0) == true (line 357)

    $actual = $this->atomParser->ns_to_prefix($qname, $attr);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_declared_content_ns0()
{
    $new_mapping = m::mock('UntypedParameter_new_mapping_');

    // TODO: Your mock expectations here

    $actual = $this->atomParser->is_declared_content_ns($new_mapping);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_declared_content_ns1()
{
    $new_mapping = m::mock('UntypedParameter_new_mapping_');

    // TODO: Your mock expectations here

    $actual = $this->atomParser->is_declared_content_ns($new_mapping);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_declared_content_ns2()
{
    $new_mapping = m::mock('UntypedParameter_new_mapping_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($new_mapping == $mapping) == false (line 380)

    $actual = $this->atomParser->is_declared_content_ns($new_mapping);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_declared_content_ns3()
{
    $new_mapping = m::mock('UntypedParameter_new_mapping_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($new_mapping == $mapping) == true (line 380)

    $actual = $this->atomParser->is_declared_content_ns($new_mapping);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testXml_escape0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->atomParser->xml_escape($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
