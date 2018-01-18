<?php

namespace tests;

use Mockery as m;
use Walker_Comment;

class Walker_CommentTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Walker_Comment
*/
protected $walker_Comment;

public function setUp()
{
    parent::setUp();

    $this->walker_Comment = new \Walker_Comment();
}

public function testStart_lvl0()
{
    $output = m::mock('UntypedParameter_output_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($args['style']) (line 58)
    // Case 'div' == false (line 59)
    // Case 'ol' == false (line 61)
    // Case 'ul' == false (line 64)
    // Default (line 65)

    $actual = $this->walker_Comment->start_lvl($output, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_lvl1()
{
    $output = m::mock('UntypedParameter_output_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($args['style']) (line 58)
    // Case 'div' == false (line 59)
    // Case 'ol' == false (line 61)
    // Case 'ul' == true (line 64)

    $actual = $this->walker_Comment->start_lvl($output, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_lvl2()
{
    $output = m::mock('UntypedParameter_output_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($args['style']) (line 58)
    // Case 'div' == false (line 59)
    // Case 'ol' == true (line 61)

    $actual = $this->walker_Comment->start_lvl($output, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_lvl3()
{
    $output = m::mock('UntypedParameter_output_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($args['style']) (line 58)
    // Case 'div' == true (line 59)

    $actual = $this->walker_Comment->start_lvl($output, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_lvl0()
{
    $output = m::mock('UntypedParameter_output_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($args['style']) (line 87)
    // Case 'div' == false (line 88)
    // Case 'ol' == false (line 90)
    // Case 'ul' == false (line 93)
    // Default (line 94)

    $actual = $this->walker_Comment->end_lvl($output, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_lvl1()
{
    $output = m::mock('UntypedParameter_output_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($args['style']) (line 87)
    // Case 'div' == false (line 88)
    // Case 'ol' == false (line 90)
    // Case 'ul' == true (line 93)

    $actual = $this->walker_Comment->end_lvl($output, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_lvl2()
{
    $output = m::mock('UntypedParameter_output_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($args['style']) (line 87)
    // Case 'div' == false (line 88)
    // Case 'ol' == true (line 90)

    $actual = $this->walker_Comment->end_lvl($output, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_lvl3()
{
    $output = m::mock('UntypedParameter_output_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($args['style']) (line 87)
    // Case 'div' == true (line 88)

    $actual = $this->walker_Comment->end_lvl($output, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_element0()
{
    $element = m::mock('UntypedParameter_element_');
    $children_elements = m::mock('UntypedParameter_children_elements_');
    $max_depth = m::mock('UntypedParameter_max_depth_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $output = m::mock('UntypedParameter_output_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$element) == false (line 132)
    // if ($max_depth <= $depth + 1 && isset($children_elements[$id])) == false (line 146)

    $actual = $this->walker_Comment->display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_element1()
{
    $element = m::mock('UntypedParameter_element_');
    $children_elements = m::mock('UntypedParameter_children_elements_');
    $max_depth = m::mock('UntypedParameter_max_depth_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $output = m::mock('UntypedParameter_output_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$element) == false (line 132)
    // if ($max_depth <= $depth + 1 && isset($children_elements[$id])) == true (line 146)

    $actual = $this->walker_Comment->display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_element2()
{
    $element = m::mock('UntypedParameter_element_');
    $children_elements = m::mock('UntypedParameter_children_elements_');
    $max_depth = m::mock('UntypedParameter_max_depth_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $output = m::mock('UntypedParameter_output_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$element) == false (line 132)
    // if ($max_depth <= $depth + 1 && isset($children_elements[$id])) == true (line 146)

    $actual = $this->walker_Comment->display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisplay_element3()
{
    $element = m::mock('UntypedParameter_element_');
    $children_elements = m::mock('UntypedParameter_children_elements_');
    $max_depth = m::mock('UntypedParameter_max_depth_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $output = m::mock('UntypedParameter_output_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$element) == true (line 132)

    $actual = $this->walker_Comment->display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el0()
{
    $output = m::mock('UntypedParameter_output_');
    $comment = m::mock('UntypedParameter_comment_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($args['callback'])) == false (line 177)
    // if (('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) && $args['short_ping']) == false (line 184)
    // if ('html5' === $args['format']) == false (line 188)

    $actual = $this->walker_Comment->start_el($output, $comment, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el1()
{
    $output = m::mock('UntypedParameter_output_');
    $comment = m::mock('UntypedParameter_comment_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($args['callback'])) == false (line 177)
    // if (('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) && $args['short_ping']) == false (line 184)
    // if ('html5' === $args['format']) == true (line 188)

    $actual = $this->walker_Comment->start_el($output, $comment, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el2()
{
    $output = m::mock('UntypedParameter_output_');
    $comment = m::mock('UntypedParameter_comment_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($args['callback'])) == false (line 177)
    // if (('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) && $args['short_ping']) == true (line 184)

    $actual = $this->walker_Comment->start_el($output, $comment, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el3()
{
    $output = m::mock('UntypedParameter_output_');
    $comment = m::mock('UntypedParameter_comment_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($args['callback'])) == true (line 177)

    $actual = $this->walker_Comment->start_el($output, $comment, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_el0()
{
    $output = m::mock('UntypedParameter_output_');
    $comment = m::mock('UntypedParameter_comment_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($args['end-callback'])) == false (line 213)
    // if ('div' == $args['style']) == false (line 219)

    $actual = $this->walker_Comment->end_el($output, $comment, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_el1()
{
    $output = m::mock('UntypedParameter_output_');
    $comment = m::mock('UntypedParameter_comment_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($args['end-callback'])) == false (line 213)
    // if ('div' == $args['style']) == true (line 219)

    $actual = $this->walker_Comment->end_el($output, $comment, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_el2()
{
    $output = m::mock('UntypedParameter_output_');
    $comment = m::mock('UntypedParameter_comment_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($args['end-callback'])) == true (line 213)

    $actual = $this->walker_Comment->end_el($output, $comment, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
