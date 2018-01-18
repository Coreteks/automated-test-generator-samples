<?php

namespace tests;

use Mockery as m;
use WP_Customize_Nav_Menu_Name_Control;

class WP_Customize_Nav_Menu_Name_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Nav_Menu_Name_Control
*/
protected $wP_Customize_Nav_Menu_Name_Control;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Nav_Menu_Name_Control = new \WP_Customize_Nav_Menu_Name_Control();
}
}
