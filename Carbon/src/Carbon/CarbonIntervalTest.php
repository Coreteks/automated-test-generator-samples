<?php

namespace tests\Carbon;

use Carbon\CarbonInterval;
use Mockery as m;

class CarbonIntervalTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_years = null;
/**
* @var mixed
*/
protected $_months = null;
/**
* @var mixed
*/
protected $_weeks = null;
/**
* @var mixed
*/
protected $_days = null;
/**
* @var mixed
*/
protected $_hours = null;
/**
* @var mixed
*/
protected $_minutes = null;
/**
* @var mixed
*/
protected $_seconds = null;
/**
* @var \Carbon\CarbonInterval
*/
protected $carbonInterval;

public function setUp()
{
    parent::setUp();

    $this->_years = null;
    $this->_months = null;
    $this->_weeks = null;
    $this->_days = null;
    $this->_hours = null;
    $this->_minutes = null;
    $this->_seconds = null;
    $this->carbonInterval = new \Carbon\CarbonInterval($this->_years, $this->_months, $this->_weeks, $this->_days, $this->_hours, $this->_minutes, $this->_seconds);
}

public function testCreate0()
{
    $years = m::mock('UntypedParameter_years_');
    $months = m::mock('UntypedParameter_months_');
    $weeks = m::mock('UntypedParameter_weeks_');
    $days = m::mock('UntypedParameter_days_');
    $hours = m::mock('UntypedParameter_hours_');
    $minutes = m::mock('UntypedParameter_minutes_');
    $seconds = m::mock('UntypedParameter_seconds_');

    // TODO: Your mock expectations here

    $actual = $this->carbonInterval->create($years, $months, $weeks, $days, $hours, $minutes, $seconds);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic0()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == false (line 190)
    // Case 'weeks' == false (line 193)
    // Case 'week' == false (line 194)
    // Case 'days' == false (line 197)
    // Case 'dayz' == false (line 198)
    // Case 'day' == false (line 199)
    // Case 'hours' == false (line 202)
    // Case 'hour' == false (line 203)
    // Case 'minutes' == false (line 206)
    // Case 'minute' == false (line 207)
    // Case 'seconds' == false (line 210)
    // Case 'second' == false (line 211)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic1()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == false (line 190)
    // Case 'weeks' == false (line 193)
    // Case 'week' == false (line 194)
    // Case 'days' == false (line 197)
    // Case 'dayz' == false (line 198)
    // Case 'day' == false (line 199)
    // Case 'hours' == false (line 202)
    // Case 'hour' == false (line 203)
    // Case 'minutes' == false (line 206)
    // Case 'minute' == false (line 207)
    // Case 'seconds' == false (line 210)
    // Case 'second' == true (line 211)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic2()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == false (line 190)
    // Case 'weeks' == false (line 193)
    // Case 'week' == false (line 194)
    // Case 'days' == false (line 197)
    // Case 'dayz' == false (line 198)
    // Case 'day' == false (line 199)
    // Case 'hours' == false (line 202)
    // Case 'hour' == false (line 203)
    // Case 'minutes' == false (line 206)
    // Case 'minute' == false (line 207)
    // Case 'seconds' == true (line 210)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic3()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == false (line 190)
    // Case 'weeks' == false (line 193)
    // Case 'week' == false (line 194)
    // Case 'days' == false (line 197)
    // Case 'dayz' == false (line 198)
    // Case 'day' == false (line 199)
    // Case 'hours' == false (line 202)
    // Case 'hour' == false (line 203)
    // Case 'minutes' == false (line 206)
    // Case 'minute' == true (line 207)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic4()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == false (line 190)
    // Case 'weeks' == false (line 193)
    // Case 'week' == false (line 194)
    // Case 'days' == false (line 197)
    // Case 'dayz' == false (line 198)
    // Case 'day' == false (line 199)
    // Case 'hours' == false (line 202)
    // Case 'hour' == false (line 203)
    // Case 'minutes' == true (line 206)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic5()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == false (line 190)
    // Case 'weeks' == false (line 193)
    // Case 'week' == false (line 194)
    // Case 'days' == false (line 197)
    // Case 'dayz' == false (line 198)
    // Case 'day' == false (line 199)
    // Case 'hours' == false (line 202)
    // Case 'hour' == true (line 203)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic6()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == false (line 190)
    // Case 'weeks' == false (line 193)
    // Case 'week' == false (line 194)
    // Case 'days' == false (line 197)
    // Case 'dayz' == false (line 198)
    // Case 'day' == false (line 199)
    // Case 'hours' == true (line 202)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic7()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == false (line 190)
    // Case 'weeks' == false (line 193)
    // Case 'week' == false (line 194)
    // Case 'days' == false (line 197)
    // Case 'dayz' == false (line 198)
    // Case 'day' == true (line 199)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic8()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == false (line 190)
    // Case 'weeks' == false (line 193)
    // Case 'week' == false (line 194)
    // Case 'days' == false (line 197)
    // Case 'dayz' == true (line 198)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic9()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == false (line 190)
    // Case 'weeks' == false (line 193)
    // Case 'week' == false (line 194)
    // Case 'days' == true (line 197)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic10()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == false (line 190)
    // Case 'weeks' == false (line 193)
    // Case 'week' == true (line 194)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic11()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == false (line 190)
    // Case 'weeks' == true (line 193)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic12()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == false (line 189)
    // Case 'month' == true (line 190)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic13()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == false (line 186)
    // Case 'months' == true (line 189)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic14()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == false (line 185)
    // Case 'year' == true (line 186)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic15()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 184)
    // Case 'years' == true (line 185)

    $actual = $this->carbonInterval->__callStatic($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInstance0()
{
    $di = m::mock(\DateInterval::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::wasCreatedFromDiff($di)) == false (line 229)

    $actual = $this->carbonInterval->instance($di);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function testInstance1()
{
    $di = m::mock(\DateInterval::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::wasCreatedFromDiff($di)) == true (line 229)
    // throw new \InvalidArgumentException('Can not instance a DateInterval object created from DateTime::diff().') -> exception (line 230)

    $actual = $this->carbonInterval->instance($di);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTranslator0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbonInterval->getTranslator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTranslator0()
{
    $translator = m::mock(\Symfony\Component\Translation\TranslatorInterface::class);

    // TODO: Your mock expectations here

    $actual = $this->carbonInterval->setTranslator($translator);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLocale0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbonInterval->getLocale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLocale0()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($translator instanceof \Symfony\Component\Translation\Translator) == false (line 301)

    $actual = $this->carbonInterval->setLocale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLocale1()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($translator instanceof \Symfony\Component\Translation\Translator) == true (line 301)

    $actual = $this->carbonInterval->setLocale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \InvalidArgumentException
 */
public function test__get0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 322)
    // Case 'years' == false (line 323)
    // Case 'months' == false (line 326)
    // Case 'dayz' == false (line 329)
    // Case 'hours' == false (line 332)
    // Case 'minutes' == false (line 335)
    // Case 'seconds' == false (line 338)
    // Case 'weeks' == false (line 341)
    // Case 'daysExcludeWeeks' == false (line 344)
    // Case 'dayzExcludeWeeks' == false (line 345)
    // Default (line 348)
    // throw new \InvalidArgumentException(sprintf("Unknown getter '%s'", $name)) -> exception (line 349)

    $actual = $this->carbonInterval->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 322)
    // Case 'years' == false (line 323)
    // Case 'months' == false (line 326)
    // Case 'dayz' == false (line 329)
    // Case 'hours' == false (line 332)
    // Case 'minutes' == false (line 335)
    // Case 'seconds' == false (line 338)
    // Case 'weeks' == false (line 341)
    // Case 'daysExcludeWeeks' == false (line 344)
    // Case 'dayzExcludeWeeks' == true (line 345)

    $actual = $this->carbonInterval->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 322)
    // Case 'years' == false (line 323)
    // Case 'months' == false (line 326)
    // Case 'dayz' == false (line 329)
    // Case 'hours' == false (line 332)
    // Case 'minutes' == false (line 335)
    // Case 'seconds' == false (line 338)
    // Case 'weeks' == false (line 341)
    // Case 'daysExcludeWeeks' == true (line 344)

    $actual = $this->carbonInterval->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 322)
    // Case 'years' == false (line 323)
    // Case 'months' == false (line 326)
    // Case 'dayz' == false (line 329)
    // Case 'hours' == false (line 332)
    // Case 'minutes' == false (line 335)
    // Case 'seconds' == false (line 338)
    // Case 'weeks' == true (line 341)

    $actual = $this->carbonInterval->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get4()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 322)
    // Case 'years' == false (line 323)
    // Case 'months' == false (line 326)
    // Case 'dayz' == false (line 329)
    // Case 'hours' == false (line 332)
    // Case 'minutes' == false (line 335)
    // Case 'seconds' == true (line 338)

    $actual = $this->carbonInterval->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get5()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 322)
    // Case 'years' == false (line 323)
    // Case 'months' == false (line 326)
    // Case 'dayz' == false (line 329)
    // Case 'hours' == false (line 332)
    // Case 'minutes' == true (line 335)

    $actual = $this->carbonInterval->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get6()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 322)
    // Case 'years' == false (line 323)
    // Case 'months' == false (line 326)
    // Case 'dayz' == false (line 329)
    // Case 'hours' == true (line 332)

    $actual = $this->carbonInterval->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get7()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 322)
    // Case 'years' == false (line 323)
    // Case 'months' == false (line 326)
    // Case 'dayz' == true (line 329)

    $actual = $this->carbonInterval->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get8()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 322)
    // Case 'years' == false (line 323)
    // Case 'months' == true (line 326)

    $actual = $this->carbonInterval->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__get9()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 322)
    // Case 'years' == true (line 323)

    $actual = $this->carbonInterval->__get($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set0()
{
    $name = m::mock('UntypedParameter_name_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 363)
    // Case 'years' == false (line 364)
    // Case 'months' == false (line 368)
    // Case 'weeks' == false (line 372)
    // Case 'dayz' == false (line 376)
    // Case 'hours' == false (line 380)
    // Case 'minutes' == false (line 384)
    // Case 'seconds' == false (line 388)

    $actual = $this->carbonInterval->__set($name, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set1()
{
    $name = m::mock('UntypedParameter_name_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 363)
    // Case 'years' == false (line 364)
    // Case 'months' == false (line 368)
    // Case 'weeks' == false (line 372)
    // Case 'dayz' == false (line 376)
    // Case 'hours' == false (line 380)
    // Case 'minutes' == false (line 384)
    // Case 'seconds' == true (line 388)

    $actual = $this->carbonInterval->__set($name, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set2()
{
    $name = m::mock('UntypedParameter_name_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 363)
    // Case 'years' == false (line 364)
    // Case 'months' == false (line 368)
    // Case 'weeks' == false (line 372)
    // Case 'dayz' == false (line 376)
    // Case 'hours' == false (line 380)
    // Case 'minutes' == true (line 384)

    $actual = $this->carbonInterval->__set($name, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set3()
{
    $name = m::mock('UntypedParameter_name_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 363)
    // Case 'years' == false (line 364)
    // Case 'months' == false (line 368)
    // Case 'weeks' == false (line 372)
    // Case 'dayz' == false (line 376)
    // Case 'hours' == true (line 380)

    $actual = $this->carbonInterval->__set($name, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set4()
{
    $name = m::mock('UntypedParameter_name_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 363)
    // Case 'years' == false (line 364)
    // Case 'months' == false (line 368)
    // Case 'weeks' == false (line 372)
    // Case 'dayz' == true (line 376)

    $actual = $this->carbonInterval->__set($name, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set5()
{
    $name = m::mock('UntypedParameter_name_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 363)
    // Case 'years' == false (line 364)
    // Case 'months' == false (line 368)
    // Case 'weeks' == true (line 372)

    $actual = $this->carbonInterval->__set($name, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set6()
{
    $name = m::mock('UntypedParameter_name_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 363)
    // Case 'years' == false (line 364)
    // Case 'months' == true (line 368)

    $actual = $this->carbonInterval->__set($name, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__set7()
{
    $name = m::mock('UntypedParameter_name_');
    $val = m::mock('UntypedParameter_val_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 363)
    // Case 'years' == true (line 364)

    $actual = $this->carbonInterval->__set($name, $val);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWeeksAndDays0()
{
    $weeks = m::mock('UntypedParameter_weeks_');
    $days = m::mock('UntypedParameter_days_');

    // TODO: Your mock expectations here

    $actual = $this->carbonInterval->weeksAndDays($weeks, $days);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == false (line 431)
    // Case 'weeks' == false (line 435)
    // Case 'week' == false (line 436)
    // Case 'days' == false (line 440)
    // Case 'dayz' == false (line 441)
    // Case 'day' == false (line 442)
    // Case 'hours' == false (line 446)
    // Case 'hour' == false (line 447)
    // Case 'minutes' == false (line 451)
    // Case 'minute' == false (line 452)
    // Case 'seconds' == false (line 456)
    // Case 'second' == false (line 457)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == false (line 431)
    // Case 'weeks' == false (line 435)
    // Case 'week' == false (line 436)
    // Case 'days' == false (line 440)
    // Case 'dayz' == false (line 441)
    // Case 'day' == false (line 442)
    // Case 'hours' == false (line 446)
    // Case 'hour' == false (line 447)
    // Case 'minutes' == false (line 451)
    // Case 'minute' == false (line 452)
    // Case 'seconds' == false (line 456)
    // Case 'second' == true (line 457)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call2()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == false (line 431)
    // Case 'weeks' == false (line 435)
    // Case 'week' == false (line 436)
    // Case 'days' == false (line 440)
    // Case 'dayz' == false (line 441)
    // Case 'day' == false (line 442)
    // Case 'hours' == false (line 446)
    // Case 'hour' == false (line 447)
    // Case 'minutes' == false (line 451)
    // Case 'minute' == false (line 452)
    // Case 'seconds' == true (line 456)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call3()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == false (line 431)
    // Case 'weeks' == false (line 435)
    // Case 'week' == false (line 436)
    // Case 'days' == false (line 440)
    // Case 'dayz' == false (line 441)
    // Case 'day' == false (line 442)
    // Case 'hours' == false (line 446)
    // Case 'hour' == false (line 447)
    // Case 'minutes' == false (line 451)
    // Case 'minute' == true (line 452)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call4()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == false (line 431)
    // Case 'weeks' == false (line 435)
    // Case 'week' == false (line 436)
    // Case 'days' == false (line 440)
    // Case 'dayz' == false (line 441)
    // Case 'day' == false (line 442)
    // Case 'hours' == false (line 446)
    // Case 'hour' == false (line 447)
    // Case 'minutes' == true (line 451)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call5()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == false (line 431)
    // Case 'weeks' == false (line 435)
    // Case 'week' == false (line 436)
    // Case 'days' == false (line 440)
    // Case 'dayz' == false (line 441)
    // Case 'day' == false (line 442)
    // Case 'hours' == false (line 446)
    // Case 'hour' == true (line 447)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call6()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == false (line 431)
    // Case 'weeks' == false (line 435)
    // Case 'week' == false (line 436)
    // Case 'days' == false (line 440)
    // Case 'dayz' == false (line 441)
    // Case 'day' == false (line 442)
    // Case 'hours' == true (line 446)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call7()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == false (line 431)
    // Case 'weeks' == false (line 435)
    // Case 'week' == false (line 436)
    // Case 'days' == false (line 440)
    // Case 'dayz' == false (line 441)
    // Case 'day' == true (line 442)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call8()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == false (line 431)
    // Case 'weeks' == false (line 435)
    // Case 'week' == false (line 436)
    // Case 'days' == false (line 440)
    // Case 'dayz' == true (line 441)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call9()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == false (line 431)
    // Case 'weeks' == false (line 435)
    // Case 'week' == false (line 436)
    // Case 'days' == true (line 440)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call10()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == false (line 431)
    // Case 'weeks' == false (line 435)
    // Case 'week' == true (line 436)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call11()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == false (line 431)
    // Case 'weeks' == true (line 435)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call12()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == false (line 430)
    // Case 'month' == true (line 431)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call13()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == false (line 426)
    // Case 'months' == true (line 430)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call14()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == false (line 425)
    // Case 'year' == true (line 426)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call15()
{
    $name = m::mock('UntypedParameter_name_');
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($name) (line 424)
    // Case 'years' == true (line 425)

    $actual = $this->carbonInterval->__call($name, $args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForHumans0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbonInterval->forHumans();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForHumans1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($count > 0) == false (line 484)

    $actual = $this->carbonInterval->forHumans();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForHumans2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($count > 0) == true (line 484)

    $actual = $this->carbonInterval->forHumans();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    $actual = $this->carbonInterval->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd0()
{
    $interval = m::mock(\DateInterval::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::wasCreatedFromDiff($interval)) == false (line 513)

    $actual = $this->carbonInterval->add($interval);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd1()
{
    $interval = m::mock(\DateInterval::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (static::wasCreatedFromDiff($interval)) == true (line 513)

    $actual = $this->carbonInterval->add($interval);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSpec0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($time) > 0) == false (line 552)

    $actual = $this->carbonInterval->spec();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSpec1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($time) > 0) == true (line 552)

    $actual = $this->carbonInterval->spec();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSpec2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($time) > 0) == true (line 552)

    $actual = $this->carbonInterval->spec();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSpec3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($time) > 0) == false (line 552)

    $actual = $this->carbonInterval->spec();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSpec4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($time) > 0) == true (line 552)

    $actual = $this->carbonInterval->spec();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSpec5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($time) > 0) == true (line 552)

    $actual = $this->carbonInterval->spec();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
