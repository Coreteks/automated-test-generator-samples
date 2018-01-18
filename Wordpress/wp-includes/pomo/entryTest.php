<?php

namespace tests;

use Mockery as m;
use Translation_Entry;

class Translation_EntryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_args = null;
/**
* @var \Translation_Entry
*/
protected $translation_Entry;

public function setUp()
{
    parent::setUp();

    $this->_args = null;
    $this->translation_Entry = new \Translation_Entry($this->_args);
}

public function testTranslation_Entry0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    $actual = $this->translation_Entry->Translation_Entry($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKey0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $this->singular || '' === $this->singular) == false (line 79)

    $actual = $this->translation_Entry->key();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKey1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $this->singular || '' === $this->singular) == true (line 79)

    $actual = $this->translation_Entry->key();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMerge_with0()
{
    $other = m::mock('UntypedParameter_other_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->extracted_comments != $other->extracted_comments) == false (line 97)

    $actual = $this->translation_Entry->merge_with($other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMerge_with1()
{
    $other = m::mock('UntypedParameter_other_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->extracted_comments != $other->extracted_comments) == true (line 97)

    $actual = $this->translation_Entry->merge_with($other);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
