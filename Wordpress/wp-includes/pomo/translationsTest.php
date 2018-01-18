<?php

namespace tests;

use Mockery as m;
use NOOP_Translations;

class NOOP_TranslationsTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \NOOP_Translations
*/
protected $nOOP_Translations;

public function setUp()
{
    parent::setUp();

    $this->nOOP_Translations = new \NOOP_Translations();
}

public function testAdd_entry0()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    $actual = $this->nOOP_Translations->add_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_header0()
{
    $header = m::mock('UntypedParameter_header_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->nOOP_Translations->set_header($header, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_headers0()
{
    $headers = m::mock('UntypedParameter_headers_');

    // TODO: Your mock expectations here

    $actual = $this->nOOP_Translations->set_headers($headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_header0()
{
    $header = m::mock('UntypedParameter_header_');

    // TODO: Your mock expectations here

    $actual = $this->nOOP_Translations->get_header($header);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTranslate_entry0()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    $actual = $this->nOOP_Translations->translate_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTranslate0()
{
    $singular = m::mock('UntypedParameter_singular_');
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    $actual = $this->nOOP_Translations->translate($singular, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSelect_plural_form0()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    $actual = $this->nOOP_Translations->select_plural_form($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_plural_forms_count0()
{
    // TODO: Your mock expectations here

    $actual = $this->nOOP_Translations->get_plural_forms_count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTranslate_plural0()
{
    $singular = m::mock('UntypedParameter_singular_');
    $plural = m::mock('UntypedParameter_plural_');
    $count = m::mock('UntypedParameter_count_');
    $context = m::mock('UntypedParameter_context_');

    // TODO: Your mock expectations here

    $actual = $this->nOOP_Translations->translate_plural($singular, $plural, $count, $context);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMerge_with0()
{
    $other = m::mock('UntypedParameter_other_');

    // TODO: Your mock expectations here

    $actual = $this->nOOP_Translations->merge_with($other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
