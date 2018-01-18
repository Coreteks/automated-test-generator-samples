<?php

namespace tests;

use Mockery as m;
use WP_Admin_Bar;

class WP_Admin_BarTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Admin_Bar
*/
protected $wP_Admin_Bar;

public function setUp()
{
    parent::setUp();

    $this->wP_Admin_Bar = new \WP_Admin_Bar();
}

public function test__get0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 25)
    // Case 'proto' == false (line 26)
    // Case 'menu' == false (line 29)

    $actual = $this->wP_Admin_Bar->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 25)
    // Case 'proto' == false (line 26)
    // Case 'menu' == true (line 29)

    $actual = $this->wP_Admin_Bar->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 25)
    // Case 'proto' == true (line 26)

    $actual = $this->wP_Admin_Bar->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_user_logged_in()) == false (line 40)
    // if (\current_theme_supports('admin-bar')) == false (line 58)
    // if (empty($header_callback)) == false (line 67)

    $actual = $this->wP_Admin_Bar->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_user_logged_in()) == false (line 40)
    // if (\current_theme_supports('admin-bar')) == false (line 58)
    // if (empty($header_callback)) == true (line 67)

    $actual = $this->wP_Admin_Bar->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_user_logged_in()) == false (line 40)
    // if (\current_theme_supports('admin-bar')) == true (line 58)
    // if (empty($header_callback)) == false (line 67)

    $actual = $this->wP_Admin_Bar->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_user_logged_in()) == false (line 40)
    // if (\current_theme_supports('admin-bar')) == true (line 58)
    // if (empty($header_callback)) == true (line 67)

    $actual = $this->wP_Admin_Bar->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_user_logged_in()) == true (line 40)
    // if (\is_multisite()) == false (line 43)
    // if (\current_theme_supports('admin-bar')) == false (line 58)
    // if (empty($header_callback)) == false (line 67)

    $actual = $this->wP_Admin_Bar->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_user_logged_in()) == true (line 40)
    // if (\is_multisite()) == false (line 43)
    // if (\current_theme_supports('admin-bar')) == false (line 58)
    // if (empty($header_callback)) == true (line 67)

    $actual = $this->wP_Admin_Bar->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_user_logged_in()) == true (line 40)
    // if (\is_multisite()) == false (line 43)
    // if (\current_theme_supports('admin-bar')) == true (line 58)
    // if (empty($header_callback)) == false (line 67)

    $actual = $this->wP_Admin_Bar->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_user_logged_in()) == true (line 40)
    // if (\is_multisite()) == false (line 43)
    // if (\current_theme_supports('admin-bar')) == true (line 58)
    // if (empty($header_callback)) == true (line 67)

    $actual = $this->wP_Admin_Bar->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_user_logged_in()) == true (line 40)
    // if (\is_multisite()) == true (line 43)
    // if (\current_theme_supports('admin-bar')) == false (line 58)
    // if (empty($header_callback)) == false (line 67)

    $actual = $this->wP_Admin_Bar->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_user_logged_in()) == true (line 40)
    // if (\is_multisite()) == true (line 43)
    // if (\current_theme_supports('admin-bar')) == false (line 58)
    // if (empty($header_callback)) == true (line 67)

    $actual = $this->wP_Admin_Bar->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_user_logged_in()) == true (line 40)
    // if (\is_multisite()) == true (line 43)
    // if (\current_theme_supports('admin-bar')) == true (line 58)
    // if (empty($header_callback)) == false (line 67)

    $actual = $this->wP_Admin_Bar->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInitialize11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_user_logged_in()) == true (line 40)
    // if (\is_multisite()) == true (line 43)
    // if (\current_theme_supports('admin-bar')) == true (line 58)
    // if (empty($header_callback)) == true (line 67)

    $actual = $this->wP_Admin_Bar->initialize();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_menu0()
{
    $node = m::mock('UntypedParameter_node_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Admin_Bar->add_menu($node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_menu0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Admin_Bar->remove_menu($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node1()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node2()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node3()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node4()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node5()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node6()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node7()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node8()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node9()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node10()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node11()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node12()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node13()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node14()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node15()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node16()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == true (line 128)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node17()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node18()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node19()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node20()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node21()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node22()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node23()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node24()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node25()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node26()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node27()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node28()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node29()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node30()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node31()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node32()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node33()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == false (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == true (line 128)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node34()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node35()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node36()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node37()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node38()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node39()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node40()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node41()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node42()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node43()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node44()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node45()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node46()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node47()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node48()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node49()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node50()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == false (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == true (line 128)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node51()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node52()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node53()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node54()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node55()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node56()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node57()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node58()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == false (line 127)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node59()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node60()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node61()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node62()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == false (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node63()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node64()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == false (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node65()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == false (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node66()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == false (line 128)
    // if ($maybe_defaults = $this->get_node($args['id'])) == true (line 147)
    // if (!empty($defaults['meta']) && !empty($args['meta'])) == true (line 152)
    // if (isset($back_compat_parents[$args['parent']])) == true (line 163)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_node67()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\func_num_args() >= 3 && \is_string(\func_get_arg(0))) == true (line 118)
    // if (\is_object($args)) == true (line 122)
    // if (empty($args['id'])) == true (line 127)
    // if (empty($args['title'])) == true (line 128)

    $actual = $this->wP_Admin_Bar->add_node($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_node0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node = $this->_get_node($id)) == false (line 186)

    $actual = $this->wP_Admin_Bar->get_node($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_node1()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($node = $this->_get_node($id)) == true (line 186)

    $actual = $this->wP_Admin_Bar->get_node($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_nodes0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($nodes = $this->_get_nodes())) == false (line 213)

    $actual = $this->wP_Admin_Bar->get_nodes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_nodes1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($nodes = $this->_get_nodes())) == false (line 213)

    $actual = $this->wP_Admin_Bar->get_nodes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_nodes2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!($nodes = $this->_get_nodes())) == true (line 213)

    $actual = $this->wP_Admin_Bar->get_nodes();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_group0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Admin_Bar->add_group($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_node0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Admin_Bar->remove_node($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($root) == false (line 274)

    $actual = $this->wP_Admin_Bar->render();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRender1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($root) == true (line 274)

    $actual = $this->wP_Admin_Bar->render();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRecursive_render0()
{
    $id = m::mock('UntypedParameter_id_');
    $node = m::mock('UntypedParameter_node_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Admin_Bar->recursive_render($id, $node);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_menus0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_network_admin() && !\is_user_admin()) == false (line 601)

    $actual = $this->wP_Admin_Bar->add_menus();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_menus1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_network_admin() && !\is_user_admin()) == true (line 601)

    $actual = $this->wP_Admin_Bar->add_menus();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
