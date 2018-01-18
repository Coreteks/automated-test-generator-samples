<?php

namespace tests;

use CI_Lang;
use Mockery as m;

class CI_LangTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Lang
*/
protected $cI_Lang;

public function setUp()
{
    parent::setUp();

    $this->cI_Lang = new \CI_Lang();
}

public function testLoad0()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad2()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad3()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad4()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad5()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad6()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad7()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad8()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad9()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad10()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad11()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad12()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad13()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad14()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad15()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad16()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad17()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad18()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad19()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad20()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad21()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad22()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad23()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad24()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad25()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad26()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad27()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad28()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad29()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad30()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad31()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad32()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad33()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad34()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad35()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad36()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad37()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad38()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad39()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad40()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad41()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad42()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad43()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad44()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad45()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad46()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad47()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad48()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad49()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad50()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad51()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad52()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad53()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad54()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad55()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad56()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad57()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad58()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad59()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad60()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad61()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad62()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad63()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad64()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad65()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad66()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad67()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad68()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad69()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad70()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad71()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad72()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad73()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad74()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad75()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad76()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad77()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad78()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad79()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad80()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == true (line 115)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad81()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad82()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad83()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad84()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad85()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad86()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad87()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad88()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad89()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad90()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad91()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad92()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad93()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad94()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad95()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad96()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad97()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad98()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad99()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad100()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad101()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad102()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad103()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad104()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad105()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad106()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad107()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad108()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad109()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad110()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad111()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad112()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad113()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad114()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad115()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad116()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad117()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad118()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad119()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad120()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad121()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad122()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad123()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad124()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad125()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad126()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad127()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad128()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad129()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad130()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad131()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad132()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad133()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad134()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad135()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad136()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad137()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad138()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad139()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad140()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad141()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad142()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad143()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad144()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad145()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad146()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad147()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad148()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad149()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad150()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad151()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad152()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad153()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad154()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad155()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad156()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad157()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad158()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad159()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad160()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad161()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == false (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == true (line 115)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad162()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad163()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad164()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad165()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad166()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad167()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad168()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad169()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad170()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad171()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad172()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad173()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad174()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad175()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad176()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad177()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad178()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad179()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad180()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad181()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad182()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad183()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad184()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad185()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad186()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad187()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad188()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad189()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad190()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad191()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad192()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad193()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad194()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad195()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad196()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad197()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad198()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad199()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad200()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad201()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad202()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad203()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad204()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad205()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad206()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad207()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad208()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad209()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad210()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad211()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad212()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad213()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad214()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad215()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad216()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad217()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad218()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad219()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad220()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad221()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad222()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad223()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad224()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad225()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad226()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad227()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad228()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad229()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad230()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad231()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad232()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad233()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad234()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad235()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad236()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad237()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad238()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad239()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad240()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad241()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad242()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == false (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == true (line 115)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad243()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad244()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad245()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad246()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad247()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad248()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad249()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad250()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad251()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad252()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad253()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad254()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad255()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad256()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad257()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad258()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad259()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad260()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad261()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad262()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad263()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad264()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad265()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad266()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad267()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad268()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad269()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad270()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad271()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad272()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad273()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad274()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad275()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad276()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad277()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad278()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad279()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad280()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad281()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad282()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == false (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad283()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad284()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad285()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad286()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad287()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad288()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad289()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad290()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad291()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad292()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad293()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad294()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad295()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad296()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad297()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad298()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == false (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad299()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad300()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad301()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad302()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad303()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad304()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad305()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad306()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == false (line 128)
    // if ($basepath !== $package_path && \file_exists($package_path)) == true (line 142)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad307()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad308()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad309()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad310()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad311()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad312()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad313()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad314()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == false (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad315()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad316()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad317()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad318()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == false (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad319()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == false (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad320()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == false (line 156)
    // if ($return === \TRUE) == true (line 167)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad321()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == false (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad322()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == false (line 115)
    // if (($found = \file_exists($basepath)) === \TRUE) == true (line 122)
    // if ($alt_path !== '') == true (line 128)
    // if (\file_exists($alt_path)) == true (line 131)
    // if ($found !== \TRUE) == true (line 151)
    // if (!isset($lang) or !\is_array($lang)) == true (line 156)
    // if ($return === \TRUE) == true (line 160)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad323()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == false (line 90)
    // if ($add_suffix === \TRUE) == true (line 102)
    // if (empty($idiom) or !\preg_match('/^[a-z_-]+$/i', $idiom)) == true (line 109)
    // if ($return === \FALSE && isset($this->is_loaded[$langfile]) && $this->is_loaded[$langfile] === $idiom) == true (line 115)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad324()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == true (line 90)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad325()
{
    $langfile = m::mock('UntypedParameter_langfile_');
    $idiom = m::mock('UntypedParameter_idiom_');
    $return = m::mock('UntypedParameter_return_');
    $add_suffix = m::mock('UntypedParameter_add_suffix_');
    $alt_path = m::mock('UntypedParameter_alt_path_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_array($langfile)) == true (line 90)

    $actual = $this->cI_Lang->load($langfile, $idiom, $return, $add_suffix, $alt_path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLine0()
{
    $line = m::mock('UntypedParameter_line_');
    $log_errors = m::mock('UntypedParameter_log_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value === \FALSE && $log_errors === \TRUE) == false (line 195)

    $actual = $this->cI_Lang->line($line, $log_errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLine1()
{
    $line = m::mock('UntypedParameter_line_');
    $log_errors = m::mock('UntypedParameter_log_errors_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value === \FALSE && $log_errors === \TRUE) == true (line 195)

    $actual = $this->cI_Lang->line($line, $log_errors);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
