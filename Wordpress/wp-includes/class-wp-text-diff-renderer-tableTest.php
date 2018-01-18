<?php

namespace tests;

use Mockery as m;
use WP_Text_Diff_Renderer_Table;

class WP_Text_Diff_Renderer_TableTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \WP_Text_Diff_Renderer_Table
*/
protected $wP_Text_Diff_Renderer_Table;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->wP_Text_Diff_Renderer_Table = new \WP_Text_Diff_Renderer_Table($this->_params);
}

public function test_startBlock0()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Text_Diff_Renderer_Table->_startBlock($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_lines0()
{
    $lines = m::mock('UntypedParameter_lines_');
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Text_Diff_Renderer_Table->_lines($lines, $prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddedLine0()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Text_Diff_Renderer_Table->addedLine($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDeletedLine0()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Text_Diff_Renderer_Table->deletedLine($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContextLine0()
{
    $line = m::mock('UntypedParameter_line_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Text_Diff_Renderer_Table->contextLine($line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEmptyLine0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Text_Diff_Renderer_Table->emptyLine();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_added0()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Text_Diff_Renderer_Table->_added($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_added1()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == false (line 143)
    // if ($this->_show_split_view) == false (line 162)

    $actual = $this->wP_Text_Diff_Renderer_Table->_added($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_added2()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == false (line 143)
    // if ($this->_show_split_view) == true (line 162)

    $actual = $this->wP_Text_Diff_Renderer_Table->_added($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_added3()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == true (line 143)
    // if ($this->_show_split_view) == false (line 162)

    $actual = $this->wP_Text_Diff_Renderer_Table->_added($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_added4()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == true (line 143)
    // if ($this->_show_split_view) == true (line 162)

    $actual = $this->wP_Text_Diff_Renderer_Table->_added($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_deleted0()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Text_Diff_Renderer_Table->_deleted($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_deleted1()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == false (line 181)
    // if ($this->_show_split_view) == false (line 187)

    $actual = $this->wP_Text_Diff_Renderer_Table->_deleted($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_deleted2()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == false (line 181)
    // if ($this->_show_split_view) == true (line 187)

    $actual = $this->wP_Text_Diff_Renderer_Table->_deleted($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_deleted3()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == true (line 181)
    // if ($this->_show_split_view) == false (line 187)

    $actual = $this->wP_Text_Diff_Renderer_Table->_deleted($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_deleted4()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == true (line 181)
    // if ($this->_show_split_view) == true (line 187)

    $actual = $this->wP_Text_Diff_Renderer_Table->_deleted($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_context0()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Text_Diff_Renderer_Table->_context($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_context1()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == false (line 206)
    // if ($this->_show_split_view) == false (line 212)

    $actual = $this->wP_Text_Diff_Renderer_Table->_context($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_context2()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == false (line 206)
    // if ($this->_show_split_view) == true (line 212)

    $actual = $this->wP_Text_Diff_Renderer_Table->_context($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_context3()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == true (line 206)
    // if ($this->_show_split_view) == false (line 212)

    $actual = $this->wP_Text_Diff_Renderer_Table->_context($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_context4()
{
    $lines = m::mock('UntypedParameter_lines_');
    $encode = m::mock('UntypedParameter_encode_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encode) == true (line 206)
    // if ($this->_show_split_view) == true (line 212)

    $actual = $this->wP_Text_Diff_Renderer_Table->_context($lines, $encode);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed0()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed1()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed2()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed3()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed4()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed5()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed6()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed7()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed8()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed9()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed10()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed11()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed12()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed13()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed14()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed15()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed16()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed17()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed18()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed19()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed20()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed21()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed22()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed23()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed24()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed25()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed26()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed27()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed28()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed29()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed30()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed31()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed32()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed33()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed34()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed35()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed36()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed37()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == true (line 277)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed38()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed39()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed40()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed41()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed42()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed43()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed44()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed45()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed46()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed47()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed48()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed49()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed50()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed51()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed52()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed53()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed54()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed55()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed56()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed57()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed58()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed59()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed60()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed61()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed62()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed63()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed64()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed65()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed66()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed67()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed68()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed69()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed70()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed71()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed72()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed73()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed74()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed75()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == false (line 251)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == true (line 277)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed76()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed77()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed78()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed79()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed80()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed81()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed82()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed83()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed84()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed85()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed86()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed87()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed88()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed89()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed90()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed91()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed92()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed93()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed94()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed95()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed96()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed97()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed98()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed99()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed100()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed101()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed102()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed103()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed104()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed105()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed106()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed107()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed108()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed109()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed110()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed111()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed112()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed113()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == false (line 257)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == true (line 277)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed114()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed115()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed116()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed117()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed118()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed119()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed120()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed121()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed122()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed123()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed124()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed125()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed126()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed127()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed128()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed129()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed130()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed131()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed132()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed133()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed134()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed135()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed136()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed137()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed138()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed139()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed140()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed141()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed142()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed143()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed144()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed145()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed146()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed147()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed148()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed149()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed150()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed151()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == false (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == true (line 277)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed152()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed153()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed154()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed155()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed156()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed157()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed158()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed159()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed160()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed161()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed162()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed163()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed164()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == false (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed165()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed166()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed167()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed168()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed169()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed170()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed171()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed172()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed173()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed174()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed175()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed176()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == false (line 282)
    // if (isset($orig[$orig_rows[$row]])) == true (line 284)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed177()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed178()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed179()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed180()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == false (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed181()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed182()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed183()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed184()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == false (line 290)
    // if (isset($final[$final_rows[$row]])) == true (line 292)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed185()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == false (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed186()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == false (line 300)
    // if ($this->_show_split_view) == true (line 303)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed187()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == false (line 298)
    // if ($final_rows[$row] < 0) == true (line 300)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed188()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == false (line 277)
    // if (isset($orig_diffs[$orig_rows[$row]])) == true (line 282)
    // if (isset($final_diffs[$final_rows[$row]])) == true (line 290)
    // if ($orig_rows[$row] < 0) == true (line 298)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_changed189()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_numeric($o) && \is_numeric($f)) == true (line 251)
    // if (\preg_match_all('!(<ins>.*?</ins>|<del>.*?</del>)!', $diff, $diff_matches)) == true (line 257)
    // if ($diff_ratio > $this->_diff_threshold) == true (line 264)
    // if ($orig_rows[$row] < 0 && $final_rows[$row] < 0) == true (line 277)

    $actual = $this->wP_Text_Diff_Renderer_Table->_changed($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines0()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines1()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines2()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines3()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines4()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines5()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines6()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines7()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines8()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines9()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines10()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines11()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines12()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines13()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines14()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines15()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines16()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines17()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines18()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines19()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines20()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines21()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines22()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines23()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines24()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines25()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines26()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines27()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines28()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines29()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines30()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines31()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines32()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines33()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines34()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines35()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines36()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines37()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines38()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines39()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines40()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines41()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines42()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines43()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines44()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines45()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines46()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines47()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines48()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines49()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines50()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines51()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines52()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines53()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines54()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines55()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines56()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines57()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines58()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines59()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines60()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines61()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines62()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines63()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines64()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines65()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines66()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines67()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines68()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines69()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines70()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines71()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines72()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines73()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines74()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines75()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines76()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines77()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines78()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines79()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines80()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines81()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines82()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines83()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines84()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines85()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines86()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines87()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines88()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines89()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines90()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines91()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines92()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines93()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines94()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines95()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines96()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines97()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines98()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines99()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines100()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines101()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines102()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines103()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines104()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines105()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines106()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines107()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines108()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines109()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines110()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines111()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines112()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines113()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines114()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines115()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines116()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines117()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines118()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines119()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines120()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines121()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines122()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines123()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines124()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines125()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines126()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines127()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines128()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines129()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines130()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines131()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines132()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines133()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines134()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines135()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines136()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines137()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines138()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines139()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines140()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines141()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines142()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines143()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines144()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines145()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines146()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines147()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines148()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines149()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines150()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines151()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines152()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines153()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines154()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines155()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines156()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines157()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines158()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines159()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines160()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines161()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines162()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines163()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines164()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines165()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines166()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines167()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines168()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines169()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines170()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines171()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines172()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines173()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines174()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines175()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines176()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines177()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines178()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines179()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines180()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines181()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines182()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines183()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines184()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines185()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines186()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines187()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines188()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines189()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines190()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines191()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines192()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines193()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines194()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines195()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines196()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines197()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines198()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines199()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines200()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines201()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines202()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines203()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines204()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines205()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines206()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines207()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines208()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines209()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines210()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines211()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines212()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines213()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines214()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines215()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines216()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines217()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines218()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines219()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines220()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines221()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines222()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines223()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines224()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines225()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines226()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines227()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines228()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines229()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines230()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines231()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines232()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines233()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines234()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines235()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines236()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines237()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines238()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines239()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines240()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines241()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines242()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines243()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines244()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines245()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines246()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines247()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines248()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines249()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines250()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines251()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines252()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines253()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines254()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines255()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines256()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines257()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines258()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines259()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines260()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines261()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines262()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines263()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines264()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines265()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines266()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines267()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines268()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines269()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines270()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines271()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines272()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines273()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines274()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines275()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines276()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines277()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines278()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines279()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines280()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines281()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines282()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines283()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines284()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines285()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines286()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines287()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines288()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines289()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines290()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines291()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines292()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines293()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines294()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines295()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines296()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines297()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines298()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines299()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines300()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines301()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines302()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines303()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines304()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines305()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines306()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines307()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines308()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines309()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines310()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines311()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines312()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines313()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines314()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines315()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines316()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines317()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines318()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines319()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines320()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines321()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines322()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines323()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines324()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines325()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines326()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines327()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines328()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines329()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines330()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines331()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines332()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines333()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines334()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines335()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines336()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines337()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines338()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines339()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines340()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines341()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines342()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines343()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines344()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines345()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines346()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines347()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines348()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines349()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines350()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines351()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines352()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines353()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines354()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines355()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines356()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines357()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines358()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines359()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines360()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines361()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines362()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines363()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines364()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines365()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines366()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines367()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines368()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines369()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines370()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines371()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines372()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines373()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines374()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines375()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines376()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines377()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines378()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines379()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines380()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines381()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines382()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines383()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines384()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines385()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines386()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines387()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines388()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines389()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines390()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines391()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines392()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines393()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines394()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines395()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines396()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines397()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines398()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines399()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines400()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines401()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines402()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines403()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines404()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines405()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines406()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines407()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines408()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines409()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines410()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines411()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines412()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines413()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines414()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines415()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines416()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines417()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines418()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines419()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines420()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines421()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines422()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines423()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines424()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines425()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines426()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines427()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines428()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines429()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines430()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines431()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines432()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines433()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines434()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines435()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines436()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines437()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines438()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines439()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines440()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines441()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines442()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines443()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines444()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines445()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines446()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines447()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines448()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines449()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines450()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines451()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines452()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines453()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines454()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines455()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines456()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines457()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines458()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines459()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines460()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines461()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines462()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines463()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines464()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines465()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines466()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines467()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines468()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines469()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines470()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines471()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines472()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines473()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines474()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines475()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines476()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines477()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines478()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines479()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines480()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines481()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines482()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines483()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines484()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines485()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines486()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines487()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines488()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines489()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == false (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines490()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines491()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines492()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines493()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines494()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines495()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines496()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines497()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines498()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines499()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines500()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines501()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines502()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines503()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines504()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines505()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines506()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines507()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines508()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines509()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines510()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines511()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines512()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines513()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines514()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines515()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines516()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines517()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines518()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines519()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines520()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines521()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines522()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines523()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines524()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == false (line 374)
    // if (isset($final_matches[$f])) == true (line 377)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines525()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines526()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines527()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines528()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines529()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines530()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines531()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines532()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines533()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines534()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines535()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines536()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines537()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines538()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines539()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines540()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines541()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines542()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines543()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines544()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines545()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines546()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines547()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines548()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines549()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines550()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines551()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines552()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines553()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines554()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines555()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines556()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines557()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines558()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines559()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == false (line 367)
    // if (isset($orig_matches[$o])) == true (line 374)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines560()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines561()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines562()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines563()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines564()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines565()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines566()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines567()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines568()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines569()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines570()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines571()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines572()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines573()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines574()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines575()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines576()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines577()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines578()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines579()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines580()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines581()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines582()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines583()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines584()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines585()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines586()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines587()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines588()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines589()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines590()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines591()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines592()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines593()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines594()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == false (line 362)
    // if (!isset($orig_matches[$o]) && !isset($final_matches[$f])) == true (line 367)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines595()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines596()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines597()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines598()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines599()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines600()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines601()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines602()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines603()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines604()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == false (line 403)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines605()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines606()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines607()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines608()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines609()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines610()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines611()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines612()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines613()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines614()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == false (line 398)
    // if ($final_pos > $orig_pos) == true (line 403)
    // while ($diff_pos < 0) == true (line 405)
    // while ($diff_pos < 0) == false (line 405)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines615()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines616()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines617()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines618()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines619()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines620()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines621()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines622()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines623()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines624()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == false (line 396)
    // if ($final_pos < $orig_pos) == true (line 398)
    // while ($diff_pos < 0) == true (line 400)
    // while ($diff_pos < 0) == false (line 400)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines625()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == false (line 417)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines626()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines627()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == false (line 413)
    // if ($diff_count > 0) == true (line 417)
    // while ($diff_count < 0) == true (line 419)
    // while ($diff_count < 0) == false (line 419)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines628()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInterleave_changed_lines629()
{
    $orig = m::mock('UntypedParameter_orig_');
    $final = m::mock('UntypedParameter_final_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($orig_matches[$o]) && isset($final_matches[$f])) == true (line 362)
    // if (\false === $final_pos) == true (line 396)
    // if ($diff_count < 0) == true (line 413)
    // while ($diff_count < 0) == true (line 414)
    // while ($diff_count < 0) == false (line 414)

    $actual = $this->wP_Text_Diff_Renderer_Table->interleave_changed_lines($orig, $final);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompute_string_distance0()
{
    $string1 = m::mock('UntypedParameter_string1_');
    $string2 = m::mock('UntypedParameter_string2_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$string1) == false (line 445)

    $actual = $this->wP_Text_Diff_Renderer_Table->compute_string_distance($string1, $string2);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompute_string_distance1()
{
    $string1 = m::mock('UntypedParameter_string1_');
    $string2 = m::mock('UntypedParameter_string2_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$string1) == true (line 445)

    $actual = $this->wP_Text_Diff_Renderer_Table->compute_string_distance($string1, $string2);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDifference0()
{
    $a = m::mock('UntypedParameter_a_');
    $b = m::mock('UntypedParameter_b_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Text_Diff_Renderer_Table->difference($a, $b);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->compat_fields)) == false (line 474)

    $actual = $this->wP_Text_Diff_Renderer_Table->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->compat_fields)) == true (line 474)

    $actual = $this->wP_Text_Diff_Renderer_Table->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->compat_fields)) == false (line 489)

    $actual = $this->wP_Text_Diff_Renderer_Table->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set1()
{
    $name = m::mock('UntypedParameter_name_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->compat_fields)) == true (line 489)

    $actual = $this->wP_Text_Diff_Renderer_Table->__set($name, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->compat_fields)) == false (line 503)

    $actual = $this->wP_Text_Diff_Renderer_Table->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__isset1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->compat_fields)) == true (line 503)

    $actual = $this->wP_Text_Diff_Renderer_Table->__isset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->compat_fields)) == false (line 516)

    $actual = $this->wP_Text_Diff_Renderer_Table->__unset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__unset1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\in_array($name, $this->compat_fields)) == true (line 516)

    $actual = $this->wP_Text_Diff_Renderer_Table->__unset($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
