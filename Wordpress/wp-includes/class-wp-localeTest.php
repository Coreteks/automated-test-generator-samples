<?php

namespace tests;

use Mockery as m;
use WP_Locale;

class WP_LocaleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Locale
*/
protected $wP_Locale;

public function setUp()
{
    parent::setUp();

    $this->wP_Locale = new \WP_Locale();
}

public function testInit0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\version_compare(\PHP_VERSION, '5.4', '>=')) == false (line 209)
    // if (isset($GLOBALS['text_direction'])) == false (line 225)
    // if ('rtl' == \_x('ltr', 'text direction')) == false (line 228)
    // if ('rtl' === $this->text_direction && \strpos(\get_bloginfo('version'), '-src')) == false (line 232)

    $actual = $this->wP_Locale->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\version_compare(\PHP_VERSION, '5.4', '>=')) == false (line 209)
    // if (isset($GLOBALS['text_direction'])) == false (line 225)
    // if ('rtl' == \_x('ltr', 'text direction')) == false (line 228)
    // if ('rtl' === $this->text_direction && \strpos(\get_bloginfo('version'), '-src')) == true (line 232)

    $actual = $this->wP_Locale->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\version_compare(\PHP_VERSION, '5.4', '>=')) == false (line 209)
    // if (isset($GLOBALS['text_direction'])) == false (line 225)
    // if ('rtl' == \_x('ltr', 'text direction')) == true (line 228)
    // if ('rtl' === $this->text_direction && \strpos(\get_bloginfo('version'), '-src')) == false (line 232)

    $actual = $this->wP_Locale->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\version_compare(\PHP_VERSION, '5.4', '>=')) == false (line 209)
    // if (isset($GLOBALS['text_direction'])) == false (line 225)
    // if ('rtl' == \_x('ltr', 'text direction')) == true (line 228)
    // if ('rtl' === $this->text_direction && \strpos(\get_bloginfo('version'), '-src')) == true (line 232)

    $actual = $this->wP_Locale->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\version_compare(\PHP_VERSION, '5.4', '>=')) == false (line 209)
    // if (isset($GLOBALS['text_direction'])) == true (line 225)
    // if ('rtl' === $this->text_direction && \strpos(\get_bloginfo('version'), '-src')) == false (line 232)

    $actual = $this->wP_Locale->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\version_compare(\PHP_VERSION, '5.4', '>=')) == false (line 209)
    // if (isset($GLOBALS['text_direction'])) == true (line 225)
    // if ('rtl' === $this->text_direction && \strpos(\get_bloginfo('version'), '-src')) == true (line 232)

    $actual = $this->wP_Locale->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\version_compare(\PHP_VERSION, '5.4', '>=')) == true (line 209)
    // if (isset($GLOBALS['text_direction'])) == false (line 225)
    // if ('rtl' == \_x('ltr', 'text direction')) == false (line 228)
    // if ('rtl' === $this->text_direction && \strpos(\get_bloginfo('version'), '-src')) == false (line 232)

    $actual = $this->wP_Locale->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\version_compare(\PHP_VERSION, '5.4', '>=')) == true (line 209)
    // if (isset($GLOBALS['text_direction'])) == false (line 225)
    // if ('rtl' == \_x('ltr', 'text direction')) == false (line 228)
    // if ('rtl' === $this->text_direction && \strpos(\get_bloginfo('version'), '-src')) == true (line 232)

    $actual = $this->wP_Locale->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\version_compare(\PHP_VERSION, '5.4', '>=')) == true (line 209)
    // if (isset($GLOBALS['text_direction'])) == false (line 225)
    // if ('rtl' == \_x('ltr', 'text direction')) == true (line 228)
    // if ('rtl' === $this->text_direction && \strpos(\get_bloginfo('version'), '-src')) == false (line 232)

    $actual = $this->wP_Locale->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\version_compare(\PHP_VERSION, '5.4', '>=')) == true (line 209)
    // if (isset($GLOBALS['text_direction'])) == false (line 225)
    // if ('rtl' == \_x('ltr', 'text direction')) == true (line 228)
    // if ('rtl' === $this->text_direction && \strpos(\get_bloginfo('version'), '-src')) == true (line 232)

    $actual = $this->wP_Locale->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\version_compare(\PHP_VERSION, '5.4', '>=')) == true (line 209)
    // if (isset($GLOBALS['text_direction'])) == true (line 225)
    // if ('rtl' === $this->text_direction && \strpos(\get_bloginfo('version'), '-src')) == false (line 232)

    $actual = $this->wP_Locale->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\version_compare(\PHP_VERSION, '5.4', '>=')) == true (line 209)
    // if (isset($GLOBALS['text_direction'])) == true (line 225)
    // if ('rtl' === $this->text_direction && \strpos(\get_bloginfo('version'), '-src')) == true (line 232)

    $actual = $this->wP_Locale->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRtl_src_admin_notice0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Locale->rtl_src_admin_notice();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_weekday0()
{
    $weekday_number = m::mock('UntypedParameter_weekday_number_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Locale->get_weekday($weekday_number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_weekday_initial0()
{
    $weekday_name = m::mock('UntypedParameter_weekday_name_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Locale->get_weekday_initial($weekday_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_weekday_abbrev0()
{
    $weekday_name = m::mock('UntypedParameter_weekday_name_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Locale->get_weekday_abbrev($weekday_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_month0()
{
    $month_number = m::mock('UntypedParameter_month_number_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Locale->get_month($month_number);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_month_abbrev0()
{
    $month_name = m::mock('UntypedParameter_month_name_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Locale->get_month_abbrev($month_name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_meridiem0()
{
    $meridiem = m::mock('UntypedParameter_meridiem_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Locale->get_meridiem($meridiem);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister_globals0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Locale->register_globals();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_rtl0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Locale->is_rtl();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_strings_for_pot0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Locale->_strings_for_pot();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
