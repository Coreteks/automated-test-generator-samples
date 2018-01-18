<?php

namespace tests;

use Mockery as m;
use Text_Diff_Renderer_inline;

class Text_Diff_Renderer_inlineTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Text_Diff_Renderer_inline
*/
protected $text_Diff_Renderer_inline;

public function setUp()
{
    parent::setUp();

    $this->text_Diff_Renderer_inline = new \Text_Diff_Renderer_inline();
}

public function test_blockHeader0()
{
    $xbeg = m::mock('UntypedParameter_xbeg_');
    $xlen = m::mock('UntypedParameter_xlen_');
    $ybeg = m::mock('UntypedParameter_ybeg_');
    $ylen = m::mock('UntypedParameter_ylen_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer_inline->_blockHeader($xbeg, $xlen, $ybeg, $ylen);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_startBlock0()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer_inline->_startBlock($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_lines0()
{
    $lines = m::mock('UntypedParameter_lines_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == false (line 105)
    // if ($this->_split_level == 'lines') == false (line 109)

    $actual = $this->text_Diff_Renderer_inline->_lines($lines, $prefix, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_lines1()
{
    $lines = m::mock('UntypedParameter_lines_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == false (line 105)
    // if ($this->_split_level == 'lines') == true (line 109)

    $actual = $this->text_Diff_Renderer_inline->_lines($lines, $prefix, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_lines2()
{
    $lines = m::mock('UntypedParameter_lines_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == true (line 105)
    // if ($this->_split_level == 'lines') == false (line 109)

    $actual = $this->text_Diff_Renderer_inline->_lines($lines, $prefix, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_lines3()
{
    $lines = m::mock('UntypedParameter_lines_');
    $prefix = m::mock('UntypedParameter_prefix_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == true (line 105)
    // if ($this->_split_level == 'lines') == true (line 109)

    $actual = $this->text_Diff_Renderer_inline->_lines($lines, $prefix, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_added0()
{
    $lines = m::mock('UntypedParameter_lines_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer_inline->_added($lines);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_deleted0()
{
    $lines = m::mock('UntypedParameter_lines_');
    $words = m::mock('UntypedParameter_words_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer_inline->_deleted($lines, $words);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed0()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_split_level == 'characters') == false (line 135)
    // if ($this->_split_level == 'words') == false (line 141)
    // if ($this->_split_characters) == false (line 159)

    $actual = $this->text_Diff_Renderer_inline->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed1()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_split_level == 'characters') == false (line 135)
    // if ($this->_split_level == 'words') == false (line 141)
    // if ($this->_split_characters) == true (line 159)

    $actual = $this->text_Diff_Renderer_inline->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed2()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_split_level == 'characters') == false (line 135)
    // if ($this->_split_level == 'words') == true (line 141)
    // while ($orig[0] !== \false && $final[0] !== \false && \substr($orig[0], 0, 1) == ' ' && \substr($final[0], 0, 1) == ' ') == false (line 143)

    $actual = $this->text_Diff_Renderer_inline->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed3()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_split_level == 'characters') == false (line 135)
    // if ($this->_split_level == 'words') == true (line 141)
    // while ($orig[0] !== \false && $final[0] !== \false && \substr($orig[0], 0, 1) == ' ' && \substr($final[0], 0, 1) == ' ') == true (line 143)
    // while ($orig[0] !== \false && $final[0] !== \false && \substr($orig[0], 0, 1) == ' ' && \substr($final[0], 0, 1) == ' ') == false (line 143)

    $actual = $this->text_Diff_Renderer_inline->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed4()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_split_level == 'characters') == true (line 135)

    $actual = $this->text_Diff_Renderer_inline->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_splitOnWords0()
{
    $string = m::mock('UntypedParameter_string_');
    $newlineEscape = m::mock('UntypedParameter_newlineEscape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $length) == false (line 190)

    $actual = $this->text_Diff_Renderer_inline->_splitOnWords($string, $newlineEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_splitOnWords1()
{
    $string = m::mock('UntypedParameter_string_');
    $newlineEscape = m::mock('UntypedParameter_newlineEscape_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while ($pos < $length) == true (line 190)
    // while ($pos < $length) == false (line 190)

    $actual = $this->text_Diff_Renderer_inline->_splitOnWords($string, $newlineEscape);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_encode0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->text_Diff_Renderer_inline->_encode($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
