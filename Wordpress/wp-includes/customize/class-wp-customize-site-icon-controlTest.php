<?php

namespace tests;

use Mockery as m;
use WP_Customize_Site_Icon_Control;

class WP_Customize_Site_Icon_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_manager = null;
/**
* @var mixed
*/
protected $_id = null;
/**
* @var mixed
*/
protected $_args = null;
/**
* @var \WP_Customize_Site_Icon_Control
*/
protected $wP_Customize_Site_Icon_Control;

public function setUp()
{
    parent::setUp();

    $this->_manager = null;
    $this->_id = null;
    $this->_args = null;
    $this->wP_Customize_Site_Icon_Control = new \WP_Customize_Site_Icon_Control($this->_manager, $this->_id, $this->_args);
}

public function testContent_template0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Site_Icon_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
