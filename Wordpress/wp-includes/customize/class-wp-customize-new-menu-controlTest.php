<?php

namespace tests;

use Mockery as m;
use WP_Customize_Manager;
use WP_Customize_New_Menu_Control;

class WP_Customize_New_Menu_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_manager;
/**
* @var mixed
*/
protected $_id = null;
/**
* @var array
*/
protected $_args = [];
/**
* @var \WP_Customize_New_Menu_Control
*/
protected $wP_Customize_New_Menu_Control;

public function setUp()
{
    parent::setUp();

    $this->_manager = m::mock(\WP_Customize_Manager::class);
    $this->_id = null;
    $this->_args = [];
    $this->wP_Customize_New_Menu_Control = new \WP_Customize_New_Menu_Control($this->_manager, $this->_id, $this->_args);
}

public function testRender_content0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_New_Menu_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
