<?php

namespace tests;

use Mockery as m;
use PO;

class POTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PO
*/
protected $pO;

public function setUp()
{
    parent::setUp();

    $this->pO = new \PO();
}

public function testExport_headers0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->comments_before_headers) == false (line 37)

    $actual = $this->pO->export_headers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_headers1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->comments_before_headers) == true (line 37)

    $actual = $this->pO->export_headers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_headers2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->comments_before_headers) == false (line 37)

    $actual = $this->pO->export_headers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_headers3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->comments_before_headers) == true (line 37)

    $actual = $this->pO->export_headers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entries0()
{
    // TODO: Your mock expectations here

    $actual = $this->pO->export_entries();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport0()
{
    $include_headers = m::mock('UntypedParameter_include_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($include_headers) == false (line 63)

    $actual = $this->pO->export($include_headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport1()
{
    $include_headers = m::mock('UntypedParameter_include_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($include_headers) == true (line 63)

    $actual = $this->pO->export($include_headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_to_file0()
{
    $filename = m::mock('UntypedParameter_filename_');
    $include_headers = m::mock('UntypedParameter_include_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $fh) == false (line 80)
    // if (\false === $res) == false (line 85)

    $actual = $this->pO->export_to_file($filename, $include_headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_to_file1()
{
    $filename = m::mock('UntypedParameter_filename_');
    $include_headers = m::mock('UntypedParameter_include_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $fh) == false (line 80)
    // if (\false === $res) == true (line 85)

    $actual = $this->pO->export_to_file($filename, $include_headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_to_file2()
{
    $filename = m::mock('UntypedParameter_filename_');
    $include_headers = m::mock('UntypedParameter_include_headers_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $fh) == true (line 80)

    $actual = $this->pO->export_to_file($filename, $include_headers);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_comment_before_headers0()
{
    $text = m::mock('UntypedParameter_text_');

    // TODO: Your mock expectations here

    $actual = $this->pO->set_comment_before_headers($text);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPoify0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false !== \strpos($string, $newline) && (\substr_count($string, $newline) > 1 || !($newline === \substr($string, -\strlen($newline))))) == false (line 122)

    $actual = $this->pO->poify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPoify1()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false !== \strpos($string, $newline) && (\substr_count($string, $newline) > 1 || !($newline === \substr($string, -\strlen($newline))))) == true (line 122)

    $actual = $this->pO->poify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnpoify0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->pO->unpoify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnpoify1()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->pO->unpoify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnpoify2()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$previous_is_backslash) == false (line 153)

    $actual = $this->pO->unpoify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnpoify3()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$previous_is_backslash) == true (line 153)
    // if ('\\' == $char) == false (line 154)

    $actual = $this->pO->unpoify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnpoify4()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$previous_is_backslash) == true (line 153)
    // if ('\\' == $char) == true (line 154)

    $actual = $this->pO->unpoify($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepend_each_line0()
{
    $string = m::mock('UntypedParameter_string_');
    $with = m::mock('UntypedParameter_with_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ("\n" === \substr($string, -1) && '' === \end($lines)) == false (line 183)

    $actual = $this->pO->prepend_each_line($string, $with);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepend_each_line1()
{
    $string = m::mock('UntypedParameter_string_');
    $with = m::mock('UntypedParameter_with_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ("\n" === \substr($string, -1) && '' === \end($lines)) == false (line 183)

    $actual = $this->pO->prepend_each_line($string, $with);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepend_each_line2()
{
    $string = m::mock('UntypedParameter_string_');
    $with = m::mock('UntypedParameter_with_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ("\n" === \substr($string, -1) && '' === \end($lines)) == true (line 183)

    $actual = $this->pO->prepend_each_line($string, $with);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPrepend_each_line3()
{
    $string = m::mock('UntypedParameter_string_');
    $with = m::mock('UntypedParameter_with_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ("\n" === \substr($string, -1) && '' === \end($lines)) == true (line 183)

    $actual = $this->pO->prepend_each_line($string, $with);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testComment_block0()
{
    $text = m::mock('UntypedParameter_text_');
    $char = m::mock('UntypedParameter_char_');

    // TODO: Your mock expectations here

    $actual = $this->pO->comment_block($text, $char);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry0()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry1()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry2()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry3()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry4()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry5()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry6()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry7()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry8()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry9()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry10()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry11()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry12()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry13()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry14()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry15()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry16()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry17()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry18()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry19()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry20()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry21()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry22()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry23()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry24()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry25()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry26()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry27()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry28()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry29()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry30()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry31()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry32()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry33()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry34()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry35()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry36()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry37()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry38()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry39()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry40()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry41()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry42()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry43()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry44()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry45()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry46()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry47()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == false (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry48()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry49()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry50()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry51()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry52()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry53()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry54()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry55()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry56()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry57()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry58()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry59()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry60()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry61()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry62()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry63()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry64()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry65()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry66()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry67()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry68()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry69()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry70()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry71()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == false (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry72()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry73()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry74()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry75()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry76()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry77()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry78()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry79()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry80()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry81()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry82()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry83()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == false (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry84()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry85()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry86()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry87()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry88()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry89()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == false (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry90()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry91()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry92()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == false (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry93()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry94()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == false (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry95()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == false (line 220)
    // if (!empty($entry->translator_comments)) == true (line 224)
    // if (!empty($entry->extracted_comments)) == true (line 227)
    // if (!empty($entry->references)) == true (line 230)
    // if (!empty($entry->flags)) == true (line 233)
    // if ($entry->context) == true (line 236)
    // if (!$entry->is_plural) == true (line 240)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_entry96()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\null === $entry->singular || '' === $entry->singular) == true (line 220)

    $actual = $this->pO->export_entry($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines0()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == false (line 265)
    // if ($translation_begin) == false (line 269)
    // if ($original_end) == false (line 273)
    // if ($translation_end) == false (line 277)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines1()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == false (line 265)
    // if ($translation_begin) == false (line 269)
    // if ($original_end) == false (line 273)
    // if ($translation_end) == true (line 277)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines2()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == false (line 265)
    // if ($translation_begin) == false (line 269)
    // if ($original_end) == true (line 273)
    // if (!$translation_end) == false (line 274)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines3()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == false (line 265)
    // if ($translation_begin) == false (line 269)
    // if ($original_end) == true (line 273)
    // if (!$translation_end) == true (line 274)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines4()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == false (line 265)
    // if ($translation_begin) == true (line 269)
    // if ($original_end) == false (line 273)
    // if ($translation_end) == false (line 277)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines5()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == false (line 265)
    // if ($translation_begin) == true (line 269)
    // if ($original_end) == false (line 273)
    // if ($translation_end) == true (line 277)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines6()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == false (line 265)
    // if ($translation_begin) == true (line 269)
    // if ($original_end) == true (line 273)
    // if (!$translation_end) == false (line 274)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines7()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == false (line 265)
    // if ($translation_begin) == true (line 269)
    // if ($original_end) == true (line 273)
    // if (!$translation_end) == true (line 274)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines8()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == true (line 265)
    // if (!$translation_begin) == false (line 266)
    // if ($original_end) == false (line 273)
    // if ($translation_end) == false (line 277)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines9()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == true (line 265)
    // if (!$translation_begin) == false (line 266)
    // if ($original_end) == false (line 273)
    // if ($translation_end) == true (line 277)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines10()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == true (line 265)
    // if (!$translation_begin) == false (line 266)
    // if ($original_end) == true (line 273)
    // if (!$translation_end) == false (line 274)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines11()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == true (line 265)
    // if (!$translation_begin) == false (line 266)
    // if ($original_end) == true (line 273)
    // if (!$translation_end) == true (line 274)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines12()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == true (line 265)
    // if (!$translation_begin) == true (line 266)
    // if ($original_end) == false (line 273)
    // if ($translation_end) == false (line 277)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines13()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == true (line 265)
    // if (!$translation_begin) == true (line 266)
    // if ($original_end) == false (line 273)
    // if ($translation_end) == true (line 277)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines14()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == true (line 265)
    // if (!$translation_begin) == true (line 266)
    // if ($original_end) == true (line 273)
    // if (!$translation_end) == false (line 274)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines15()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == false (line 256)
    // if ($original_begin) == true (line 265)
    // if (!$translation_begin) == true (line 266)
    // if ($original_end) == true (line 273)
    // if (!$translation_end) == true (line 274)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_begin_and_end_newlines16()
{
    $translation = m::mock('UntypedParameter_translation_');
    $original = m::mock('UntypedParameter_original_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $translation) == true (line 256)

    $actual = $this->pO->match_begin_and_end_newlines($translation, $original);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file0()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == false (line 290)
    // while (\true) == false (line 294)
    // if (\false === $res) == false (line 306)
    // if (!$this->headers && !$this->entries) == false (line 309)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file1()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == false (line 290)
    // while (\true) == false (line 294)
    // if (\false === $res) == false (line 306)
    // if (!$this->headers && !$this->entries) == true (line 309)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file2()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == false (line 290)
    // while (\true) == false (line 294)
    // if (\false === $res) == true (line 306)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file3()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == false (line 290)
    // while (\true) == true (line 294)
    // if (!$res) == false (line 296)
    // if ($res['entry']->singular == '') == false (line 299)
    // while (\true) == false (line 294)
    // if (\false === $res) == false (line 306)
    // if (!$this->headers && !$this->entries) == false (line 309)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file4()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == false (line 290)
    // while (\true) == true (line 294)
    // if (!$res) == false (line 296)
    // if ($res['entry']->singular == '') == false (line 299)
    // while (\true) == false (line 294)
    // if (\false === $res) == false (line 306)
    // if (!$this->headers && !$this->entries) == true (line 309)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file5()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == false (line 290)
    // while (\true) == true (line 294)
    // if (!$res) == false (line 296)
    // if ($res['entry']->singular == '') == false (line 299)
    // while (\true) == false (line 294)
    // if (\false === $res) == true (line 306)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file6()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == false (line 290)
    // while (\true) == true (line 294)
    // if (!$res) == false (line 296)
    // if ($res['entry']->singular == '') == true (line 299)
    // while (\true) == false (line 294)
    // if (\false === $res) == false (line 306)
    // if (!$this->headers && !$this->entries) == false (line 309)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file7()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == false (line 290)
    // while (\true) == true (line 294)
    // if (!$res) == false (line 296)
    // if ($res['entry']->singular == '') == true (line 299)
    // while (\true) == false (line 294)
    // if (\false === $res) == false (line 306)
    // if (!$this->headers && !$this->entries) == true (line 309)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file8()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == false (line 290)
    // while (\true) == true (line 294)
    // if (!$res) == false (line 296)
    // if ($res['entry']->singular == '') == true (line 299)
    // while (\true) == false (line 294)
    // if (\false === $res) == true (line 306)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file9()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == false (line 290)
    // while (\true) == true (line 294)
    // if (!$res) == true (line 296)
    // if (\false === $res) == false (line 306)
    // if (!$this->headers && !$this->entries) == false (line 309)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file10()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == false (line 290)
    // while (\true) == true (line 294)
    // if (!$res) == true (line 296)
    // if (\false === $res) == false (line 306)
    // if (!$this->headers && !$this->entries) == true (line 309)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file11()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == false (line 290)
    // while (\true) == true (line 294)
    // if (!$res) == true (line 296)
    // if (\false === $res) == true (line 306)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file12()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$f) == true (line 290)

    $actual = $this->pO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry0()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry1()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry2()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry3()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry4()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry5()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry6()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == false (line 411)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry7()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == false (line 423)
    // Case 'msgstr_plural' == false (line 426)
    // Default (line 429)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry8()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == false (line 423)
    // Case 'msgstr_plural' == true (line 426)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry9()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == false (line 423)
    // Case 'msgstr_plural' == true (line 426)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry10()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == false (line 423)
    // Case 'msgstr_plural' == true (line 426)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry11()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == false (line 423)
    // Case 'msgstr_plural' == true (line 426)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry12()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == false (line 423)
    // Case 'msgstr_plural' == true (line 426)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry13()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == false (line 423)
    // Case 'msgstr_plural' == true (line 426)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry14()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == true (line 423)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry15()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == true (line 423)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry16()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == true (line 423)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry17()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == true (line 423)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry18()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == true (line 423)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry19()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == false (line 420)
    // Case 'msgstr' == true (line 423)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry20()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == true (line 420)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry21()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == true (line 420)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry22()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == true (line 420)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry23()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == true (line 420)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry24()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == true (line 420)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry25()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == false (line 417)
    // Case 'msgid_plural' == true (line 420)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry26()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == true (line 417)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry27()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == true (line 417)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry28()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == true (line 417)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry29()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == true (line 417)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry30()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == true (line 417)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry31()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == false (line 414)
    // Case 'msgctxt' == true (line 417)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry32()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == true (line 414)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry33()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == true (line 414)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry34()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == true (line 414)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry35()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == true (line 414)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry36()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == true (line 414)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry37()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == false (line 404)
    // if (\preg_match('/^".*"$/', $line)) == true (line 411)
    // switch ($context) (line 413)
    // Case 'msgid' == true (line 414)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry38()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == true (line 404)
    // if ($context != 'msgid_plural' && $context != 'msgstr_plural') == false (line 405)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry39()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == true (line 404)
    // if ($context != 'msgid_plural' && $context != 'msgstr_plural') == false (line 405)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry40()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == true (line 404)
    // if ($context != 'msgid_plural' && $context != 'msgstr_plural') == false (line 405)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry41()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == true (line 404)
    // if ($context != 'msgid_plural' && $context != 'msgstr_plural') == false (line 405)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry42()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == true (line 404)
    // if ($context != 'msgid_plural' && $context != 'msgstr_plural') == false (line 405)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry43()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == true (line 404)
    // if ($context != 'msgid_plural' && $context != 'msgstr_plural') == false (line 405)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry44()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == false (line 398)
    // if (\preg_match('/^msgstr\\[(\\d+)\\]\\s+(".*")/', $line, $m)) == true (line 404)
    // if ($context != 'msgid_plural' && $context != 'msgstr_plural') == true (line 405)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry45()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == true (line 398)
    // if ($context != 'msgid') == false (line 399)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry46()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == true (line 398)
    // if ($context != 'msgid') == false (line 399)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry47()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == true (line 398)
    // if ($context != 'msgid') == false (line 399)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry48()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == true (line 398)
    // if ($context != 'msgid') == false (line 399)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry49()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == true (line 398)
    // if ($context != 'msgid') == false (line 399)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry50()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == true (line 398)
    // if ($context != 'msgid') == false (line 399)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry51()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == false (line 391)
    // if (\preg_match('/^msgstr\\s+(".*")/', $line, $m)) == true (line 398)
    // if ($context != 'msgid') == true (line 399)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry52()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == true (line 391)
    // if ($context != 'msgid') == false (line 392)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry53()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == true (line 391)
    // if ($context != 'msgid') == false (line 392)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry54()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == true (line 391)
    // if ($context != 'msgid') == false (line 392)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry55()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == true (line 391)
    // if ($context != 'msgid') == false (line 392)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry56()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == true (line 391)
    // if ($context != 'msgid') == false (line 392)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry57()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == true (line 391)
    // if ($context != 'msgid') == false (line 392)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry58()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == false (line 380)
    // if (\preg_match('/^msgid_plural\\s+(".*")/', $line, $m)) == true (line 391)
    // if ($context != 'msgid') == true (line 392)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry59()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == false (line 381)
    // if ($context && $context != 'msgctxt' && $context != 'comment') == false (line 386)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry60()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == false (line 381)
    // if ($context && $context != 'msgctxt' && $context != 'comment') == false (line 386)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry61()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == false (line 381)
    // if ($context && $context != 'msgctxt' && $context != 'comment') == false (line 386)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry62()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == false (line 381)
    // if ($context && $context != 'msgctxt' && $context != 'comment') == false (line 386)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry63()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == false (line 381)
    // if ($context && $context != 'msgctxt' && $context != 'comment') == false (line 386)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry64()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == false (line 381)
    // if ($context && $context != 'msgctxt' && $context != 'comment') == false (line 386)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry65()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == false (line 381)
    // if ($context && $context != 'msgctxt' && $context != 'comment') == true (line 386)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry66()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == true (line 381)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry67()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == true (line 381)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry68()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == true (line 381)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry69()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == true (line 381)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry70()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == true (line 381)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry71()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == false (line 369)
    // if (\preg_match('/^msgid\\s+(".*")/', $line, $m)) == true (line 380)
    // if (self::is_final($context)) == true (line 381)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry72()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == false (line 370)
    // if ($context && $context != 'comment') == false (line 375)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry73()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == false (line 370)
    // if ($context && $context != 'comment') == false (line 375)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry74()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == false (line 370)
    // if ($context && $context != 'comment') == false (line 375)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry75()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == false (line 370)
    // if ($context && $context != 'comment') == false (line 375)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry76()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == false (line 370)
    // if ($context && $context != 'comment') == false (line 375)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry77()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == false (line 370)
    // if ($context && $context != 'comment') == false (line 375)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry78()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == false (line 370)
    // if ($context && $context != 'comment') == true (line 375)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry79()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == true (line 370)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry80()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == true (line 370)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry81()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == true (line 370)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry82()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == true (line 370)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry83()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == true (line 370)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry84()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == false (line 356)
    // if (\preg_match('/^msgctxt\\s+(".*")/', $line, $m)) == true (line 369)
    // if (self::is_final($context)) == true (line 370)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry85()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == false (line 358)
    // if ($context && $context != 'comment') == false (line 364)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry86()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == false (line 358)
    // if ($context && $context != 'comment') == false (line 364)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry87()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == false (line 358)
    // if ($context && $context != 'comment') == false (line 364)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry88()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == false (line 358)
    // if ($context && $context != 'comment') == false (line 364)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry89()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == false (line 358)
    // if ($context && $context != 'comment') == false (line 364)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry90()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == false (line 358)
    // if ($context && $context != 'comment') == false (line 364)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry91()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == false (line 358)
    // if ($context && $context != 'comment') == true (line 364)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry92()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == true (line 358)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry93()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == true (line 358)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry94()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == true (line 358)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry95()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == true (line 358)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry96()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == true (line 358)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry97()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == false (line 352)
    // if (\preg_match('/^#/', $line, $m)) == true (line 356)
    // if (self::is_final($context)) == true (line 358)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry98()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == true (line 352)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry99()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == true (line 352)
    // while (\true) == false (line 336)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry100()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == true (line 352)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry101()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == true (line 352)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry102()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == true (line 352)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry103()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == false (line 339)
    // if ($line == "\n") == true (line 352)
    // while (\true) == false (line 336)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry104()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == true (line 339)
    // if (\feof($f)) == false (line 340)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry105()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == true (line 339)
    // if (\feof($f)) == true (line 340)
    // if (self::is_final($context)) == false (line 341)
    // if (!$context) == false (line 343)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry106()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == true (line 339)
    // if (\feof($f)) == true (line 340)
    // if (self::is_final($context)) == false (line 341)
    // if (!$context) == true (line 343)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry107()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == true (line 339)
    // if (\feof($f)) == true (line 340)
    // if (self::is_final($context)) == true (line 341)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry108()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == true (line 339)
    // if (\feof($f)) == true (line 340)
    // if (self::is_final($context)) == true (line 341)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry109()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == true (line 339)
    // if (\feof($f)) == true (line 340)
    // if (self::is_final($context)) == true (line 341)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry110()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == true (line 339)
    // if (\feof($f)) == true (line 340)
    // if (self::is_final($context)) == true (line 341)
    // if ($t || '0' === $t) == false (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry111()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == true (line 339)
    // if (\feof($f)) == true (line 340)
    // if (self::is_final($context)) == true (line 341)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == false (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_entry112()
{
    $f = m::mock('UntypedParameter_f_');
    $lineno = m::mock('UntypedParameter_lineno_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (\true) == true (line 336)
    // if (!$line) == true (line 339)
    // if (\feof($f)) == true (line 340)
    // if (self::is_final($context)) == true (line 341)
    // if ($t || '0' === $t) == true (line 439)
    // if (\false === $have_translations) == true (line 444)

    $actual = $this->pO->read_entry($f, $lineno);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_line0()
{
    $f = m::mock('UntypedParameter_f_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('clear' == $action) == false (line 465)
    // if ('put-back' == $action) == false (line 469)

    $actual = $this->pO->read_line($f, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_line1()
{
    $f = m::mock('UntypedParameter_f_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('clear' == $action) == false (line 465)
    // if ('put-back' == $action) == true (line 469)

    $actual = $this->pO->read_line($f, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead_line2()
{
    $f = m::mock('UntypedParameter_f_');
    $action = m::mock('UntypedParameter_action_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('clear' == $action) == true (line 465)

    $actual = $this->pO->read_line($f, $action);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_comment_to_entry0()
{
    $entry = m::mock('UntypedParameter_entry_');
    $po_comment_line = m::mock('UntypedParameter_po_comment_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('#:' == $first_two) == false (line 487)
    // if ('#.' == $first_two) == false (line 489)
    // if ('#,' == $first_two) == false (line 491)

    $actual = $this->pO->add_comment_to_entry($entry, $po_comment_line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_comment_to_entry1()
{
    $entry = m::mock('UntypedParameter_entry_');
    $po_comment_line = m::mock('UntypedParameter_po_comment_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('#:' == $first_two) == false (line 487)
    // if ('#.' == $first_two) == false (line 489)
    // if ('#,' == $first_two) == true (line 491)

    $actual = $this->pO->add_comment_to_entry($entry, $po_comment_line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_comment_to_entry2()
{
    $entry = m::mock('UntypedParameter_entry_');
    $po_comment_line = m::mock('UntypedParameter_po_comment_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('#:' == $first_two) == false (line 487)
    // if ('#.' == $first_two) == true (line 489)

    $actual = $this->pO->add_comment_to_entry($entry, $po_comment_line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_comment_to_entry3()
{
    $entry = m::mock('UntypedParameter_entry_');
    $po_comment_line = m::mock('UntypedParameter_po_comment_line_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('#:' == $first_two) == true (line 487)

    $actual = $this->pO->add_comment_to_entry($entry, $po_comment_line);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTrim_quotes0()
{
    $s = m::mock('UntypedParameter_s_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($s, 0, 1) == '"') == false (line 503)
    // if (\substr($s, -1, 1) == '"') == false (line 506)

    $actual = $this->pO->trim_quotes($s);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTrim_quotes1()
{
    $s = m::mock('UntypedParameter_s_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($s, 0, 1) == '"') == false (line 503)
    // if (\substr($s, -1, 1) == '"') == true (line 506)

    $actual = $this->pO->trim_quotes($s);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTrim_quotes2()
{
    $s = m::mock('UntypedParameter_s_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($s, 0, 1) == '"') == true (line 503)
    // if (\substr($s, -1, 1) == '"') == false (line 506)

    $actual = $this->pO->trim_quotes($s);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTrim_quotes3()
{
    $s = m::mock('UntypedParameter_s_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr($s, 0, 1) == '"') == true (line 503)
    // if (\substr($s, -1, 1) == '"') == true (line 506)

    $actual = $this->pO->trim_quotes($s);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
