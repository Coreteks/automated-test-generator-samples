<?php

namespace tests;

use Mockery as m;
use WP_Customize_Manager;
use WP_Customize_Selective_Refresh;

class WP_Customize_Selective_RefreshTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_manager;
/**
* @var \WP_Customize_Selective_Refresh
*/
protected $wP_Customize_Selective_Refresh;

public function setUp()
{
    parent::setUp();

    $this->_manager = m::mock(\WP_Customize_Manager::class);
    $this->wP_Customize_Selective_Refresh = new \WP_Customize_Selective_Refresh($this->_manager);
}

public function testPartials0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Selective_Refresh->partials();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_partial0()
{
    $id = m::mock('UntypedParameter_id_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($id instanceof \WP_Customize_Partial) == false (line 111)

    $actual = $this->wP_Customize_Selective_Refresh->add_partial($id, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_partial1()
{
    $id = m::mock('UntypedParameter_id_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($id instanceof \WP_Customize_Partial) == true (line 111)

    $actual = $this->wP_Customize_Selective_Refresh->add_partial($id, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_partial0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->partials[$id])) == false (line 138)

    $actual = $this->wP_Customize_Selective_Refresh->get_partial($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_partial1()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->partials[$id])) == true (line 138)

    $actual = $this->wP_Customize_Selective_Refresh->get_partial($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_partial0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Selective_Refresh->remove_partial($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit_preview0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Selective_Refresh->init_preview();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEnqueue_preview_scripts0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Selective_Refresh->enqueue_preview_scripts();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_preview_data0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($switched_locale) == false (line 200)

    $actual = $this->wP_Customize_Selective_Refresh->export_preview_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_preview_data1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($switched_locale) == true (line 200)

    $actual = $this->wP_Customize_Selective_Refresh->export_preview_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_preview_data2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($partial->check_capabilities()) == false (line 185)
    // if ($switched_locale) == false (line 200)

    $actual = $this->wP_Customize_Selective_Refresh->export_preview_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_preview_data3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($partial->check_capabilities()) == false (line 185)
    // if ($switched_locale) == true (line 200)

    $actual = $this->wP_Customize_Selective_Refresh->export_preview_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_preview_data4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($partial->check_capabilities()) == true (line 185)
    // if ($switched_locale) == false (line 200)

    $actual = $this->wP_Customize_Selective_Refresh->export_preview_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_preview_data5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($partial->check_capabilities()) == true (line 185)
    // if ($switched_locale) == true (line 200)

    $actual = $this->wP_Customize_Selective_Refresh->export_preview_data();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_dynamic_partials0()
{
    $partial_ids = m::mock('UntypedParameter_partial_ids_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Selective_Refresh->add_dynamic_partials($partial_ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_dynamic_partials1()
{
    $partial_ids = m::mock('UntypedParameter_partial_ids_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($partial) == false (line 231)
    // if (\false === $partial_args) == false (line 251)

    $actual = $this->wP_Customize_Selective_Refresh->add_dynamic_partials($partial_ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_dynamic_partials2()
{
    $partial_ids = m::mock('UntypedParameter_partial_ids_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($partial) == false (line 231)
    // if (\false === $partial_args) == true (line 251)

    $actual = $this->wP_Customize_Selective_Refresh->add_dynamic_partials($partial_ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_dynamic_partials3()
{
    $partial_ids = m::mock('UntypedParameter_partial_ids_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($partial) == true (line 231)

    $actual = $this->wP_Customize_Selective_Refresh->add_dynamic_partials($partial_ids);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_render_partials_request0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Selective_Refresh->is_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_error0()
{
    $errno = m::mock('UntypedParameter_errno_');
    $errstr = m::mock('UntypedParameter_errstr_');
    $errfile = m::mock('UntypedParameter_errfile_');
    $errline = m::mock('UntypedParameter_errline_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Selective_Refresh->handle_error($errno, $errstr, $errfile, $errline);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == false (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request42()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request43()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request44()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request45()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request46()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request47()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request48()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request49()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request50()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request51()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request52()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request53()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request54()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request55()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request56()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request57()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request58()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request59()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request60()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request61()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request62()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request63()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request64()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request65()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request66()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request67()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request68()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request69()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request70()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request71()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == false (line 329)
    // if (!isset($_POST['partials'])) == true (line 331)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request72()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request73()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request74()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request75()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request76()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request77()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request78()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request79()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request80()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request81()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request82()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request83()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request84()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request85()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request86()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request87()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request88()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request89()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == false (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request90()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request91()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request92()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request93()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request94()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request95()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request96()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request97()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request98()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request99()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == false (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request100()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request101()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request102()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request103()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == false (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request104()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request105()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == false (line 374)
    // if (empty($container_contexts)) == true (line 382)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request106()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == false (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request107()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == false (line 320)
    // if (!\is_customize_preview()) == true (line 329)
    // if (!\is_array($partials)) == true (line 340)
    // if (!\is_array($container_contexts)) == true (line 368)
    // if (!$partial || !$partial->check_capabilities()) == true (line 374)
    // if (\defined('WP_DEBUG_DISPLAY') && \WP_DEBUG_DISPLAY) == true (line 414)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandle_render_partials_request108()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->is_render_partials_request()) == true (line 320)

    $actual = $this->wP_Customize_Selective_Refresh->handle_render_partials_request();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
