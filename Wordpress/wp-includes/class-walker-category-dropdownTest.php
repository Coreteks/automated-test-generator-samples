<?php

namespace tests;

use Mockery as m;
use Walker_CategoryDropdown;

class Walker_CategoryDropdownTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Walker_CategoryDropdown
*/
protected $walker_CategoryDropdown;

public function setUp()
{
    parent::setUp();

    $this->walker_CategoryDropdown = new \Walker_CategoryDropdown();
}

public function testStart_el0()
{
    $output = m::mock('UntypedParameter_output_');
    $category = m::mock('UntypedParameter_category_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args['value_field']) && isset($category->{$args['value_field']})) == false (line 63)
    // if ((string) $category->{$value_field} === (string) $args['selected']) == false (line 72)
    // if ($args['show_count']) == false (line 77)

    $actual = $this->walker_CategoryDropdown->start_el($output, $category, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el1()
{
    $output = m::mock('UntypedParameter_output_');
    $category = m::mock('UntypedParameter_category_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args['value_field']) && isset($category->{$args['value_field']})) == false (line 63)
    // if ((string) $category->{$value_field} === (string) $args['selected']) == false (line 72)
    // if ($args['show_count']) == true (line 77)

    $actual = $this->walker_CategoryDropdown->start_el($output, $category, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el2()
{
    $output = m::mock('UntypedParameter_output_');
    $category = m::mock('UntypedParameter_category_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args['value_field']) && isset($category->{$args['value_field']})) == false (line 63)
    // if ((string) $category->{$value_field} === (string) $args['selected']) == true (line 72)
    // if ($args['show_count']) == false (line 77)

    $actual = $this->walker_CategoryDropdown->start_el($output, $category, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el3()
{
    $output = m::mock('UntypedParameter_output_');
    $category = m::mock('UntypedParameter_category_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args['value_field']) && isset($category->{$args['value_field']})) == false (line 63)
    // if ((string) $category->{$value_field} === (string) $args['selected']) == true (line 72)
    // if ($args['show_count']) == true (line 77)

    $actual = $this->walker_CategoryDropdown->start_el($output, $category, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el4()
{
    $output = m::mock('UntypedParameter_output_');
    $category = m::mock('UntypedParameter_category_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args['value_field']) && isset($category->{$args['value_field']})) == true (line 63)
    // if ((string) $category->{$value_field} === (string) $args['selected']) == false (line 72)
    // if ($args['show_count']) == false (line 77)

    $actual = $this->walker_CategoryDropdown->start_el($output, $category, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el5()
{
    $output = m::mock('UntypedParameter_output_');
    $category = m::mock('UntypedParameter_category_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args['value_field']) && isset($category->{$args['value_field']})) == true (line 63)
    // if ((string) $category->{$value_field} === (string) $args['selected']) == false (line 72)
    // if ($args['show_count']) == true (line 77)

    $actual = $this->walker_CategoryDropdown->start_el($output, $category, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el6()
{
    $output = m::mock('UntypedParameter_output_');
    $category = m::mock('UntypedParameter_category_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args['value_field']) && isset($category->{$args['value_field']})) == true (line 63)
    // if ((string) $category->{$value_field} === (string) $args['selected']) == true (line 72)
    // if ($args['show_count']) == false (line 77)

    $actual = $this->walker_CategoryDropdown->start_el($output, $category, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el7()
{
    $output = m::mock('UntypedParameter_output_');
    $category = m::mock('UntypedParameter_category_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args['value_field']) && isset($category->{$args['value_field']})) == true (line 63)
    // if ((string) $category->{$value_field} === (string) $args['selected']) == true (line 72)
    // if ($args['show_count']) == true (line 77)

    $actual = $this->walker_CategoryDropdown->start_el($output, $category, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
