<?php

namespace tests;

use Mockery as m;
use Walker_PageDropdown;

class Walker_PageDropdownTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Walker_PageDropdown
*/
protected $walker_PageDropdown;

public function setUp()
{
    parent::setUp();

    $this->walker_PageDropdown = new \Walker_PageDropdown();
}

public function testStart_el0()
{
    $output = m::mock('UntypedParameter_output_');
    $page = m::mock('UntypedParameter_page_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['value_field']) || !isset($page->{$args['value_field']})) == false (line 62)
    // if ($page->ID == $args['selected']) == false (line 67)
    // if ('' === $title) == false (line 73)

    $actual = $this->walker_PageDropdown->start_el($output, $page, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el1()
{
    $output = m::mock('UntypedParameter_output_');
    $page = m::mock('UntypedParameter_page_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['value_field']) || !isset($page->{$args['value_field']})) == false (line 62)
    // if ($page->ID == $args['selected']) == false (line 67)
    // if ('' === $title) == true (line 73)

    $actual = $this->walker_PageDropdown->start_el($output, $page, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el2()
{
    $output = m::mock('UntypedParameter_output_');
    $page = m::mock('UntypedParameter_page_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['value_field']) || !isset($page->{$args['value_field']})) == false (line 62)
    // if ($page->ID == $args['selected']) == true (line 67)
    // if ('' === $title) == false (line 73)

    $actual = $this->walker_PageDropdown->start_el($output, $page, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el3()
{
    $output = m::mock('UntypedParameter_output_');
    $page = m::mock('UntypedParameter_page_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['value_field']) || !isset($page->{$args['value_field']})) == false (line 62)
    // if ($page->ID == $args['selected']) == true (line 67)
    // if ('' === $title) == true (line 73)

    $actual = $this->walker_PageDropdown->start_el($output, $page, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el4()
{
    $output = m::mock('UntypedParameter_output_');
    $page = m::mock('UntypedParameter_page_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['value_field']) || !isset($page->{$args['value_field']})) == true (line 62)
    // if ($page->ID == $args['selected']) == false (line 67)
    // if ('' === $title) == false (line 73)

    $actual = $this->walker_PageDropdown->start_el($output, $page, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el5()
{
    $output = m::mock('UntypedParameter_output_');
    $page = m::mock('UntypedParameter_page_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['value_field']) || !isset($page->{$args['value_field']})) == true (line 62)
    // if ($page->ID == $args['selected']) == false (line 67)
    // if ('' === $title) == true (line 73)

    $actual = $this->walker_PageDropdown->start_el($output, $page, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el6()
{
    $output = m::mock('UntypedParameter_output_');
    $page = m::mock('UntypedParameter_page_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['value_field']) || !isset($page->{$args['value_field']})) == true (line 62)
    // if ($page->ID == $args['selected']) == true (line 67)
    // if ('' === $title) == false (line 73)

    $actual = $this->walker_PageDropdown->start_el($output, $page, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el7()
{
    $output = m::mock('UntypedParameter_output_');
    $page = m::mock('UntypedParameter_page_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($args['value_field']) || !isset($page->{$args['value_field']})) == true (line 62)
    // if ($page->ID == $args['selected']) == true (line 67)
    // if ('' === $title) == true (line 73)

    $actual = $this->walker_PageDropdown->start_el($output, $page, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
