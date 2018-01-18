<?php

namespace tests;

use Mockery as m;
use Walker_Nav_Menu;

class Walker_Nav_MenuTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Walker_Nav_Menu
*/
protected $walker_Nav_Menu;

public function setUp()
{
    parent::setUp();

    $this->walker_Nav_Menu = new \Walker_Nav_Menu();
}

public function testStart_lvl0()
{
    $output = m::mock('UntypedParameter_output_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args->item_spacing) && 'discard' === $args->item_spacing) == false (line 54)

    $actual = $this->walker_Nav_Menu->start_lvl($output, $depth, $args);
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
    // if (isset($args->item_spacing) && 'discard' === $args->item_spacing) == true (line 54)

    $actual = $this->walker_Nav_Menu->start_lvl($output, $depth, $args);
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
    // if (isset($args->item_spacing) && 'discard' === $args->item_spacing) == false (line 93)

    $actual = $this->walker_Nav_Menu->end_lvl($output, $depth, $args);
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
    // if (isset($args->item_spacing) && 'discard' === $args->item_spacing) == true (line 93)

    $actual = $this->walker_Nav_Menu->end_lvl($output, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el0()
{
    $output = m::mock('UntypedParameter_output_');
    $item = m::mock('UntypedParameter_item_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args->item_spacing) && 'discard' === $args->item_spacing) == false (line 119)

    $actual = $this->walker_Nav_Menu->start_el($output, $item, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el1()
{
    $output = m::mock('UntypedParameter_output_');
    $item = m::mock('UntypedParameter_item_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args->item_spacing) && 'discard' === $args->item_spacing) == false (line 119)
    // if (!empty($value)) == false (line 200)

    $actual = $this->walker_Nav_Menu->start_el($output, $item, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el2()
{
    $output = m::mock('UntypedParameter_output_');
    $item = m::mock('UntypedParameter_item_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args->item_spacing) && 'discard' === $args->item_spacing) == false (line 119)
    // if (!empty($value)) == true (line 200)

    $actual = $this->walker_Nav_Menu->start_el($output, $item, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el3()
{
    $output = m::mock('UntypedParameter_output_');
    $item = m::mock('UntypedParameter_item_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args->item_spacing) && 'discard' === $args->item_spacing) == true (line 119)

    $actual = $this->walker_Nav_Menu->start_el($output, $item, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el4()
{
    $output = m::mock('UntypedParameter_output_');
    $item = m::mock('UntypedParameter_item_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args->item_spacing) && 'discard' === $args->item_spacing) == true (line 119)
    // if (!empty($value)) == false (line 200)

    $actual = $this->walker_Nav_Menu->start_el($output, $item, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart_el5()
{
    $output = m::mock('UntypedParameter_output_');
    $item = m::mock('UntypedParameter_item_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args->item_spacing) && 'discard' === $args->item_spacing) == true (line 119)
    // if (!empty($value)) == true (line 200)

    $actual = $this->walker_Nav_Menu->start_el($output, $item, $depth, $args, $id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_el0()
{
    $output = m::mock('UntypedParameter_output_');
    $item = m::mock('UntypedParameter_item_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args->item_spacing) && 'discard' === $args->item_spacing) == false (line 257)

    $actual = $this->walker_Nav_Menu->end_el($output, $item, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnd_el1()
{
    $output = m::mock('UntypedParameter_output_');
    $item = m::mock('UntypedParameter_item_');
    $depth = m::mock('UntypedParameter_depth_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($args->item_spacing) && 'discard' === $args->item_spacing) == true (line 257)

    $actual = $this->walker_Nav_Menu->end_el($output, $item, $depth, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
