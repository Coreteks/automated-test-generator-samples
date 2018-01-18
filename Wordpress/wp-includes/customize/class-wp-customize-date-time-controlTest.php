<?php

namespace tests;

use Mockery as m;
use WP_Customize_Date_Time_Control;

class WP_Customize_Date_Time_ControlTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Customize_Date_Time_Control
*/
protected $wP_Customize_Date_Time_Control;

public function setUp()
{
    parent::setUp();

    $this->wP_Customize_Date_Time_Control = new \WP_Customize_Date_Time_Control();
}

public function testRender_content0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Date_Time_Control->render_content();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testJson0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Customize_Date_Time_Control->json();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_template0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (1 !== \substr_count($date_format, '%1$s') || 1 !== \substr_count($date_format, '%2$s') || 1 !== \substr_count($date_format, '%3$s')) == false (line 108)

    $actual = $this->wP_Customize_Date_Time_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContent_template1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (1 !== \substr_count($date_format, '%1$s') || 1 !== \substr_count($date_format, '%2$s') || 1 !== \substr_count($date_format, '%3$s')) == true (line 108)

    $actual = $this->wP_Customize_Date_Time_Control->content_template();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_month_choices0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 197)

    $actual = $this->wP_Customize_Date_Time_Control->get_month_choices();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_month_choices1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 197)
    // for (...) == false (line 197)

    $actual = $this->wP_Customize_Date_Time_Control->get_month_choices();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_timezone_info0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tz_string) == false (line 220)

    $actual = $this->wP_Customize_Date_Time_Control->get_timezone_info();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testGet_timezone_info1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tz_string) == true (line 220)

    $actual = $this->wP_Customize_Date_Time_Control->get_timezone_info();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_timezone_info2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tz_string) == true (line 220)
    // if ($tz) == false (line 227)

    $actual = $this->wP_Customize_Date_Time_Control->get_timezone_info();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_timezone_info3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tz_string) == true (line 220)
    // if ($tz) == true (line 227)

    $actual = $this->wP_Customize_Date_Time_Control->get_timezone_info();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_timezone_info4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tz_string) == true (line 220)
    // if ($tz) == false (line 227)

    $actual = $this->wP_Customize_Date_Time_Control->get_timezone_info();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_timezone_info5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($tz_string) == true (line 220)
    // if ($tz) == true (line 227)

    $actual = $this->wP_Customize_Date_Time_Control->get_timezone_info();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat_gmt_offset0()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 <= $offset) == false (line 259)

    $actual = $this->wP_Customize_Date_Time_Control->format_gmt_offset($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFormat_gmt_offset1()
{
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 <= $offset) == true (line 259)

    $actual = $this->wP_Customize_Date_Time_Control->format_gmt_offset($offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
