<?php

namespace tests;

use Mockery as m;
use WP_Locale_Switcher;

class WP_Locale_SwitcherTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_Locale_Switcher
*/
protected $wP_Locale_Switcher;

public function setUp()
{
    parent::setUp();

    $this->wP_Locale_Switcher = new \WP_Locale_Switcher();
}

public function testInit0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Locale_Switcher->init();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSwitch_to_locale0()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($current_locale === $locale) == false (line 73)
    // if (!\in_array($locale, $this->available_languages, \true)) == false (line 77)

    $actual = $this->wP_Locale_Switcher->switch_to_locale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSwitch_to_locale1()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($current_locale === $locale) == false (line 73)
    // if (!\in_array($locale, $this->available_languages, \true)) == true (line 77)

    $actual = $this->wP_Locale_Switcher->switch_to_locale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSwitch_to_locale2()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($current_locale === $locale) == true (line 73)

    $actual = $this->wP_Locale_Switcher->switch_to_locale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRestore_previous_locale0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $previous_locale) == false (line 107)
    // if (!$locale) == false (line 114)

    $actual = $this->wP_Locale_Switcher->restore_previous_locale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRestore_previous_locale1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $previous_locale) == false (line 107)
    // if (!$locale) == true (line 114)

    $actual = $this->wP_Locale_Switcher->restore_previous_locale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRestore_previous_locale2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $previous_locale) == true (line 107)

    $actual = $this->wP_Locale_Switcher->restore_previous_locale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRestore_current_locale0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->locales)) == false (line 142)

    $actual = $this->wP_Locale_Switcher->restore_current_locale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRestore_current_locale1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->locales)) == true (line 142)

    $actual = $this->wP_Locale_Switcher->restore_current_locale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_switched0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Locale_Switcher->is_switched();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_locale0()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($switched_locale) == false (line 173)

    $actual = $this->wP_Locale_Switcher->filter_locale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFilter_locale1()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($switched_locale) == true (line 173)

    $actual = $this->wP_Locale_Switcher->filter_locale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
