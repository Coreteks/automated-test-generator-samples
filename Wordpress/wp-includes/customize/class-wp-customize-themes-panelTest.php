<?php

namespace tests;

use Mockery as m;
use WP_Customize_Themes_Panel;

class WP_Customize_Themes_PanelTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Themes_Panel
*/
protected $wP_Customize_Themes_Panel;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Themes_Panel = new \WP_Customize_Themes_Panel();
}
}
