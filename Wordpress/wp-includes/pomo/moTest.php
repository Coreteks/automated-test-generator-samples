<?php

namespace tests;

use MO;
use Mockery as m;

class MOTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \MO
*/
protected $mO;

public function setUp()
{
    parent::setUp();

    $this->mO = new \MO();
}

public function testGet_filename0()
{
    // TODO: Your mock expectations here

    $actual = $this->mO->get_filename();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file0()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$reader->is_resource()) == false (line 42)

    $actual = $this->mO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_file1()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$reader->is_resource()) == true (line 42)

    $actual = $this->mO->import_from_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_to_file0()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$fh) == false (line 57)

    $actual = $this->mO->export_to_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_to_file1()
{
    $filename = m::mock('UntypedParameter_filename_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$fh) == true (line 57)

    $actual = $this->mO->export_to_file($filename);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$tmp_fh) == false (line 70)

    $actual = $this->mO->export();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$tmp_fh) == true (line 70)

    $actual = $this->mO->export();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_entry_good_for_export0()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($entry->translations)) == false (line 83)
    // if (!\array_filter($entry->translations)) == false (line 87)

    $actual = $this->mO->is_entry_good_for_export($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_entry_good_for_export1()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($entry->translations)) == false (line 83)
    // if (!\array_filter($entry->translations)) == true (line 87)

    $actual = $this->mO->is_entry_good_for_export($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_entry_good_for_export2()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($entry->translations)) == true (line 83)

    $actual = $this->mO->is_entry_good_for_export($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_to_file_handle0()
{
    $fh = m::mock('UntypedParameter_fh_');

    // TODO: Your mock expectations here

    $actual = $this->mO->export_to_file_handle($fh);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_to_file_handle1()
{
    $fh = m::mock('UntypedParameter_fh_');

    // TODO: Your mock expectations here

    $actual = $this->mO->export_to_file_handle($fh);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_to_file_handle2()
{
    $fh = m::mock('UntypedParameter_fh_');

    // TODO: Your mock expectations here

    $actual = $this->mO->export_to_file_handle($fh);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_to_file_handle3()
{
    $fh = m::mock('UntypedParameter_fh_');

    // TODO: Your mock expectations here

    $actual = $this->mO->export_to_file_handle($fh);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_original0()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($entry->is_plural) == false (line 155)
    // if ($entry->context) == false (line 158)

    $actual = $this->mO->export_original($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_original1()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($entry->is_plural) == false (line 155)
    // if ($entry->context) == true (line 158)

    $actual = $this->mO->export_original($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_original2()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($entry->is_plural) == true (line 155)
    // if ($entry->context) == false (line 158)

    $actual = $this->mO->export_original($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_original3()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($entry->is_plural) == true (line 155)
    // if ($entry->context) == true (line 158)

    $actual = $this->mO->export_original($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_translations0()
{
    $entry = m::mock('UntypedParameter_entry_');

    // TODO: Your mock expectations here

    $actual = $this->mO->export_translations($entry);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_headers0()
{
    // TODO: Your mock expectations here

    $actual = $this->mO->export_headers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExport_headers1()
{
    // TODO: Your mock expectations here

    $actual = $this->mO->export_headers();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_byteorder0()
{
    $magic = m::mock('UntypedParameter_magic_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($magic_little == $magic || $magic_little_64 == $magic) == false (line 196)
    // if ($magic_big == $magic) == false (line 198)

    $actual = $this->mO->get_byteorder($magic);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_byteorder1()
{
    $magic = m::mock('UntypedParameter_magic_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($magic_little == $magic || $magic_little_64 == $magic) == false (line 196)
    // if ($magic_big == $magic) == true (line 198)

    $actual = $this->mO->get_byteorder($magic);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_byteorder2()
{
    $magic = m::mock('UntypedParameter_magic_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($magic_little == $magic || $magic_little_64 == $magic) == true (line 196)

    $actual = $this->mO->get_byteorder($magic);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_reader0()
{
    $reader = m::mock('UntypedParameter_reader_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $endian_string) == false (line 210)
    // if ($reader->strlen($header) != 24) == false (line 218)
    // if (!\is_array($header)) == false (line 224)
    // if ($header['revision'] != 0) == false (line 229)
    // if ($originals_lengths_length != $header['total'] * 8) == false (line 238)
    // if ($reader->strlen($originals) != $originals_lengths_length) == false (line 243)
    // if ($translations_lenghts_length != $header['total'] * 8) == false (line 249)
    // if ($reader->strlen($translations) != $translations_lenghts_length) == false (line 254)
    // for (...) == false (line 270)

    $actual = $this->mO->import_from_reader($reader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_reader1()
{
    $reader = m::mock('UntypedParameter_reader_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $endian_string) == false (line 210)
    // if ($reader->strlen($header) != 24) == false (line 218)
    // if (!\is_array($header)) == false (line 224)
    // if ($header['revision'] != 0) == false (line 229)
    // if ($originals_lengths_length != $header['total'] * 8) == false (line 238)
    // if ($reader->strlen($originals) != $originals_lengths_length) == false (line 243)
    // if ($translations_lenghts_length != $header['total'] * 8) == false (line 249)
    // if ($reader->strlen($translations) != $translations_lenghts_length) == false (line 254)
    // for (...) == true (line 270)
    // if (!$o || !$t) == false (line 273)
    // if ('' === $original) == false (line 284)
    // for (...) == false (line 270)

    $actual = $this->mO->import_from_reader($reader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_reader2()
{
    $reader = m::mock('UntypedParameter_reader_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $endian_string) == false (line 210)
    // if ($reader->strlen($header) != 24) == false (line 218)
    // if (!\is_array($header)) == false (line 224)
    // if ($header['revision'] != 0) == false (line 229)
    // if ($originals_lengths_length != $header['total'] * 8) == false (line 238)
    // if ($reader->strlen($originals) != $originals_lengths_length) == false (line 243)
    // if ($translations_lenghts_length != $header['total'] * 8) == false (line 249)
    // if ($reader->strlen($translations) != $translations_lenghts_length) == false (line 254)
    // for (...) == true (line 270)
    // if (!$o || !$t) == false (line 273)
    // if ('' === $original) == true (line 284)
    // for (...) == false (line 270)

    $actual = $this->mO->import_from_reader($reader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_reader3()
{
    $reader = m::mock('UntypedParameter_reader_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $endian_string) == false (line 210)
    // if ($reader->strlen($header) != 24) == false (line 218)
    // if (!\is_array($header)) == false (line 224)
    // if ($header['revision'] != 0) == false (line 229)
    // if ($originals_lengths_length != $header['total'] * 8) == false (line 238)
    // if ($reader->strlen($originals) != $originals_lengths_length) == false (line 243)
    // if ($translations_lenghts_length != $header['total'] * 8) == false (line 249)
    // if ($reader->strlen($translations) != $translations_lenghts_length) == false (line 254)
    // for (...) == true (line 270)
    // if (!$o || !$t) == true (line 273)

    $actual = $this->mO->import_from_reader($reader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_reader4()
{
    $reader = m::mock('UntypedParameter_reader_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $endian_string) == false (line 210)
    // if ($reader->strlen($header) != 24) == false (line 218)
    // if (!\is_array($header)) == false (line 224)
    // if ($header['revision'] != 0) == false (line 229)
    // if ($originals_lengths_length != $header['total'] * 8) == false (line 238)
    // if ($reader->strlen($originals) != $originals_lengths_length) == false (line 243)
    // if ($translations_lenghts_length != $header['total'] * 8) == false (line 249)
    // if ($reader->strlen($translations) != $translations_lenghts_length) == true (line 254)

    $actual = $this->mO->import_from_reader($reader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_reader5()
{
    $reader = m::mock('UntypedParameter_reader_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $endian_string) == false (line 210)
    // if ($reader->strlen($header) != 24) == false (line 218)
    // if (!\is_array($header)) == false (line 224)
    // if ($header['revision'] != 0) == false (line 229)
    // if ($originals_lengths_length != $header['total'] * 8) == false (line 238)
    // if ($reader->strlen($originals) != $originals_lengths_length) == false (line 243)
    // if ($translations_lenghts_length != $header['total'] * 8) == true (line 249)

    $actual = $this->mO->import_from_reader($reader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_reader6()
{
    $reader = m::mock('UntypedParameter_reader_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $endian_string) == false (line 210)
    // if ($reader->strlen($header) != 24) == false (line 218)
    // if (!\is_array($header)) == false (line 224)
    // if ($header['revision'] != 0) == false (line 229)
    // if ($originals_lengths_length != $header['total'] * 8) == false (line 238)
    // if ($reader->strlen($originals) != $originals_lengths_length) == true (line 243)

    $actual = $this->mO->import_from_reader($reader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_reader7()
{
    $reader = m::mock('UntypedParameter_reader_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $endian_string) == false (line 210)
    // if ($reader->strlen($header) != 24) == false (line 218)
    // if (!\is_array($header)) == false (line 224)
    // if ($header['revision'] != 0) == false (line 229)
    // if ($originals_lengths_length != $header['total'] * 8) == true (line 238)

    $actual = $this->mO->import_from_reader($reader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_reader8()
{
    $reader = m::mock('UntypedParameter_reader_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $endian_string) == false (line 210)
    // if ($reader->strlen($header) != 24) == false (line 218)
    // if (!\is_array($header)) == false (line 224)
    // if ($header['revision'] != 0) == true (line 229)

    $actual = $this->mO->import_from_reader($reader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_reader9()
{
    $reader = m::mock('UntypedParameter_reader_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $endian_string) == false (line 210)
    // if ($reader->strlen($header) != 24) == false (line 218)
    // if (!\is_array($header)) == true (line 224)

    $actual = $this->mO->import_from_reader($reader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_reader10()
{
    $reader = m::mock('UntypedParameter_reader_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $endian_string) == false (line 210)
    // if ($reader->strlen($header) != 24) == true (line 218)

    $actual = $this->mO->import_from_reader($reader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testImport_from_reader11()
{
    $reader = m::mock('UntypedParameter_reader_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\false === $endian_string) == true (line 210)

    $actual = $this->mO->import_from_reader($reader);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake_entry0()
{
    $original = m::mock('UntypedParameter_original_');
    $translation = m::mock('UntypedParameter_translation_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($parts[1])) == false (line 308)
    // if (isset($parts[1])) == false (line 315)

    $actual = $this->mO->make_entry($original, $translation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake_entry1()
{
    $original = m::mock('UntypedParameter_original_');
    $translation = m::mock('UntypedParameter_translation_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($parts[1])) == false (line 308)
    // if (isset($parts[1])) == true (line 315)

    $actual = $this->mO->make_entry($original, $translation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake_entry2()
{
    $original = m::mock('UntypedParameter_original_');
    $translation = m::mock('UntypedParameter_translation_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($parts[1])) == true (line 308)
    // if (isset($parts[1])) == false (line 315)

    $actual = $this->mO->make_entry($original, $translation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMake_entry3()
{
    $original = m::mock('UntypedParameter_original_');
    $translation = m::mock('UntypedParameter_translation_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($parts[1])) == true (line 308)
    // if (isset($parts[1])) == true (line 315)

    $actual = $this->mO->make_entry($original, $translation);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSelect_plural_form0()
{
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    $actual = $this->mO->select_plural_form($count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_plural_forms_count0()
{
    // TODO: Your mock expectations here

    $actual = $this->mO->get_plural_forms_count();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
