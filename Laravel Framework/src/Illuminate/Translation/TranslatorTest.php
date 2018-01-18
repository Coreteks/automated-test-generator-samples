<?php

namespace tests\Illuminate\Translation;

use Illuminate\Contracts\Translation\Loader;
use Illuminate\Translation\Translator;
use Mockery as m;

class TranslatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_loader;
/**
* @var mixed
*/
protected $_locale = null;
/**
* @var \Illuminate\Translation\Translator
*/
protected $translator;

public function setUp()
{
    parent::setUp();

    $this->_loader = m::mock(\Illuminate\Contracts\Translation\Loader::class);
    $this->_locale = null;
    $this->translator = new \Illuminate\Translation\Translator($this->_loader, $this->_locale);
}

public function testHasForLocale0()
{
    $key = m::mock('UntypedParameter_key_');
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    $actual = $this->translator->hasForLocale($key, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas0()
{
    $key = m::mock('UntypedParameter_key_');
    $locale = m::mock('UntypedParameter_locale_');
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    $actual = $this->translator->has($key, $locale, $fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTrans0()
{
    $key = m::mock('UntypedParameter_key_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    $actual = $this->translator->trans($key, $replace, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($line)) == false (line 134)

    $actual = $this->translator->get($key, $replace, $locale, $fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $key = m::mock('UntypedParameter_key_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($line)) == true (line 134)

    $actual = $this->translator->get($key, $replace, $locale, $fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet2()
{
    $key = m::mock('UntypedParameter_key_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($line = $this->getLine($namespace, $group, $locale, $item, $replace))) == false (line 124)
    // if (isset($line)) == false (line 134)

    $actual = $this->translator->get($key, $replace, $locale, $fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet3()
{
    $key = m::mock('UntypedParameter_key_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($line = $this->getLine($namespace, $group, $locale, $item, $replace))) == false (line 124)
    // if (isset($line)) == true (line 134)

    $actual = $this->translator->get($key, $replace, $locale, $fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet4()
{
    $key = m::mock('UntypedParameter_key_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($line = $this->getLine($namespace, $group, $locale, $item, $replace))) == true (line 124)
    // if (isset($line)) == false (line 134)

    $actual = $this->translator->get($key, $replace, $locale, $fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet5()
{
    $key = m::mock('UntypedParameter_key_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($line = $this->getLine($namespace, $group, $locale, $item, $replace))) == true (line 124)
    // if (isset($line)) == true (line 134)

    $actual = $this->translator->get($key, $replace, $locale, $fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFromJson0()
{
    $key = m::mock('UntypedParameter_key_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($line)) == false (line 163)

    $actual = $this->translator->getFromJson($key, $replace, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFromJson1()
{
    $key = m::mock('UntypedParameter_key_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($line)) == true (line 163)
    // if ($fallback !== $key) == false (line 166)

    $actual = $this->translator->getFromJson($key, $replace, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFromJson2()
{
    $key = m::mock('UntypedParameter_key_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($line)) == true (line 163)
    // if ($fallback !== $key) == true (line 166)

    $actual = $this->translator->getFromJson($key, $replace, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransChoice0()
{
    $key = m::mock('UntypedParameter_key_');
    $number = m::mock('UntypedParameter_number_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    $actual = $this->translator->transChoice($key, $number, $replace, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChoice0()
{
    $key = m::mock('UntypedParameter_key_');
    $number = m::mock('UntypedParameter_number_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($number) || $number instanceof \Countable) == false (line 206)

    $actual = $this->translator->choice($key, $number, $replace, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testChoice1()
{
    $key = m::mock('UntypedParameter_key_');
    $number = m::mock('UntypedParameter_number_');
    $replace = [];
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array($number) || $number instanceof \Countable) == true (line 206)

    $actual = $this->translator->choice($key, $number, $replace, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddLines0()
{
    $lines = [];
    $locale = m::mock('UntypedParameter_locale_');
    $namespace = m::mock('UntypedParameter_namespace_');

    // TODO: Your mock expectations here

    $actual = $this->translator->addLines($lines, $locale, $namespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddLines1()
{
    $lines = [];
    $locale = m::mock('UntypedParameter_locale_');
    $namespace = m::mock('UntypedParameter_namespace_');

    // TODO: Your mock expectations here

    $actual = $this->translator->addLines($lines, $locale, $namespace);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad0()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $group = m::mock('UntypedParameter_group_');
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isLoaded($namespace, $group, $locale)) == false (line 317)

    $actual = $this->translator->load($namespace, $group, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoad1()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $group = m::mock('UntypedParameter_group_');
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->isLoaded($namespace, $group, $locale)) == true (line 317)

    $actual = $this->translator->load($namespace, $group, $locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddNamespace0()
{
    $namespace = m::mock('UntypedParameter_namespace_');
    $hint = m::mock('UntypedParameter_hint_');

    // TODO: Your mock expectations here

    $actual = $this->translator->addNamespace($namespace, $hint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddJsonPath0()
{
    $path = m::mock('UntypedParameter_path_');

    // TODO: Your mock expectations here

    $actual = $this->translator->addJsonPath($path);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseKey0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($segments[0])) == false (line 375)

    $actual = $this->translator->parseKey($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseKey1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_null($segments[0])) == true (line 375)

    $actual = $this->translator->parseKey($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSelector0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->selector)) == false (line 400)

    $actual = $this->translator->getSelector();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetSelector1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->selector)) == true (line 400)

    $actual = $this->translator->getSelector();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetSelector0()
{
    $selector = m::mock(\Illuminate\Translation\MessageSelector::class);

    // TODO: Your mock expectations here

    $actual = $this->translator->setSelector($selector);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLoader0()
{
    // TODO: Your mock expectations here

    $actual = $this->translator->getLoader();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLocale0()
{
    // TODO: Your mock expectations here

    $actual = $this->translator->locale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLocale0()
{
    // TODO: Your mock expectations here

    $actual = $this->translator->getLocale();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetLocale0()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    $actual = $this->translator->setLocale($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetFallback0()
{
    // TODO: Your mock expectations here

    $actual = $this->translator->getFallback();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetFallback0()
{
    $fallback = m::mock('UntypedParameter_fallback_');

    // TODO: Your mock expectations here

    $actual = $this->translator->setFallback($fallback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
