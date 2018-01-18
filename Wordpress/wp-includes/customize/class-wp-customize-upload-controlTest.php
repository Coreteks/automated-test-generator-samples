<?php

namespace tests;

use Mockery as m;
use WP_Customize_Upload_Control;

class WP_Customize_Upload_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Upload_Control
*/
protected $wP_Customize_Upload_Control;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Upload_Control = new \WP_Customize_Upload_Control();
}

public function testTo_json0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value) == false (line 36)

    $actual = $this->wP_Customize_Upload_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value) == true (line 36)
    // if ($attachment_id) == false (line 39)

    $actual = $this->wP_Customize_Upload_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_json2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value) == true (line 36)
    // if ($attachment_id) == true (line 39)

    $actual = $this->wP_Customize_Upload_Control->to_json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
