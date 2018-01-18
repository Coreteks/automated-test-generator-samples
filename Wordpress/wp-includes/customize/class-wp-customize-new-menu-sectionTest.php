<?php

namespace tests;

use Mockery as m;
use WP_Customize_Manager;
use WP_Customize_New_Menu_Section;

class WP_Customize_New_Menu_SectionTest extends \PHPUnit_Framework_TestCase
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
* @var \WP_Customize_New_Menu_Section
*/
protected $wP_Customize_New_Menu_Section;

public function setUp()
{
    parent::setUp();

    $this->_manager = m::mock(\WP_Customize_Manager::class);
    $this->_id = null;
    $this->_args = [];
    $this->wP_Customize_New_Menu_Section = new \WP_Customize_New_Menu_Section($this->_manager, $this->_id, $this->_args);
}
}
