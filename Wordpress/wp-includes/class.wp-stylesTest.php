<?php

namespace tests;

use Mockery as m;
use WP_Styles;

class WP_StylesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Styles
*/
protected $wP_Styles;

public function setUp()
{
    parent::setUp();

    $this->wP_Styles = new \WP_Styles();
}

public function testDo_item0()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item1()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item2()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item3()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item4()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item5()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item6()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item7()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item8()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item9()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item10()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item11()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item12()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item13()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item14()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item15()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item16()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item17()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item18()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item19()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item20()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item21()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item22()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item23()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item24()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item25()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item26()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item27()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item28()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item29()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item30()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item31()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item32()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item33()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item34()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item35()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item36()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item37()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item38()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item39()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item40()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item41()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item42()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item43()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item44()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item45()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item46()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item47()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item48()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item49()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item50()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item51()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item52()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item53()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item54()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item55()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item56()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item57()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item58()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item59()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item60()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item61()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item62()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item63()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item64()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item65()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item66()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item67()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item68()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item69()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item70()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item71()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item72()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item73()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item74()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item75()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item76()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item77()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item78()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item79()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item80()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item81()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item82()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item83()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item84()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item85()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item86()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item87()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item88()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item89()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item90()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item91()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item92()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item93()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item94()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item95()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item96()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item97()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item98()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item99()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item100()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item101()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item102()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item103()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item104()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item105()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item106()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item107()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item108()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item109()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item110()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item111()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item112()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item113()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item114()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item115()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item116()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item117()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item118()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item119()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item120()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item121()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item122()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item123()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item124()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item125()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item126()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item127()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item128()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item129()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item130()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item131()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item132()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item133()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item134()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item135()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item136()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == true (line 146)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item137()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item138()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item139()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item140()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item141()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item142()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item143()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item144()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item145()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item146()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item147()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item148()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item149()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item150()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item151()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item152()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item153()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item154()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item155()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item156()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item157()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item158()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item159()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item160()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item161()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item162()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item163()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item164()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item165()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item166()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item167()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item168()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item169()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item170()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item171()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item172()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item173()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item174()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item175()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item176()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item177()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item178()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item179()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item180()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item181()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item182()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item183()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item184()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item185()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item186()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item187()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item188()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item189()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item190()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item191()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item192()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item193()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item194()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item195()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item196()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item197()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item198()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item199()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item200()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item201()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item202()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item203()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item204()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item205()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item206()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item207()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item208()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item209()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item210()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item211()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item212()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item213()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item214()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item215()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item216()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item217()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item218()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item219()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item220()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item221()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item222()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item223()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item224()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item225()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item226()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item227()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item228()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item229()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item230()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item231()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item232()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item233()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item234()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item235()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item236()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item237()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item238()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item239()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item240()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item241()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item242()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item243()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item244()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item245()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item246()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item247()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item248()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item249()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item250()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item251()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item252()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item253()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item254()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item255()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item256()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item257()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item258()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item259()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item260()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item261()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item262()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item263()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item264()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item265()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item266()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item267()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item268()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item269()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item270()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item271()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item272()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item273()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == false (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == true (line 146)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item274()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item275()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item276()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item277()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item278()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item279()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item280()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item281()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item282()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item283()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item284()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item285()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item286()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item287()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item288()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item289()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item290()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item291()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item292()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item293()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item294()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item295()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item296()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item297()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item298()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item299()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item300()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item301()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item302()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item303()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item304()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item305()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item306()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item307()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item308()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item309()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item310()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item311()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item312()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item313()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item314()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item315()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item316()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item317()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item318()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item319()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item320()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item321()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item322()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item323()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item324()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item325()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item326()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item327()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item328()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item329()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item330()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item331()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item332()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item333()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item334()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item335()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item336()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item337()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item338()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item339()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item340()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item341()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item342()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item343()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item344()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item345()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item346()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item347()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item348()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item349()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item350()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item351()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item352()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item353()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item354()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item355()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item356()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item357()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item358()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item359()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item360()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item361()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item362()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item363()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item364()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item365()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item366()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item367()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item368()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item369()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item370()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item371()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item372()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item373()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item374()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item375()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item376()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item377()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item378()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item379()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item380()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item381()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item382()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item383()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item384()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item385()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item386()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item387()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item388()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item389()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item390()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item391()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item392()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item393()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item394()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item395()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item396()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item397()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item398()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item399()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item400()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item401()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item402()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item403()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item404()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item405()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item406()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item407()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item408()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item409()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item410()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == false (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == true (line 146)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item411()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item412()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item413()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item414()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item415()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item416()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item417()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item418()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item419()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item420()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item421()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item422()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item423()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item424()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item425()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item426()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item427()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item428()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item429()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item430()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item431()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item432()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item433()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item434()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item435()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item436()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item437()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item438()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item439()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item440()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item441()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item442()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item443()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item444()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item445()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item446()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item447()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item448()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item449()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item450()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item451()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item452()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item453()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item454()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item455()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item456()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item457()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item458()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item459()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item460()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item461()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item462()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item463()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item464()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item465()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item466()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item467()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item468()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item469()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item470()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item471()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item472()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item473()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item474()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item475()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item476()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item477()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item478()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == false (line 145)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item479()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item480()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item481()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item482()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item483()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item484()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item485()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item486()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item487()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item488()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item489()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item490()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item491()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item492()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item493()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item494()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item495()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item496()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item497()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item498()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item499()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item500()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item501()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item502()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item503()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item504()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item505()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item506()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item507()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item508()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item509()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item510()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item511()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item512()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == false (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item513()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item514()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item515()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item516()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item517()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item518()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == false (line 196)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item519()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item520()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item521()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item522()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item523()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item524()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item525()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item526()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item527()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item528()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item529()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item530()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == false (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item531()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item532()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item533()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item534()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item535()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item536()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == false (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item537()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item538()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item539()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == false (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item540()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == false (line 220)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item541()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item542()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == false (line 176)
    // if ('rtl' === $this->text_direction && isset($obj->extra['rtl']) && $obj->extra['rtl']) == true (line 196)
    // if (\is_bool($obj->extra['rtl']) || 'replace' === $obj->extra['rtl']) == true (line 197)
    // if ($obj->extra['rtl'] === 'replace') == true (line 207)
    // if (isset($obj->extra['conditional']) && $obj->extra['conditional']) == true (line 215)
    // if ($this->do_concat) == true (line 220)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 223)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item543()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == false (line 163)
    // if (!$href) == true (line 176)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item544()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == false (line 164)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item545()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == false (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item546()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == false (line 146)
    // if (isset($obj->args)) == true (line 156)
    // if (!$obj->src) == true (line 163)
    // if ($inline_style = $this->print_inline_style($handle, \false)) == true (line 164)
    // if ($this->do_concat) == true (line 166)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item547()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == false (line 130)
    // if (\null === $obj->ver) == true (line 135)
    // if (isset($this->args[$handle])) == true (line 141)
    // if ($this->do_concat) == true (line 145)
    // if ($this->in_default_dir($obj->src) && !isset($obj->extra['conditional']) && !isset($obj->extra['alt'])) == true (line 146)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_item548()
{
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!parent::do_item($handle)) == true (line 130)

    $actual = $this->wP_Styles->do_item($handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_inline_style0()
{
    $handle = m::mock('UntypedParameter_handle_');
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$code) == false (line 247)
    // if (!$after) == false (line 252)

    $actual = $this->wP_Styles->add_inline_style($handle, $code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_inline_style1()
{
    $handle = m::mock('UntypedParameter_handle_');
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$code) == false (line 247)
    // if (!$after) == true (line 252)

    $actual = $this->wP_Styles->add_inline_style($handle, $code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_inline_style2()
{
    $handle = m::mock('UntypedParameter_handle_');
    $code = m::mock('UntypedParameter_code_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$code) == true (line 247)

    $actual = $this->wP_Styles->add_inline_style($handle, $code);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrint_inline_style0()
{
    $handle = m::mock('UntypedParameter_handle_');
    $echo = m::mock('UntypedParameter_echo_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($output)) == false (line 274)
    // if (!$echo) == false (line 280)

    $actual = $this->wP_Styles->print_inline_style($handle, $echo);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrint_inline_style1()
{
    $handle = m::mock('UntypedParameter_handle_');
    $echo = m::mock('UntypedParameter_echo_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($output)) == false (line 274)
    // if (!$echo) == true (line 280)

    $actual = $this->wP_Styles->print_inline_style($handle, $echo);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrint_inline_style2()
{
    $handle = m::mock('UntypedParameter_handle_');
    $echo = m::mock('UntypedParameter_echo_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($output)) == true (line 274)

    $actual = $this->wP_Styles->print_inline_style($handle, $echo);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps0()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$recursion) == false (line 303)

    $actual = $this->wP_Styles->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll_deps1()
{
    $handles = m::mock('UntypedParameter_handles_');
    $recursion = m::mock('UntypedParameter_recursion_');
    $group = m::mock('UntypedParameter_group_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$recursion) == true (line 303)

    $actual = $this->wP_Styles->all_deps($handles, $recursion, $group);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_css_href0()
{
    $src = m::mock('UntypedParameter_src_');
    $ver = m::mock('UntypedParameter_ver_');
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_bool($src) && !\preg_match('|^(https?:)?//|', $src) && !($this->content_url && 0 === \strpos($src, $this->content_url))) == false (line 327)
    // if (!empty($ver)) == false (line 331)

    $actual = $this->wP_Styles->_css_href($src, $ver, $handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_css_href1()
{
    $src = m::mock('UntypedParameter_src_');
    $ver = m::mock('UntypedParameter_ver_');
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_bool($src) && !\preg_match('|^(https?:)?//|', $src) && !($this->content_url && 0 === \strpos($src, $this->content_url))) == false (line 327)
    // if (!empty($ver)) == true (line 331)

    $actual = $this->wP_Styles->_css_href($src, $ver, $handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_css_href2()
{
    $src = m::mock('UntypedParameter_src_');
    $ver = m::mock('UntypedParameter_ver_');
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_bool($src) && !\preg_match('|^(https?:)?//|', $src) && !($this->content_url && 0 === \strpos($src, $this->content_url))) == true (line 327)
    // if (!empty($ver)) == false (line 331)

    $actual = $this->wP_Styles->_css_href($src, $ver, $handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test_css_href3()
{
    $src = m::mock('UntypedParameter_src_');
    $ver = m::mock('UntypedParameter_ver_');
    $handle = m::mock('UntypedParameter_handle_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_bool($src) && !\preg_match('|^(https?:)?//|', $src) && !($this->content_url && 0 === \strpos($src, $this->content_url))) == true (line 327)
    // if (!empty($ver)) == true (line 331)

    $actual = $this->wP_Styles->_css_href($src, $ver, $handle);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIn_default_dir0()
{
    $src = m::mock('UntypedParameter_src_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->default_dirs) == false (line 356)

    $actual = $this->wP_Styles->in_default_dir($src);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIn_default_dir1()
{
    $src = m::mock('UntypedParameter_src_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->default_dirs) == false (line 356)
    // if (0 === \strpos($src, $test)) == false (line 361)

    $actual = $this->wP_Styles->in_default_dir($src);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIn_default_dir2()
{
    $src = m::mock('UntypedParameter_src_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->default_dirs) == false (line 356)
    // if (0 === \strpos($src, $test)) == true (line 361)

    $actual = $this->wP_Styles->in_default_dir($src);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIn_default_dir3()
{
    $src = m::mock('UntypedParameter_src_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->default_dirs) == true (line 356)

    $actual = $this->wP_Styles->in_default_dir($src);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDo_footer_items0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Styles->do_footer_items();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Styles->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
